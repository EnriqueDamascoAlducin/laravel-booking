<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     // create 10 users with role admin   
        User::factory(10)->create(['role' => 'admin', 'nickname' => '', 'lastname' => '']);
    }
}
