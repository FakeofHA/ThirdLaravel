<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        role::create([
            'name' => 'admin'
        ]);

        role::create([
            'name' => 'user'
        ]);
    }
}
