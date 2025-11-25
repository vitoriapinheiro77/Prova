<!DOCTYPE html>
<html>
<head>
    <title>Nova Categoria</title>
</head>
<body>
    <h1>Nova Categoria</h1>

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf <label>Nome:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>Descrição:</label>
        <textarea name="descricao"></textarea>
        <br><br>

        <button type="submit">Salvar Categoria</button>
    </form>
    
    <br>
    <a href="{{ route('categorias.index') }}">Voltar</a>
</body>
</html>