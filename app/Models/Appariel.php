<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appariel extends Model
{
        use HasFactory;
        public function responsable(){
            return $this->belongsTo(responsable::class);
        }
        public function Emplacement(){
            return $this->belongsTo(Emplacement::class);     
        }
        public function HistoriqueAvis(){
            return $this->hasMany(HistoriqueAvis::class);     
             }
             
}
