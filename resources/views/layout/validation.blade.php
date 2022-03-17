




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

   <form class="row g-3">
  <div class="col-md-6">
  
    <input type="text" class="form-control" id="inputEmail4" placeholder="Saisir votre nom">
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control" id="inputPassword4" placeholder="Saisir votre prenom">
  </div>
  <div class="col-6"> 
    <input type="text" class="form-control" id="inputAddress" placeholder="Saisir votre Numero Tel +212 xxx">
  </div>
  <div class="col-6">    
    <input type="text" class="form-control" id="inputAddress2" placeholder="Saisir votre Ville">
  </div>
  <div class="col-md-6">     
      <input type="text" class="form-control" id="inputCity" placeholder="saisir votre Addresse">
    </div> 
    <div class="col-md-6">
           @include('layout.popoover')  
  </div>
  <div class="col-md-2">
        <button type="submit" class="btn btn-primary">valider</button>     
  </div>

</form>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles --> 
</body>
</html>