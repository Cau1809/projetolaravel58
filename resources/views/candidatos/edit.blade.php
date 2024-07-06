@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Candidato</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('candidatos.update', $candidato->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" value="{{ $candidato->nome }}" required>
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" class="form-control" name="idade" value="{{ $candidato->idade }}" required>
        </div>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select class="form-control" name="sexo" required>
                <option value="Masculino" {{ $candidato->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Feminino" {{ $candidato->sexo == 'Feminino' ? 'selected' : '' }}>Feminino</option>
            </select>
        </div>
        <div class="form-group">
            <label for="escolaridade">Escolaridade:</label>
            <input type="text" class="form-control" name="escolaridade" value="{{ $candidato->escolaridade }}" required>
        </div>
        <div class="form-group">
            <label for="cor_favorita">Cor Favorita:</label>
            <select class="form-control" name="cor_favorita" required>
                <option value="azul" {{ $candidato->cor_favorita == 'azul' ? 'selected' : '' }}>Azul</option>
                <option value="branco" {{ $candidato->cor_favorita == 'branco' ? 'selected' : '' }}>Branco</option>
                <option value="vermelho" {{ $candidato->cor_favorita == 'vermelho' ? 'selected' : '' }}>Vermelho</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection

