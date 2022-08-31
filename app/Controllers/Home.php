<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Judul";
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
