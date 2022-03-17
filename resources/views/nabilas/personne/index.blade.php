
@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('personnes.create') }}"> Create New Product</a>
                <a class="btn btn-success mx-3" href="{{ asset('/') }}"> Page d'acceuil</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered mt-5 p-3">
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($personnes as $personne)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $personne->nom }}</td>
            <td>{{ $personne->prenom }}</td>
            <td>
                <form action="{{ route('personnes.destroy',$personne->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('personnes.show',$personne->id) }}">Voir</a>
    
                    <a class="btn btn-primary" href="{{ route('personnes.edit',$personne->id) }}">Modifier</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $personnes->links() !!}
      
@endsection