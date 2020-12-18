<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class AddRoles extends Seeder
{
    public function run()
    {    
    DB::table('user_role')->where('user_id', '=', 1)->update([
            'role_id' => 2
        ]);
    }
}
