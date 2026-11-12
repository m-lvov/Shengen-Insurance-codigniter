<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        session();
        return view('home');
    }
}
