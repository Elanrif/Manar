
@extends('layout.page')

@section('contenu')

  <div class="container mt-3 pt-5 d-flex justify-content-center mb-5 pb-5">

      <form class="w-50 row mt-5 " action="#" method="post">
        @csrf
   
   <div class="mb-3 col-6">
    <label for="exampleInputEmail1" class="form-label ps-0"> Nom </label>
    <input type="text" class="form-control p-3 rounded-3 fw-bold" placeholder ="Entrer votre Nom " name="nom" value = " {{ old('nom') }}">
    @if($errors->has('nom'))
 <p class="text-danger"> veuillez entrer un nom ! . </p>
    @endif
  </div>
   <div class="mb-3 col-6">
    <label for="exampleInputEmail1" class="form-label ps-0"> Prenom </label>
    <input type="text" class="form-control p-3 rounded-3 fw-bold" placeholder="Entrer votre Prenom" name="prenom" value = " {{ old('prenom') }}">
    @if($errors->has('prenom'))
    <p class="text-danger"> veuillez entrez un prenom ! </p>
    @endif
  </div>      
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ps-0">addresse email </label>
    <input type="email" class="form-control p-3 rounded-3 fw-bold" placeholder="email@gmail.com" name="email" value = "{{ old('email') }}">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">mot de passe </label>
    <input type="password" class="form-control p-3 rounded-3 fw-bold" placeholder="Entrer un mot de passe" name="password">
    @if($errors->has('password'))
    <p class="text-danger">{{$errors->first('password')}}</p>
    @endif
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">confirmer le mot de passe </label>
    <input type="password" class="form-control p-3 rounded-3 fw-bold" placeholder="Confirmer le mot de passe" name="password_confirmation">
    @if($errors->has('password_confirmation'))
    <p class="text-danger">{{$errors->first('password_confirmation')}} </p> 
    @endif
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input " id="exampleCheck1">
    <label class="form-check-label " for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary col-2 ms-3" style="height:40px;">Envoyer</button>
  <br><br><br>
  <p class="fs-4"> avez-vous déjà un compte ? <a href="#" class="fw-bold fs-4" >se connecter</a></p>
</form>

  
</div>
 

@endsection 