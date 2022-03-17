<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $guarded = [] ; 

    public function personnes()
    { 
        return $this->belongsToMany(Personne::class) ; 
    }

    public function societes() {

        return $this->belongsToMany(Societe::class) ; 
    }
}
