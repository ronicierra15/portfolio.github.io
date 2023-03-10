<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trafico')->insert([
            'correo' => Str::random(8) . '@gmail.com',
            'descripciom' => 'ejecucion de seeder ejemplo 4',
        ]);
    }
}
