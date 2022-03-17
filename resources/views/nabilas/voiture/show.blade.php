
@include('layout.page')
@extends('products.layout')
 
@section('content')
 <div class="card-group mt-5 bg-dark w-100 ">

  <div class="card my-5 mx-3">
    <img src="{{ asset('pictures/'.$voiture->picture)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-dark fs-3 "> Marque : <span class="text-info">{{$voiture->marque}} </span></p>
      <p class="card-text text-black fs-5 ">Description : <br/> <span class="text-muted">{{$voiture->description}}</span></p> <hr>
      <p class="card-text text-dark"> Model : <span class="text-primary">{{$voiture->model}} </span></p>
      <p class="card-text text-dark"> Prix : <span class="text-primary">{{$voiture->prix}} DHS</span></p>
     
      @foreach($voiture->personnes as $personne)
      <p class="card-text text-dark"> Proprietaire : <span class="text-primary">{{$personne->nom}}  </span></p>
      <p class="card-text text-dark"> Email : <span class="text-primary">{{$personne->email}}  </span></p>
     @endforeach
    </div>
    <a href="{{route('voitures.index')}}" class="btn btn-warning " style="width:100px; margin:20px 30px;">acheter</a>
  </div>
  
</div>
@endsection