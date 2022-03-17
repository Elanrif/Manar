<?php

use App\Http\Controllers\CompteController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\MaisonController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\SocieteVoitureController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\DB;
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
Route::get('/inscription',[CompteController::class , 'index']) ; 

Route::post('/inscription',[CompteController::class , 'compte']);

Route::get('/', function() { 
 
    return view('welcome') ; 
});

/**
 * Route::get('/home', function() { 

 * $tags = Tag::all() ; 

 * return view('home', compact('tags')) ; 
  
 * $tag_posts = $tags->posts->all() ; 
 * });
 */


/**
 * Route::get('/autre' , function() { 
 *  //  $id = Tag::where('id')->get('id') ; bon ça viendra après avoir bien maitrisé les choses : avec '/autre/{id}'
 * $tags = Tag::all() ;
 *  return view('autre', compact('tags')) ; 
 * });
 */

 Route::get('/newtag',[PostTagController::class , 'index'])->name('tags') ; 
 Route::get('/newtag/{id}',[PostTagController::class , 'show'])->name('tags.show') ; 

Route::resource('films' , FilmController::class) ; 
Route::get('/maison',[MaisonController::class , 'maison'])->name('maison');
Route::get('/maison/{id}',[MaisonController::class, 'show'])->name('show'); 

Route::get('/profile', function(){

    //

})->middleware('auth');



Route::resource('products', ProductController::class);

Route::resource('films',FilmController::class) ;

Route::resource('utilisateurs',UtilisateurController::class) ; 
Route::resource('personnes',PersonneController::class);
Route::resource('voitures',VoitureController::class) ; 
Route::resource('societes',SocieteController::class) ;

