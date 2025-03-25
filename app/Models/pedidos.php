<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
         'valor_total',
          'valor_com_desconto',
           'forma_pagamento',
            'status',
    ];

    
    public function cliente()
    {
        return $this->belongsTo(Client::class);
    }

   
    public function produtos()
    {
        return $this->belongsToMany(Product::class);
    }
}
