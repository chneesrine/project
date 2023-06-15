<?php

namespace Database\Seeders;
use App\Models\Emplacement;
use Illuminate\Database\Seeder;

class EmplacementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Emplacement::factory()->count(10)->create();
       
       Emplacement::create([
        "id"=>1,
        "Adresse"=>"Magasin Aziza cité el Amal Gabés"
    ]);
    Emplacement::create([
        "id"=>2,
        "Adresse"=>"Magasin Aziza cité el Menzel Gabés"
    ]);
    Emplacement::create([
        "id"=>3,
        "Adresse"=>"Magasin Aziza cité el Zrig Eddakhlania Gabés",
    ]);
    Emplacement::create([
        "id"=>4,
        "Adresse"=>"Administration Aziza cité el  Gabés"
    ]);

    }
}
