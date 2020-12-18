<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class AddRoles extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'user'
        ]);
        Role::create([
            'name' => 'admin'
        ]);
    }
}
