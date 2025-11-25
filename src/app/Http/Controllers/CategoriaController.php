<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Busca todas as categorias do banco
        $categorias = Categoria::all();
        
        // Manda para a tela (que vamos criar jaja)
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Abre o arquivo do formulário
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        // Recebe os dados do formulário e cria no banco
        Categoria::create($request->all());

        // Volta para a lista
        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Não vamos usar essa agora
    }

    public function edit(string $id)
    {
        // Busca a categoria que você quer editar
        $categoria = Categoria::findOrFail($id);
        // Abre a tela de edição levando os dados dela
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, string $id)
    {
        // Acha a categoria no banco
        $categoria = Categoria::findOrFail($id);
        // Atualiza com os dados novos do formulário
        $categoria->update($request->all());

        // Volta para a lista
        return redirect()->route('categorias.index');
    }

    public function destroy(string $id)
    {
        // Acha a categoria e deleta
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        // Volta para a lista
        return redirect()->route('categorias.index');
    }
}
