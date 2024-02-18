<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ReservaSeeder;

class DatabaseSeeder extends Seeder{
    
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(HorarioSeeder::class);
        $this->call(ReservaSeeder::class);

        
    }
}
