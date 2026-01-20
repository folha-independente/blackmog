<?php

namespace App\Http\Controllers;

use App\Models\Projeto;

class PortfolioController extends Controller
{
    public function index()
    {
        $projetos = Projeto::todos();
        return view('portfolio', compact('projetos'));
    }
}
