<?php

namespace App\Controllers;

use App\Core\App;

class Controller
{
    public function index()
    {
        return view('index');
    }

    public function responderJSON($dados)
    {
        echo json_encode($dados);
    }
}
