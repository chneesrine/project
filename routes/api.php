<?php

use App\Http\Controllers\HistoriqueavisController;

use Illuminate\Http\JsonResponse;

use Illuminate\Http\Request;
use App\Models\Historiqueavis;
use App\Models\appariel;
use Illuminate\Support\Facades\Route;




Route::get("/Avis",function(){
    $ha=Historiqueavis::all();
    return $ha->toJson();
});

Route::POST("/Avis/add",function(Request $request){
    $ha = new Historiqueavis();
    $ha->Avis=$request->Avis;
    $ha->appariel_id=$request->appariel_id;
    $appariel = Appariel::find($ha->appariel_id);
    $ha->emplacement_id = $appariel->emplacement->id;
    //$ha->Date_Heure=$request->Date_Heure;
    if ($appariel->Actif){
        try{
            $ha->save();
            $data["status"]="ok";
        }catch(\Exception $e){
            $data["status"]="erreur";
            $data["erreur"]=$e->getMessage();
        }
    }else{
        $data["status"]="erreur";
        $data["erreur"]="L'appreil est inactif!";
    }
    
    return response()->json($data);
});


    

    


