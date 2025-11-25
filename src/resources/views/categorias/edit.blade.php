<!DOCTYPE html>
<html>
<head>
    <title>Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT') <label>Nome:</label>
        <input type="text" name="nome" value="{{ $categoria->nome }}" required>
        <br><br>

        <label>Descrição:</label>
        <textarea name="descricao">{{ $categoria->descricao }}</textarea>
        <br><br>

        <button type="submit">Atualizar</button>
    </form>
    
    <br>
    <a href="{{ route('categorias.index') }}">Cancelar</a>
</body>
</html>