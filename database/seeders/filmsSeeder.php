<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class filmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'titre' => 'The Shawshank Redemption',
            'annee' => 1994,
            'extrait' => 'Two imprisoned',
            'réalisateurs_id' => 1, ]) ; 
    }
}
