@include('layout.page')

@extends('products.layout')
@section('content')
   
<div class="mt-5 pt-5 text-hidden"></div>

    @if(session()->has('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">

        
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Films</p>
            <a href="{{ route('films.create') }}" class="btn btn-primary">Créer un nouveau film</a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            
                            <th>Titre</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($films as $film)
                            <tr>
                                
                                <td><strong>{{ $film->title }}</strong></td>
                                <td><a class="button btn-primary" href="{{ route('films.show' , $film->id) }}">Voir</a></td>
                                <td><a class="button btn-warning" href="{{ route('films.edit', $film->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('films.destroy', $film->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button btn-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
         <footer class="card-footer">
            {{ $films->links() }}
        </footer>
    </div>


@endsection