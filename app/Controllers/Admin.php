<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Bcrypt\Bcrypt;
use google\apiclient;

class Admin extends BaseController
{
  protected $google_client;
  protected $bcrypt;
  protected $bcrypt_version;
  protected $session;
  public function __construct()
  {
    $this->db      = \Config\Database::connect();
    $this->session = session();
    $this->bcrypt = new Bcrypt();
    $this->bcrypt_version = '2a';
    helper('form');
  }
  function get_name($table){
    $query = $this->db->query("SELECT * FROM $table");

    foreach ($query->getFieldNames() as $field) {
      echo '"'.$field.'",';
    }
  }
  public function index(){
    $form_validation = \Config\Services::validation();
    $userModel = new \App\Models\Mdl_user();
    $banyak_user = 0;
    if ($this->_make_sure_is_login()) {

      $data['title'] = "Beranda";
      $data['content'] = view('admin/content/dashboard.php');
      return view('admin/index', $data);
    }else{
      if ($this->request->getPost("submit") == "submit") {
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = $_ENV['recaptchaSecret'];
        $response = $this->request->getPost("token_generate");
        $request = file_get_contents($url.'?secret='.$secret.'&response='.$response);
        $result = json_decode($request);

        $form_validation->setRules([
          'email' => 'required|min_length[4]|max_length[39]',
          'password' => 'required|min_length[4]|max_length[39]'
        ]);
        if ($form_validation->withRequest($this->request)->run()) {
          if ($result->success) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $userModel->get_cipherpass($email);
            if ($user !=NULL && $user['status'] == 1) {
              if ($this->bcrypt->verify($password, $user['password'])) {

                $data_user = [
                  'id' => $user['id'],
                  'nama_depan'=> $user['nama_depan'],
                  'nama_belakang'=> $user['nama_belakang'],
                  'name'=> $user['nama_depan']." ".$user['nama_belakang'],
                  'email'=> $user['email'],
                  'picture'=> $user['profile_picture'],
                  'hd'=> $_ENV['domain_operator']
                ];
                // Session()->destroy();
                $userModel->where("email", $email);
                $profile = $userModel->get()->getResultArray();
                $this->session->set('profile', $profile);
                $this->session->set('auth', $data_user);
                return redirect()->to('/admin');
              }else{
                $this->session->setFlashdata('login_error', "Login Failed: Incorrect username or password");
              }
            }else{
              $this->session->setFlashdata('login_error', "User tidak aktif, silakan hubungi Administrator");
            }
          }
        }else{
          $this->session->setFlashdata('login_error', "Login Failed: minimal 4 karakter");
        }
      }
      $data['error'] = "";
      $google_client = new \Google_Client();

      $google_client->setClientId($_ENV['ssoClientId']); //Define your ClientID

      $google_client->setClientSecret($_ENV['ssoClientSecret']); //Define your Client Secret Key

      $google_client->setRedirectUri("http://localhost/admin"); //Define your Redirect Uri

      $google_client->addScope('email');

      $google_client->addScope('profile');
      $data['login_link'] = $google_client->createAuthUrl();
      if (isset($_GET['code'])) {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
        if(isset($token['access_token'])){
          $google_client->setAccessToken($token['access_token']);
          $Oauth = new \Google_Service_Oauth2($google_client);
          $userInfo = $Oauth->userinfo->get();
          Session()->auth = $userInfo;
          $userModel->where("email", $_SESSION['auth']['email']);
          $profile = $userModel->get()->getResultArray();
          $this->session->set('profile', $profile);
          if ($userInfo) {
            if ($userModel->where(array('email' => $userInfo['email']))->countAllResults() > 0) {
              $data_user_select = $userModel->where(array('email' => $userInfo['email']))->get()->getResultArray()[0];
              if (($data_user_select['nama_depan'] != $userInfo['givenName']) or ($data_user_select['profile_picture'] != $userInfo['picture'])) {
               $data_sync['nama_depan'] = $userInfo['givenName'];
               $data_sync['nama_belakang'] = $userInfo['familyName'];
               $data_sync['profile_picture'] = $userInfo['picture'];
               $userModel->set($data_sync);
               $userModel->where(array('email' => $userInfo['email']));
               $userModel->update();
             }
             $riwayat = "User ".$userInfo['name']." berhasil login kembali";
             $this->changelog($riwayat);
           }else{
            if ($userModel->countAllResults() == 0) {
              $data_baru['email'] = $userInfo['email'];
              $data_baru['nama_depan'] = $userInfo['givenName'];
              $data_baru['nama_belakang'] = $userInfo['familyName'];
              $data_baru['profile_picture'] = $userInfo['picture'];
              $data_baru['status'] = 1;
              $data_baru['level'] = 1;
              $userModel->insert($data_baru);
              $riwayat = "User ".$userInfo['name']." berhasil terdaftar sebagai Operator";
              $this->changelog($riwayat);
            }else{
              $data_baru['email'] = $userInfo['email'];
              $data_baru['nama_depan'] = $userInfo['givenName'];
              $data_baru['nama_belakang'] = $userInfo['familyName'];
              $data_baru['profile_picture'] = $userInfo['picture'];
              $data_baru['status'] = 0;
              $data_baru['level'] = 0;
              $userModel->insert($data_baru);
              $riwayat = "User ".$userInfo['name']." berhasil terdaftar sebagai User(belum terverifikasi)";
              $this->changelog($riwayat);
            }
          }
        }
        return redirect()->to('/admin');
      }
    }
    $auth = Session()->auth;
    $data['reCaptcha3Key'] = $_ENV['reCaptcha3Key'];
    return view('login/reg_admin', $data);
  }
}


}
