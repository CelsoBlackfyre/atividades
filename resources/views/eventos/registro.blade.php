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
            <label for="data">Data:</label>
            <input type="date" id="data" name="data">
        </div>
        <div>
            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora">
        </div>
        <div>
            <label for="local">Local:</label>
            <input type="text" id="local" name="local">
        </div>
        <button type="submit">
            Enviar
        </button>
</body>

</html>