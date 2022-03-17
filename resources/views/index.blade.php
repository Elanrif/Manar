


@extends('layout.page')

@section('contenu')

@if(session()->has('info'))
  <div class="alert alert-success text-center" style="margin-left:250px ; margin-right:200px ;margin-top:50px; ">
    {{session('info')}}
  </div>
@endif

<div class="d-flex mt-5 " style="margin-left:300px ; margin-right:300px ;">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      @foreach($films as $film)
    <tr>
      <th scope="row" class="text-secondary">{{ $film->id }}</th>
      <td><strong> {{ $film->title }}</strong></td>
      <td><a  class ="btn btn-primary px-4" href =" {{ route('films.show', $film->id) }}"> Voir </a></td>
      <td><a class="btn btn-warning"  href="{{ route('films.edit',$film->id)}}"> Modifier</a></td>
      <td>
          <form action="{{ route('films.destroy',$film->id) }}" method ="post">
              @csrf 
              @method('DELETE') 
              <button class="btn btn-danger" type="sumbit"> Supprimer</button>
          </form>

      </td>
    </tr>
     @endforeach
  </tbody>

</table>
</div>
  <div class ="text-center d-flex justify-content-center my-3">
      {{$films->links() }}
</div>



@endsection 