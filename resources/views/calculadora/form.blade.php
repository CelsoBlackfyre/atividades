<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form action="{{route('calculadora.calcular')}}" method="POST">
        @csrf
        <div>
            <label for="numero1">Primeiro Valor:</label>
            <input type="text" id="numero1" name="numero1">
        </div>
        <div>
            <label for="numero2">Segundo Valor:</label>
            <input type="text" id="numero2" name="numero2">
        </div>
        <div>
            <label for="operador">Operação:</label>
            <select id="operador" name="operador">
                <option value="+">Adição</option>
                <option value="-">Subtração</option>
                <option value="*">Multiplicação</option>
                <option value="/">Divisão</option>
            </select>
        </div>
        <button type="submit">
            Enviar
        </button>
    </form>
    @if (@isset($resultado))
    <div id="resultado">
        <p>Resultado: {{$resultado}}</p>
    </div>
    @endif
</body>

</html>