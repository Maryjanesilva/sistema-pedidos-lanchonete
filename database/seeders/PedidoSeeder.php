<?php

namespace Database\Seeders;

use App\Livewire\Pedido;
use App\Models\pedidos;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pedido::table('pedidos')->insert([
            [
                'cliente_id' => 1, // ID de um cliente existente
                'valor_total' => 34.80,
                'valor_desconto' => 0.00,
                'forma_pagamento' => 'Pix',
                'status' => 'Em Aberto',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cliente_id' => 2, // Outro cliente
                'valor_total' => 52.90,
                'valor_desconto' => 5.00,
                'forma_pagamento' => 'Cartão de Crédito',
                'status' => 'Aguardando Preparo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cliente_id' => 3, // Outro cliente
                'valor_total' => 18.90,
                'valor_desconto' => 0.00,
                'forma_pagamento' => 'Dinheiro',
                'status' => 'Entregue',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
