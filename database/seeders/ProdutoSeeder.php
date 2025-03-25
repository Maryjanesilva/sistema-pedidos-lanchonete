<?php

namespace Database\Seeders;

use App\Livewire\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::table('produtos')->insert([
            [
                'nome' => 'X-Burger',
                'ingredientes' => 'Pão, Hambúrguer, Queijo, Alface, Tomate, Maionese',
                'valor' => 15.90,
                'imagem' => 'xburger.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'X-Bacon',
                'ingredientes' => 'Pão, Hambúrguer, Queijo, Bacon, Alface, Tomate, Maionese',
                'valor' => 18.90,
                'imagem' => 'xbacon.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Batata Frita',
                'ingredientes' => 'Batata frita crocante, Sal',
                'valor' => 12.00,
                'imagem' => 'batata.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Refrigerante Lata',
                'ingredientes' => 'Refrigerante em lata (Coca-Cola, Guaraná, Fanta)',
                'valor' => 6.00,
                'imagem' => 'refrigerante.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
