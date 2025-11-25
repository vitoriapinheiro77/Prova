<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Adicione esta linha para liberar os campos:
    protected $fillable = ['nome', 'descricao'];
}