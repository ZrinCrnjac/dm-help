<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')->insert([
            'name' => 'Estrella',
            'level' => 6,
            'description' => 'Ranger',
        ]);
        DB::table('characters')->insert([
            'name' => 'Gaylord Fucker',
            'level' => 6,
            'description' => 'Wizard',
        ]);
        DB::table('characters')->insert([
            'name' => 'Mary Jane',
            'level' => 6,
            'description' => 'Druid',
        ]);
        DB::table('characters')->insert([
            'name' => 'Reginald',
            'level' => 6,
            'description' => 'Paladin',
        ]);
    }
}
