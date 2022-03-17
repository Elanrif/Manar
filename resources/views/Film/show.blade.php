

@extends('products.layout')
@section('content')

 <div class=" d-flex align-items-center justify-content-center my-3 ">
    <div class="card " style ="margin-top:100px;width:700px">
        <header class="card-header">
            <p class="card-header-title text-black fs-5"><span class="text-warning fs-4">Titre : </span>{{ $film->title }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p class="mb-3 text-secondary fs-5"> <span class="text-warning fs-4"> Année de sortie : </span >  {{ $film->year }}</p>
                <hr>
                <p class="mb-3 text-secondary fs-5"> <span class="text-warning fs-4"> Description : </span> {{ $film->description }} </p>
            </div>
        </div>
         <a class="btn w-25 btn-danger is-link ps-0" href="{{route('films.index') }}">Retour</a>
    </div>
    </div>
@endsection