<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsables=Responsable::all();
        return view("responsable.index")->with("responsables",$responsables);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("responsable.create");
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
        $responsable=new Responsable();
        $responsable->name=$request->name;
        $responsable->Numéro=$request->Numéro;
        $responsable->Email=$request->Email;
        $responsable->Motdepasse=$request->Motdepasse;
        $responsable->save();

        return redirect()->route("responsable.index");
        
        //
       
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show(Responsable $responsable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function edit(Responsable $Responsable)
    {
        return view("responsable.edit")->with("Responsable",$Responsable);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Responsable $responsable)
    {
        $responsable->NomPrénom=$request->NomPrénom;
        $responsable->Numéro=$request->Numéro;
        $responsable->Email=$request->Email;
        $responsable->Motdepasse=$request->Motdepasse;
        $responsable->save();
        return redirect()->route("emplacement.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responsable $responsable)
    {
        $responsable->destroy($responsable->id);
        return redirect()->route("responsable.index");
        //
    }
}
