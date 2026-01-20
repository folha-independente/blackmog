<?php

namespace App\Http\Controllers;

use App\Models\Projeto;

class ProjetoController extends Controller
{
    public function index()
    {
        $projetos = Projeto::todos();
        return view('projetos.index', compact('projetos'));
    }
    
    public function show($slug)
    {
        $projeto = Projeto::porSlug($slug);
        
        if (!$projeto) {
            abort(404);
        }
        
        return view('projetos.show', compact('projeto'));
    }
}
