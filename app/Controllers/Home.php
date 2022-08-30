<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo base_url();
        echo $_ENV['test'];
    }
    public function test()
    {
      echo "test";
    }
}
