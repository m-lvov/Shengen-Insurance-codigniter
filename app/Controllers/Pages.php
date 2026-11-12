<?php

namespace App\Controllers;

class Pages extends BaseController{
    public function about(): string{
        session();
        return view('about');
    }

    public function careers(): string{
        session();
        return view('careers');
    }
}