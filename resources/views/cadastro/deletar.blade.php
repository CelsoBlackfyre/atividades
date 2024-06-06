<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Deletar Usuario</h1>

    @php
    $request = request();
    $id = $request->input('id');
    @endphp
    {{-- , ['id' => $id]) }} --}}
    <form action="{{ route('cadastro.listar'}} method=" DELETE">
        @csrf
        <label for="id">Id:</label>
        <input type="number" id="id" name="id" value="{{ $id }}"><br>
        <button type="submit">Deletar</button>
    </form>
    <form action="{{ route('cadastro.listar') method=""}}">

</body>

</html>
