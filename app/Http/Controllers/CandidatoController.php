<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;

class CandidatoController extends Controller
{
    public function index()
    {
        $candidatos = Candidato::all();
        return view('candidatos.index', compact('candidatos'));
    }

    public function create()
    {
        return view('candidatos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
           'nome' => 'required|string|max:255',
        'idade' => 'required|integer',
        'sexo' => 'required|string',
        'escolaridade' => 'required|string|in:Ensino Fundamental,Ensino Médio,Ensino Superior,Ensino Superior Incompleto',
        'cor_favorita' => 'required|string'
        ]);

        Candidato::create($validatedData);
        return redirect()->route('candidatos.index')->with('success', 'Candidato criado com sucesso!');
    }

    public function show($id)
    {
        $candidato = Candidato::findOrFail($id);
        return view('candidatos.show', compact('candidato'));
    }

    public function edit($id)
    {
        $candidato = Candidato::findOrFail($id);
        return view('candidatos.edit', compact('candidato'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
        'idade' => 'required|integer',
        'sexo' => 'required|string',
        'escolaridade' => 'required|string|in:Ensino Fundamental,Ensino Médio,Ensino Superior,Ensino Superior Incompleto',
        'cor_favorita' => 'required|string'
        ]);

        $candidato = Candidato::findOrFail($id);
        $candidato->update($validatedData);
        return redirect()->route('candidatos.index')->with('success', 'Candidato atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $candidato = Candidato::findOrFail($id);
        $candidato->delete();
        return redirect()->route('candidatos.index')->with('success', 'Candidato excluído com sucesso!');
    }
}

