<?php
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Réalisateurs;

class RealisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('réalisateurs')->insert([
            'nom' => Str::random(10),
            'prenom' => Str::random(10),            
            ]);
               Réalisateurs::factory(3)->create();
    } 
    
}
       