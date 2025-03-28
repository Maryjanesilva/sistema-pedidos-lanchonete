<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome', 
        'endereco', 
        'telefone',
         'cpf',
          'email',
         'senha',
    ];

    
    public function pedidos()
    {
        return $this->hasMany(Pedidos::class);
    }
}
