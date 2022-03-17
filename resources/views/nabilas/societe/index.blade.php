
@include('layout.page')
@extends('products.layout')
 
@section('content')
 <div class="card-group mt-5 d-flex " style="padding-top:60px;">

 @foreach($societes as $societe)
  <div class="card my-5 mx-3">
    <img src="{{ asset('societe/'.$societe->photo)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-secondary">Nom-société: {{ $societe->nom }}</h5>
      <p class="card-text mt-3 ">Address : <br/> {{$societe->adresse}}</p> <hr>
      <p class="card-text"><small class="text-muted">Tel : {{$societe->num}}</small></p>
    </div>
    <a href="{{route('societes.show', $societe->id)}}" class="btn btn-primary w-50">visualiser</a>
  </div>
  @endforeach
</div>
@endsection

