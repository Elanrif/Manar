


@extends('layout.page')

@section('auth')

<h1 class=" fs-4 text-center text-success mt-5 pt-5"> Voici le contenu de cette utilisateur : </h1>

<ul class="text-center" style="list-style:none ;">

    <li class ="py-2">  <span class="text-primary fs-5">  
        
    
    @forelse($tag_posts as $post)
  
   <span class="text-warning fs-3">Titre : </span>  {{$post->title}}  <br> <span class="text-warning fs-3">Contenu :</span>  {{ $post->content}} <br/> <hr> <br>
    
   @empty
  
    <p class="alert alert-danger"> Aucun contenu !  </p>

    @endforelse
   
</ul>

@endsection 
