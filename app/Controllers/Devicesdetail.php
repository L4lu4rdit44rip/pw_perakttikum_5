<?php

namespace App\Controllers;

class Devicesdetail extends BaseController
{


    public function index()
    {
        $data = [
            'title' => 'Devices'
        ];
        return view('pages/Devicesdetail', $data);
    }
}
