<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $idImovel)
 */
class Imovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'valor',
        'endereco',
        'oculto',
        'googlemaps',
        'descricao',
        'cidade_id',
    ];

    public $table = 'imoveis';
//    protected $autoincrement = true;

    public function galeria(){
        return $this->hasMany(Galeria::class, 'imovel_id', 'id');
    }
}
