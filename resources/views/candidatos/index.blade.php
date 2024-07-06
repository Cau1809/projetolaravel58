@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Candidatos</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('candidatos.create') }}" class="btn btn-primary mb-3">Adicionar Candidato</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Escolaridade</th>
                <th>Cor Favorita</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($candidatos as $candidato)
                <tr>
                    <td>{{ $candidato->nome }}</td>
                    <td>{{ $candidato->idade }}</td>
                    <td>{{ $candidato->sexo }}</td>
                    <td>{{ $candidato->escolaridade }}</td>
                    <td>{{ $candidato->cor_favorita }}</td>
                    <td>
                        <a href="{{ route('candidatos.edit', $candidato->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('candidatos.destroy', $candidato->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este candidato?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
