

@extends('products.layout')

@section('content')

<div class="d-flex align-items-center justify-content-center bg-dark mb-5">

    <div class="card w-75" style="margin-top:150px; margin-bottom:150px;">
        <header class="card-header">
            <p class="card-header-title">Création d'un film</p>
        </header>
        <div class="card-body">
           
                <form action="{{ route('films.update', $film->id) }}" method="POST">
                    
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Titre</label>
                    
                        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title', $film->title) }}" placeholder="Titre du film">
                        
                        @error('title')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="label">Année de diffusion</label>
                        <div class="form-control">
                          <input class="@error('year') is-invalid @enderror w-25" type="number" name="year" value="{{ old('year', $film->year) }}" min="1950" max="{{ date('Y') }}">
                        </div>
                        @error('year')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="label">Description</label>
                        <div class="form-control">
                            <textarea class="textarea @error('description') is-invalid @enderror w-50" name="description" placeholder="Description du film">{{ old('description',$film->description) }}</textarea>
                        </div>
                        @error('description')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                       
                        <button class="btn btn-primary is-link">Envoyer</button>
                        <a class="btn btn-danger is-link" href="{{route('films.index') }}">Annuler</a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


