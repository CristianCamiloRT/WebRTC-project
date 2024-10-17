<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enterprise;

class Enterprises extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Enterprise::create([
            'name' => 'Empresa Ejemplo',
            'nit' => '123456789',
            'phone' => '1234567890',
            'plan_id' => 1  // Asegúrate de que el ID 1 sea el del plan de prueba
        ]);
    }
}
