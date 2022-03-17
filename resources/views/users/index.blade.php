
@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD 2eme exemple </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('utilisateurs.create') }}"> Ajouter un utilisateur</a>
                <a class="btn btn-success mx-3" href="{{ asset('/') }}"> Page d'acceuil</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>filière</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($utilisateurs as $utilisateur)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $utilisateur->nom }}</td>
            <td>{{ $utilisateur->Filière }}</td>
            <td>
                <form action="{{ route('utilisateurs.destroy',$utilisateur->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('utilisateurs.show',$utilisateur->id) }}">Voir</a>
    
                    <a class="btn btn-primary" href="{{ route('utilisateurs.edit',$utilisateur->id) }}">Modifier</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $utilisateurs->links() !!}
      
@endsection