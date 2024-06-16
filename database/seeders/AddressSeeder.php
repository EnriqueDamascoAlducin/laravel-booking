<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CustomerAddress;
use Illuminate\Support\Str;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerAddress::factory(2)->create([
            'user_id' => 1,
            'street' => Str::random(15),
            'country' => Str::random(10),
            'city' => Str::random(10),
            'state' => Str::random(10),
            'postcode' => 54803,
            'country' => Str::random(10)
        ]);
    }
}
