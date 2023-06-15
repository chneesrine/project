<?php

namespace Database\Seeders;
use App\Models\Historiqueavis;
use Illuminate\Database\Seeder;

class HistoriqueavisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Historiqueavis::create([
            "Avis"=>3,
            "appariel_id"=>1,
            "emplacement_id"=>1,
            "created_at"=>"2023-05-09 01:02:02"
        ]);
        Historiqueavis::create([
            "Avis"=>4,
            "appariel_id"=>1,
            "emplacement_id"=>1,
            "created_at"=>"2023-05-09 01:02:02"
        ]);
        Historiqueavis::create([
            "Avis"=>3,
            "appariel_id"=>1,
            "emplacement_id"=>1,
            "created_at"=>"2023-05-09 01:05:00"
        ]);
        Historiqueavis::create([
            "Avis"=>1,
            "appariel_id"=>1,
            "emplacement_id"=>1,
            "created_at"=>"2023-05-09 02:22:22"
        ]);
        Historiqueavis::create([
            "Avis"=>3,
            "appariel_id"=>1,
            "emplacement_id"=>1,
            "created_at"=>"2023-05-09 02:11:11"
        ]);

        Historiqueavis::create([
            "Avis"=>3,
            "appariel_id"=>2,
            "emplacement_id"=>2,
            "created_at"=>"2023-05-01 01:05:00"
        ]);
        Historiqueavis::create([
            "Avis"=>1,
            "appariel_id"=>2,
            "emplacement_id"=>2,
            "created_at"=>"2023-05-01 02:22:22"
        ]);
        Historiqueavis::create([
            "Avis"=>3,
            "appariel_id"=>2,
            "emplacement_id"=>2,
            "created_at"=>"2023-05-01 02:11:11"
        ]);
        

    }
}