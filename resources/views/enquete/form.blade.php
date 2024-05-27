<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Preferencia</title>
</head>

<body>
    <h1>Qual é teu filme favorito ?</h1>
    <form action="{{route('enquete.form')}}">
        @csrf
        <div>
            <label for="pergunta">Qual é o filme favorito de vocês</label>
            <select name="filmes" id="filmes">
                <option value="LOTR">Senhor dos Aneis</option>
                <option value="DUNA">Duna</option>
                <option value="SW">Star Wars</option>
                <option value="MM">Mad Max</option>
            </select>
        </div>

        <button type="submit">
            Enviar
        </button>
    </form>
</body>

</html>