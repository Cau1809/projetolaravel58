<!DOCTYPE html>
<html>
<head>
    <title>Lista de Candidatos</title>
</head>
<body>
    <h1>Lista de Candidatos</h1>
    <ul>
        @foreach ($candidatos as $candidato)
            <li>{{ $candidato->nome }} - {{ $candidato->idade }} anos</li>
        @endforeach
    </ul>
</body>
</html>
