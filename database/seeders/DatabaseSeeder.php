<?php

namespace Database\Seeders;



use App\Models\Utilisateur;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
     Utilisateur::factory(20)->create(); 
    
   //  Proprietaire::factory(10)->create();
   //  MaisonProprietaire::factory(5)->create();
    }
}
