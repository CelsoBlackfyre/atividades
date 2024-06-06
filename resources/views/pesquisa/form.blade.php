<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form de Pesquisa</title>
</head>

<body>
    <h1>Campo de Pesquisa</h1>
    <form action="{{route('pesquisa.enviar')}}" method="GET">
        <label for="pesquisa">Termo de pesquisa:</label>
        <input type="text" id="pesquisa" name="pesquisa">
        <button type="submit">Pesquisar</button>
    </form>
    @if (isset($pesquisa))
    <h2>Você pesquisou por: {{ $pesquisa }}</h2>
    @endif
</body>

</html>