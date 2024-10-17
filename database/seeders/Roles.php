<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class Roles extends Seeder
{
    public function run()
    {
        $roles = ['superadmin', 'enterprise', 'user'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
