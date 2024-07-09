@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Criar Novo Candidato</div>

                    <div class="card-body">
                        <form action="{{ route('candidatos.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade:</label>
                                <input type="number" name="idade" id="idade" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sexo">Sexo:</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                            </div>
                         <div class="form-group">
                            <label for="escolaridade">Escolaridade:</label>
                            <select class="form-control" name="escolaridade" required>
                                <option value="Ensino Fundamental">Ensino Fundamental</option>
                                <option value="Ensino Médio">Ensino Médio</option>
                                <option value="Ensino Superior">Ensino Superior</option>
                                <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
                          </select>
                     </div>

                            <div class="form-group">
                                <label for="cor_favorita">Cor Favorita:</label>
                                <select name="cor_favorita" id="cor_favorita" class="form-control">
                                    <option value="azul">Azul</option>
                                    <option value="branco">Branco</option>
                                    <option value="vermelho">Vermelho</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


