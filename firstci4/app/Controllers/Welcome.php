<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function index(): string
    {
        $data['title'] = "Hello World!";
        return view('welcome_view', $data);
    }
}
