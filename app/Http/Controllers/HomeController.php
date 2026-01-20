<?php

namespace App\Http\Controllers;

use App\Models\Projeto;

class HomeController extends Controller
{
    public function index()
    {
        $destaques = Projeto::destaques();
        return view('home', compact('destaques'));
    }
}
