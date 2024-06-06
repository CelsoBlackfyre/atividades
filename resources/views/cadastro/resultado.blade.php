<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrado</title>
</head>

<body>

    @php
    $request = request();
    $nome = $request->input('nome');
    $sobrenome = $request->input('sobrenome');
    $email = $request->input('email');
    $nomeUsuario = $request->input('nomeUsuario');
    $senha = $request->input('senha');
    $idade = $request->input('idade');
    @endphp

    @csrf
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Cadastrado</h1>
                <p>Nome: {{ $nome }}</p>
                <p>Sobrenome: {{ $sobrenome }}</p>
                <p>Email: {{ $email }}</p>
                <p>Nome de Usuario: {{ $nomeUsuario }}</p>
                <p>Senha: {{ $senha }}</p>
                <p>Idade: {{ $idade }}</p>
                <button type="submit">
                    <a href="{{ route('cadastro.listar') }}">Voltar</a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>
