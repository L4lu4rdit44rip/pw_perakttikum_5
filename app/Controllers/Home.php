<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Lalu Ardita Arip'
        ];
        return view('pages/home', $data);
    }
}
