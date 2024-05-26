<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TypeRumah;
use Illuminate\Database\Seeder;

class TypeRumahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeRumah::create(['type_rumah' => 'rumah']);
        TypeRumah::create(['type_rumah' => 'ruko']);
        TypeRumah::create(['type_rumah' => 'kavling']);
    }
}
