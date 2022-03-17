


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

   <div class="e_tete">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand px-4" href="#">PFE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
        <li class="nav-item">
          <a class="nav-link btn btn-outline-danger fw-bold text-light me-3 border-dark" aria-current="page" href="{{ route('voitures.index') }}">Voitures</a>
        </li>

         <li class="nav-item">
          <a class="nav-link btn btn-outline-danger fw-bold text-light me-3 border-dark" aria-current="page" href="{{ route('societes.index') }}">Societes</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link btn btn-outline-danger fw-bold text-light me-3 border-dark px-4" href="{{route('personnes.index') }}">Personnes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-danger fw-bold text-light me-3 border-dark px-4" href="{{asset('/films') }}">Film</a>
        </li>
         <li class="nav-item">
          <a class="nav-link btn btn-outline-danger fw-bold text-light border-dark me-3 px-4" href="{{route('products.index')}}">Produits</a>
        </li>
         <li class="nav-item">
          <a class="nav-link btn btn-outline-danger fw-bold text-light border-dark me-3 px-4" href="{{route('utilisateurs.index')}}">Etudiants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info btn btn-outline-danger fw-bold text-light border-dark me-3 px-4" href="{{asset('/maison') }}">Maison</a>
        </li>
         <li class="nav-item">
          <a class="nav-link btn btn-outline-danger fw-bold text-light border-dark me-3 px-4" href="#">inscription</a>
        </li>
         
      </ul>
      <form class="d-flex">
        <a class="btn btn-outline-danger fw-bold text-light me-3" href="#"> Deconnexion</a>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

</div>



          @yield('contenu')

 

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles --> 
</body>
</html>

 