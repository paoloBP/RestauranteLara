<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Produto extends Model

{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'estoque',
        'imagem',
        'id_user',
        'id_categoria',

        ];
}
