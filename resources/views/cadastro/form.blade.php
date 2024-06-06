<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Form</title>
</head>

<body>
    <form action="{{route('cadastro.enviar')}}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{isset($usuario) ? $usuario->nome : ''}}"><br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" value="{{isset($usuario) ? $usuario->sobrenome : ''}}"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{isset($usuario) ? $usuario->email : ''}}"><br>
        <label type="text" for="nomeUsuario">Nome de Usuario:</label>
        <input type="text" id="nomeUsuario" name="nomeUsuario"
            value="{{isset($usuario) ? $usuario->nomeUsuario : ''}}"><br>
        <label for="senha" id="senha" name="senha">Senha:</label>
        <input type="password" id="senha" name="senha" value="{{isset($usuario) ? $usuario->senha : ''}}"><br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" value="{{isset($usuario) ? $usuario->idade : ''}}"><br>
        <input type="hidden" name="id" value="{{isset($usuario) ? $usuario->id : ''}}">
        <button type="submit">
            Enviar
        </button>
    </form>
</body>

</html>
