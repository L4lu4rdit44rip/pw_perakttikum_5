<?php

namespace App\Controllers;

use App\Models\Peraktikum5Model;

class Devices extends BaseController
{
    protected $peraktikum5Model;
    public function __construct()
    {
        $this->peraktikum5Model = new Peraktikum5Model();
    }
    public function index()
    {
        $peraktikum5 = $this->peraktikum5Model->findAll();

        $data = [
            'title' => 'Devices',
            'peraktikum5' => $peraktikum5
        ];

        return view('pages/devices', $data);
    }
}
