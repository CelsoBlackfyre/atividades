<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro</title>
</head>

<body>
    <h1>Form de Registro Evento</h1>
    <form action="{{route('eventos.registro')}}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="evento">Data:</label>
            <input type="text" id="evento" name="evento">
        </div>

        <button type="submit">
            Enviar
        </button>
</body>

</html>