<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $guarded = [] ;
    
    public function voitures(){ 

        return $this->belongsToMany(Voiture::class) ; 
    }
}
