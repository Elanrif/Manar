<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    public function index()  { 

       $tags =  Tag::all() ; 

        return view('home',compact('tags')) ; 
    }

    public function show($id) {

        $post = Tag::findOrFail($id) ; 
        $tag_posts = $post->posts ; 
        
        return view('autre' , compact('tag_posts')) ; 
    }}
