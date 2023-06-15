<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmplacementController;
use App\Http\Controllers\ApparielController;

use App\Http\Controllers\HistoriqueavisController;
use App\Models\Emplacement;

use App\Models\Historiqueavis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("index");

Route::resource("/user",UserController::class)->middleware("auth");
Route::resource("/emplacement",EmplacementController::class)->middleware("auth");
Route::resource("/appariel",ApparielController::class)->middleware("auth");

Route::resource("/Historiqueavis",HistoriqueavisController::class)->middleware("auth");


Route::redirect('/', '/login')->middleware("auth");




Route::middleware('auth')->group(function () {
    // Routes protégées ici
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/profile', 'ProfileController@index');
    // Autres routes protégées
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/statistique_avis_mois",function(Request $request){
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
    return view("Historiqueavis.parjour")
    ->with("avis",$avis)
    ->with("annee",$annee)
    ->with("mois",$mois)
    ->with("emp",$emp)
    ->with("emplacements",$emplacements);
    
})->name("statistique_avis_mois")->middleware("auth");



Auth::routes();