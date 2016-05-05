<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['tarefa', 'descricao', 'status'];

    public $timestamps = false;
}
