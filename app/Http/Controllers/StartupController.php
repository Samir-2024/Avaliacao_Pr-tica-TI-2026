<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Startup;

class StartupController extends Controller
{
    // Responsável por carregar a página com a lista
    public function index()
    {
        $startups = Startup::all(); 
        return view('startup', compact('startups'));
    }

    // Responsável por salvar e retornar JSON (como você pediu)
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:120',
            'setor' => 'required|string',
            'email_contato' => 'required|email',
            'data_cadastro' => 'required|date'
        ]);

        $startup = Startup::create($request->all());

        
        return response()->json($startup, 201);
        
   }
}