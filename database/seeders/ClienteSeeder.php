<?php

namespace Database\Seeders;

use App\Livewire\Cliente;
use App\Models\Client;
use Carbon\Carbon;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Psr\Http\Client\ClientInterface;
use Spatie\FlareClient\Http\Client as HttpClient;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::table('clientes')->insert([
            [
                'nome' => 'João Silva',
                'endereco' => 'Rua das Flores, 123 - São Paulo, SP',
                'telefone' => '(11) 98765-4321',
                'cpf' => '12345678901',
                'email' => 'joao@email.com',
                'senha' => Hash::make('senha123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Maria Oliveira',
                'endereco' => 'Av. Paulista, 500 - São Paulo, SP',
                'telefone' => '(11) 92345-6789',
                'cpf' => '98765432100',
                'email' => 'maria@email.com',
                'senha' => Hash::make('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Carlos Souza',
                'endereco' => 'Rua Central, 50 - Rio de Janeiro, RJ',
                'telefone' => '(21) 99988-7766',
                'cpf' => '45678912300',
                'email' => 'carlos@email.com',
                'senha' => Hash::make('carlos123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
        }
    }
