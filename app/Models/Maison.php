<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proprietaire ; 

class Maison extends Model
{
    use HasFactory;
    protected $guarded = [] ; 

    public function maison_proprietaire() { 

       return  $this->hasOne(MaisonProprietaire::class) ; 
    }

}
