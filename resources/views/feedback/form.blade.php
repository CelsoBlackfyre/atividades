<!DOCTYPE html>
<html lang="en">

<head>
    <title>Feedback Produtos</title>
</head>

<body>
    <h1>Feedback de produtos</h1>
    <form action="{{route('feedback.enviar')}}" method="POST">
        @csrf
        <div>
            <label for="nomeProduto">Nome do Produto:</label>
            <input type="text" id="nomeProduto" name="nomeProduto">
        </div>
        <div></div>
        <label for="avaliacao">Avaliação:</label>
        <select id="avaliacao" name="avaliacao"></select>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </select>
        </div>
        <div>
            <label for="comentario">Comentários:</label>
            <textarea id="comentarios" name="comentarios"></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>