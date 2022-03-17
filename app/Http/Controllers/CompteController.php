<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function index() {  



        return view('inscription') ; 
    }
    public function compte() { 

         request()->validate([

            'nom' =>['required'] ,
            'prenom' =>['required'] ,
            'email' =>['required' , 'email'] ,
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],

         ]);

        $user = Compte::create([
            'nom'=> request('nom') , 
            'prenom'=> request('prenom') , 
            'email'=> request('email') , 
            'mot_de_passe'=> request('password') , 
        ]) ; 
    

        return redirect('/')->with('message','votre compte a été créer avec succès'); 
    }
}
