<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'cidade',
        'valor',
        'endereco',
        'oculto',
        'googlemaps',
        'descricao',
        'cidade_id',
    ];

    public $table = 'imoveis';
}
