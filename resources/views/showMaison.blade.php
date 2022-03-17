


@extends('layout.page')

@section('contenu')

<div class="container-fluid-lg">

<div class="card bg-dark text-dark">
  <img src="{{asset('images/'.$locations->photo_interieur )}}" class="image card-img" alt="...">
  <div class="card-img-overlay text-center d-flex justify-content-center mx-5 py-5" style="padding-top:100px;">
    
  <div class="max row mt-5 row-cols-md-2 row-cols-1 " >
    <div class="col">

      @include('layout.validation')
    </div>

    <div class="col">

        <div class="card bg-dark text-light ms-5" style="width: 18rem;">
  <div class="card-body">
    <p class="card-title"> <span style="color:#FF00FF;font-size:20px;">Addresse : </span> <span style="color:#FFD700;">  {{$locations->addresse}}</span> </p>
      <p > <span style="color:#FF00FF;font-size:20px;">Prix :</span> <span style="color:#FFC0CB;"> {{ number_format($locations->prix ,2)}} DHS / mois </span> </p>
    
    <h6 class="card-subtitle mb-2 text-muted text-info">Tetouan</h6>
    <p class="card-text">On dispose encore de plusieur Modèle de maison de tous type .
        Châteaux , Villa , etc....... 
        pour en savoir plus veuillez nous contactez sur ce numéro <a href="/" class="text-info">+212 067827372 </a>.
        <div class="border border-dark bg-light text-dark rounded-1 pb-3">
           <span class="text-success fw-bold"> <br>  NABILA </span> <span class="text-danger"> Merci infiniment </span> pour cette idée qui m'a appris beaucoup de choses . 
        </div>


    </p>
    <a href="/maison" class="card-link btn btn-outline-primary fw-bold text-light">retour</a>
    <a href="#" class="card-link btn btn-outline-danger fw-bold text-light">fermer</a>
  </div>
</div> 
    
    </div>
    </div>

</div>
</div>
</div>
     
  @endsection 