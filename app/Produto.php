<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    
    protected $fillable = ['nome', 'quantidade', 'valor', 'descricao'];

    public $timestamps = false;
}