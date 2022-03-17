


@include('layout.page')
@extends('products.layout')
 
@section('content')
 <div class="card-group mt-5 w-100 ">

  <div class="card my-5 mx-3">
    <img src="{{ asset('societe/'.$societe->photo)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text text-dark fs-3 "> Nom: <span class="text-info">{{$societe->nom}} </span></p>
      <p class="card-text text-black fs-5 ">Adresse : <br/> <span class="text-muted">{{$societe->adresse}}</span></p> <hr>
      
    </div>
    <div class="row">
    <a href="{{route('societes.index')}}" class="btn btn-danger " style="width:100px; margin:20px 30px; height:40px;">Retour</a>
    <a href="{{ route('voitures.index')}}" class="btn btn-warning " style="width:170px; margin:20px 30px;height:40px;"> Voir tous les voitures </a>
  </div>
  </div>
</div>


@endsection