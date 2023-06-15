<?php

namespace App\Http\Controllers;

use App\Models\Appariel;
use App\Models\Historiqueavis;
use App\Models\Emplacement;
use Illuminate\Http\Request;

class ApparielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appariels=Appariel::all();
        return view("appariel.index")->with("appariels",$appariels);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emplacements=Emplacement::all();
        return view("appariel.create")->with("emplacements",$emplacements); 
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

        $count=Appariel::where("emplacement_id",$request->emplacement_id)->get()->count();
        if ($count>0){
            return redirect()->route("appariel.index")->withErrors("Echec de l'ajout de l'appareil. Un seul appreil peut être affecté à un emplacement");
        }
        $appariel=new Appariel();
        $appariel->Actif=$request->has('Actif');
        $appariel->emplacement_id=$request->emplacement_id;
        $appariel->save();
        return redirect()->route("appariel.index");
    }

        //
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appariel  $appariel
     * @return \Illuminate\Http\Response
     */
    public function show(Appariel $appariel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appariel  $appariel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $appariel = Appariel::find($id);
    return view('appariel.edit', ['appariel' => $appariel]);
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appariel  $appariel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appariel $appariel)
    {
        $appariel->Actif=$request->has('Actif');
        $appariel->emplacement_id=$request->emplacement_id;
        $appariel->save();
        return redirect()->route("appariel.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appariel  $appariel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appariel $appariel)
    {
        
        $historique_count=Historiqueavis::where("appariel_id",$appariel->id)->get()->count();
        if ( $historique_count>0){
            return redirect()->route("appariel.index")->withErrors("Impossible de supprimer l'appareil car  elle a un historique avis.");
        }else{
            $appariel->destroy($appariel->id);
            return redirect()->route("appariel.index");
        }

        //
    }
}
