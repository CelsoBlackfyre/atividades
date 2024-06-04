<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Enquete</title>
</head>

<body>
    <h1>Qual é teu filme favorito ?</h1>
    <form action="{{route('enquete.form')}}" method="POST">
        @csrf
        <div>
            <input type="radio" name="filme" value="Star Wars" id="Star Wars">Star Wars
        </div>
        <div>
            <input type="radio" name="filme" value="Harry Potter" id="Harry Potter">Harry Potter
        </div>

        <div></div>
        <input type="radio" name="filme" value="Senhor dos Aneis" id="Senhor dos Aneis">Senhor dos Aneis
        </div>

        <div>
            <input type="radio" name="filme" value="Duna" id="Duna">Duna
        </div>

        <div>
            <input type="radio" name="filme" value="Mad Max" id="Mad Max">Mad Max
        </div>

        <button type="submit">
            Enviar
        </button>
    </form>
    @if (@isset($preferencia))
    <div id="resultados">
        <p>A sua preferência é: {{$resultados}}</p>
    </div>
    @endif
</body>

</html>