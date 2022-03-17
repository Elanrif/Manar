
@extends('layout.page')

@section('auth')

<h1 class=" fs-4 text-center text-success mt-5 pt-5"> Bienvenu voila tous  les personnes qui ont posté un TAG </h1>
<p class="text-warning text-center fs-2"> Veuillez cliquez sur le nom pour acceder au comptenu ! </p>
 @foreach($tags as $tag)
<ul class="text-center border border-dark bg-secondary w-25" style="list-style:none ; margin-left:590px ; margin-right:250px ;  ">

    <li class ="py-3 ">  <span class="text-success fs-5"> 
    <a href="{{ route('tags.show',['id' => $tag->id]) }}" class="text-light" style="font-style:none; text-decoration:none ;">{{ $tag->name}}  </a>           
    </li>

</ul>
@endforeach    

@endsection 
