<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;

    protected $fillable= [
        'path'
    ];

    public function imovel(){
        return $this->belongsTo(Imovel::class,'imovel_id','id');
    }
}
