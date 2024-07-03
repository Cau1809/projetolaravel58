<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;

class CandidatoController extends Controller
{
    public function index()
    {
        // Pega todos os candidatos do banco de dados
        $candidatos = Candidato::all();

        // Retorna a visão com a lista de candidatos
        return view('candidatos.index', compact('candidatos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer',
            'sexo' => 'required|string',
            'escolaridade' => 'required|string',
            'cor_favorita' => 'required|string'
        ]);

        Candidato::create($validatedData);

        return redirect()->back()->with('success', 'Candidato criado com sucesso!');
    }
}
