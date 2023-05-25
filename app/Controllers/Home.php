<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }


    public function store()
    {
        return view('store');
    }

    public function create()
    {
    }


    # code...$data = [    'created_At'=> date('Y-m-d : h:i:s')]



}
