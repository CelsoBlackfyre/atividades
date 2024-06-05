<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Usuario</title>
</head>

<body>
    <h1>Lista de Usuários</h1>
    <ul>
        @foreach ($usuarios as $usuario)
        <li>
            <p>Nome: {{ $usuario->nome }}</p><br>
            <p> Usuario: {{ $usuario->sobrenome }}</p><br>
            <p>Email: {{ $usuario->email }}</p><br>
            <p> Nome de Usuario: {{ $usuario->nomeUsuario }}</p><br>
            <p> Senha: {{ $usuario->senha }}</p><br>
            <p>Idade: {{ $usuario->idade }}</p><br>
            <form action="{{ route('cadastro.deletar', $usuario->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>

        </li>
        @endforeach
    </ul>

</body>

</html>
