<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
     'ingredientes',
         'valor', 
         'imagem',
    ];

    
    public function pedidos()
    {
        return $this->belongsToMany(Pedidos::class);
    }
}
