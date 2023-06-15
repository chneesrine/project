<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplacement extends Model
{
    use HasFactory;
    public function responsable(){
        return $this->belongsTo(Responsable::class);
    }
    public function appariel(){
        return $this->belongsTo(appariel::class);     
    }
}
