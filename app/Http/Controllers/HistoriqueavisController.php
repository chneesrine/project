<?php

namespace App\Http\Controllers;
use App\Models\Appariel;
use App\Models\Emplacement;
use App\Models\Historiqueavis;
use Illuminate\Http\Request;

class HistoriqueavisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index(Request $request){
        $emplacements=Emplacement::all();
        if ($request->mois==null){
            $mois=5;
            $annee=2023;
            $emp=1;
        }else{
            $mois=$request->mois;
            $annee=$request->annee;
            $emp=$request->emp;
        }
        for($day_id=1;$day_id<cal_days_in_month(CAL_GREGORIAN, $mois, $annee)+1;$day_id++){
            $avis[$day_id][0]=$day_id;
            for($avis_id=1; $avis_id<5; $avis_id++){   
                $liste_avis = Historiqueavis::selectRaw("date_format('%Y-%m-%d',created_at) as date_avis,avis,count(*) as nb_avis")
                    ->where("avis",$avis_id)
                    ->where("emplacement_id",$emp)
                    ->whereYear('created_at', $annee)
                    ->whereMonth('created_at', $mois)
                    ->whereDay('created_at',$day_id)
                    ->groupBy("date_avis")
                    ->groupBy("avis")
                    ->get();
                    //$avis[$day_id][$avis_id]=$liste_avis;
                    
                if (count($liste_avis)==0)
                    $avis[$day_id][$avis_id]=0;
                else
                    $avis[$day_id][$avis_id]=$liste_avis->first()->nb_avis;
            }
        }
    
        //dd($avis);
        return view("Historiqueavis.index")
        ->with("avis",$avis)
        ->with("annee",$annee)
        ->with("mois",$mois)
        ->with("emp",$emp)
        ->with("emplacements",$emplacements);
        }
        

        
            // Récupérer les valeurs de l'attribut "Avis" à partir de la table "HistoriqueAvis"
            /*$historiqueAvis = HistoriqueAvis::pluck('Avis')->toArray();
        
            return view('historiqueavis.index', ['historiqueAvis' => $historiqueAvis]);
            
        
        
 
                // Si la variable $ha n'a pas de valeur, faire quelque chose ici
          
    
        $ha=historiqueavis::where("appariel_id",1)->get();
       // dd($ha);
        return view("Historiqueavis.index")->with("ha",$ha);*/
        
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
        //$ha = new Historiqueavis();
       // $ha->Avis =  $request->Avis;
        //$ha->appariel_id =$request->appariel_id;
        //$ha->Date_Heure =$request->Date_Heure;
       /* $historiqueavis=new Historiqueavis();
        $historiqueavis->Avis=$request->Avis;
        $historiqueavis->appariel_id=$request->appariel_id;
        $historiqueavis->Date_Heure=$request->Date_Heure;
        
        $historiqueavis->save();
        return redirect()->route("Historiqueavis.index");*/
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historiqueavis  $historiqueavis
     * @return \Illuminate\Http\Response
     */
    public function show(Historiqueavis $historiqueavis)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historiqueavis  $historiqueavis
     * @return \Illuminate\Http\Response
     */
    public function edit(Historiqueavis $historiqueavis)
    {
       // return view("historiqueavis.edit")->with("Historiqueavis",$historiqueavis);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historiqueavis  $historiqueavis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historiqueavis $historiqueavis)
    {
       
       /* $historiqueavis->Avis=$request->Avis;
        $historiqueavis->appariel_id=$request->appariel_id;
        $historiqueavis->Date_Heure=$request->Date_Heure;
        $historiqueavis->save();
        return redirect()->route("Historiqueavis.index");*/
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Historiqueavis  $historiqueavis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historiqueavis $historiqueavis)
    {  /* $historiqueavis->destroy($historiqueavis->id);
        return redirect()->route("Historiqueavis.index");*/

        //
    }
}
