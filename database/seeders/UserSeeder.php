<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Novan', 'email' => 'novan.zulhilmi@gmail.com', 'password' => bcrypt('PandaCraft')],
            ['name' => 'Panda', 'email' => 'PandaCraft@gmail.com', 'password' => bcrypt('PandaCraft')],
            ['name' => 'Lazeays', 'email' => 'Lazeays@gmail.com', 'password' => bcrypt('PandaCraft')],
        ];
        \App\Models\User::insert($data);
    }
}
