<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class Plans extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Plan::create([
            'name' => 'Pruebas',
            'price' => 0,  
            'features' => 'Este es un plan de prueba limitado'
        ]);
    }
}
