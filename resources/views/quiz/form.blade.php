<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz</title>
</head>

<body>
    <h1>Quiz</h1>

    <form action="{{route ('quiz.respostas')}}" method="POST">
        @csrf
        <div>
            <label for="pergunta1">Qual e a capital da Inglaterra ?</label>
            <input type="text" name="pergunta1" id="pergunta1">
            @error('pergunta1')
            <div>{{$message}}</div>
            @enderror
        </div>

        <div>
            <label for="pergunta2">Quanto sao 2 + 2 ?</label>
            <input type="text" name="pergunta2" id="pergunta2">
            @error('pergunta2')
            <div>{{$message}}</div>
            @enderror
        </div>
        <button type="submit">
            Enviar
        </button>
    </form>
</body>

</html>
