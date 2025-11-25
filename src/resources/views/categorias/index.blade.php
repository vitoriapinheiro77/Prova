<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
</head>
<body>
    <h1>Lista de Categorias</h1>

    <a href="{{ route('categorias.create') }}">+ Nova Categoria</a>
    <br><br>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>
                    <td>{{ $categoria->descricao }}</td>
                    <td>
                        <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                        
                        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>