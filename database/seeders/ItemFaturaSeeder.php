<?php

namespace Database\Seeders;

use App\Models\ItemFatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemFaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemFatura::factory(10)->create();
    }
}
