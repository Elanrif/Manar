
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Document</title>
</head>
<body>



<div class="card bg-dark text-light ms-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-warning"> {{$locations->addresse}} À savoir </h5>
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

  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles --> 
</body>
</html>