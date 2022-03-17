@extends('layout.page')
@section('contenu')

<div class="bg-secondary">
<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
    @foreach ($maisons as $maison)
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/'.$maison->photo)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <span class="text-dark fw-bold"> addresse </span> : <span class="text-danger"> {{$maison->addresse}} </span></h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        <p class="fw-bold"> {{ number_format($maison->prix ,2)}} DHS / mois </p>
        <a href="{{route('show', ['id'=>$maison->id])}}" class="btn btn-secondary border-secondary btn-outline-primary" style="text-decoration: none ">Louer</a>
      </div>
    </div>
  </div>
  @endforeach
 
</div>
</div>
</div>


@endsection