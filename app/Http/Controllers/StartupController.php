<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Startup;

class StartupController extends Controller
{
    public function store(Request $request) {

    
    $request->validate([
        'nome' => 'required|string|max:120',
        'setor' => 'nullable|string',
        'email_contato' => 'required|email',
        'data_cadastro' => 'required|date'
    ]);

    Startup::create([
        'nome' => $request->nome,
        'setor' => $request->setor,
        'email_contato' => $request->email_contato,
        'data_cadastro' => $request->data_cadastro,
    ]);
    return redirect()->back()->with('sucess', 'Startup cadastrada com sucesso!');
    }
}
