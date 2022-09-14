<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Judul";
      $data['content'] = view('home/content/content.php');
      return view('home/index', $data);
  }
    public function test()
    {
      echo $this->a();
  }
  function a(){
    return "abcdefghij";
}
}
