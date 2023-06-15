<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appariel;
class ApparielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Appariel::factory()->count(10)->create();
        Appariel::create([
            "id"=>1,
            "Actif"=>1,
            "Emplacement_id"=>1
        ]);
        //
    }
}
