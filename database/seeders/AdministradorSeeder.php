<?php

namespace Database\Seeders;

use App\Livewire\Administrador;
use App\Models\administradores;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Administrador::table('administradores')->insert([
            [
                'nome' => 'Carlos Mendes',
                'cpf' => '12345678900',
                'email' => 'carlos.mendes@email.com',
                'senha' => Hash::make('admin123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Fernanda Lima',
                'cpf' => '09876543211',
                'email' => 'fernanda.lima@email.com',
                'senha' => Hash::make('senhaadmin'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
