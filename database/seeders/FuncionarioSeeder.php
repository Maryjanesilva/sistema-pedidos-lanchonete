<?php

namespace Database\Seeders;

use App\Livewire\Funcionario;
use App\Models\funcionarios;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funcionario::table('funcionarios')->insert([
            [
                'nome' => 'Ana Souza',
                'cpf' => '11122233344',
                'email' => 'ana.souza@email.com',
                'senha' => Hash::make('senha123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Pedro Santos',
                'cpf' => '55566677788',
                'email' => 'pedro.santos@email.com',
                'senha' => Hash::make('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Mariana Oliveira',
                'cpf' => '99988877766',
                'email' => 'mariana.oliveira@email.com',
                'senha' => Hash::make('funcionario321'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
