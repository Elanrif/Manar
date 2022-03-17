@extends('layout.page')

@section('contenu')

<div class="cards">
<div class="card" >
  <div class="card-header">
    <p class="card-header-title text-primary fs-4"> <strong class="text-warning">Titre :</strong>  {{ $film->title}}</p>
  </div>
  <div class="card-body">
      <p>Année de sortie : {{ $film->year }}</p>
      <hr>
    <blockquote class="blockquote mb-0">
      <p>{{ $film->description }} </p>
    </blockquote>
  </div>
</div>

</div>
@endsection