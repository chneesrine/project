<?php

namespace App\Http\Controllers;

use App\Models\Appariel;
use App\Models\Emplacement;
use App\Models\Historiqueavis;
use Illuminate\Http\Request;

class EmplacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emplacements=Emplacement::all();
        return view("emplacement.index")->with("emplacements",$emplacements);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("emplacement.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emplacement=new Emplacement();
        $emplacement->Adresse=$request->Adresse;
        $emplacement->save();
        return redirect()->route("emplacement.index");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emplacement  $emplacement
     * @return \Illuminate\Http\Response
     */
    public function show(Emplacement $emplacement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emplacement  $emplacement
     * @return \Illuminate\Http\Response
     */
    public function edit(Emplacement $emplacement)
    {
        return view("emplacement.edit")->with("Emplacement",$emplacement);
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emplacement  $emplacement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emplacement $emplacement)
    {
        $emplacement->Adresse=$request->Adresse;
        $emplacement->save();
        return redirect()->route("emplacement.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emplacement  $emplacement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emplacement $emplacement)
    {

        $app_count=Appariel::where("emplacement_id",$emplacement->id)->get()->count();
        $historique_count=Historiqueavis::where("emplacement_id",$emplacement->id)->get()->count();
        if ($app_count>0 || $historique_count>0){
            return redirect()->route("emplacement.index")->withErrors("Impossible de supprimer l'emplacement car il à été utilisé.");
        }else{
            $emplacement->destroy($emplacement->id);
            return redirect()->route("emplacement.index");
        }

        //
    }
}
