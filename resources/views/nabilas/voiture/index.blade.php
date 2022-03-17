
@include('layout.page')
@extends('products.layout')
 
@section('content')
 <div class="card-group mt-5 ">

 @foreach($voitures as $voiture)
  <div class="card my-5 mx-3">
    <img src="{{ asset('pictures/'.$voiture->picture)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-secondary">Marque : {{ $voiture->marque }}</h5>
      <p class="card-text mt-3 ">Description : <br/> {{$voiture->description}}</p> <hr>
      <p class="card-text"><small class="text-muted">Model : {{$voiture->model}} 
      <br/> <span class="text-danger">Societe : </span> 
       @foreach($voiture->societes as $societe)
       <span class="text-info">  {{$societe->nom}} </span>
       @endforeach
      </small></p>
    </div>
    <a href="{{route('voitures.show', $voiture->id)}}" class="btn btn-primary w-50">visualiser</a>
  </div>
  @endforeach
</div>
@endsection