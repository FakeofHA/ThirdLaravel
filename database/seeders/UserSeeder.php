<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Nguyễn Hoàng Anh',
            'email' => 'hoanganh.19990210@outlook.com',
            'password' => bcrypt('zCaL5Vir'),
            'roleId' => 1
        ]);
    }
}
