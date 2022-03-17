


@extends('layout.page')

@section('contenu')

 


        <div class="container row my-5 mx-5">
    <h1 class="text-center fs-2 text-body my-5"> Bonjour bienvenu dans mon site . </h1>

    <p class= "col-md" >
        <span class="text-info fs-3">Introduction</span><br/>bonjour bienvenu dans mon site je me présente , je m'appelle <span class="text-warning "> El-anrif SAIDBACO : </span> le créateur de site .  ici vous pouvez acceder au lien en haut 
     pour choisir les options que nous vous offrons . quelque exemple vous pouvez louer des maisons qui se trouve a Tetouan . <br> vous pouvez <span class="text-warning"> nous contactez : <a class="text-primary" href="#" style="text-decoration:none">+224 050403xxx</a></span> <br> aussi on dispose d'une plateforme des films que vous pouvez aussi lire ou télécharger si vous en avait besoin . surtout n'hesiter pas , pour avoir les nouveautés du site <br> veuillez <span class="text-warning">crée un compte</span> et partager le site dans vos réseau . </p>
    <p class= "col-md" >
        <span class="text-info fs-3">Présentation</span> </br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla excepturi voluptatibus similique quo facilis consequuntur commodi rerum! Obcaecati maiores quia natus quidem commodi. Praesentium, ut pariatur! Dolorem minus voluptatibus eaque!Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut vitae distinctio sed unde! Repellat officiis odio culpa. Officiis totam culpa est consequuntur quidem facere a quis unde suscipit aliquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ipsam atque modi tempore similique fugit harum vitae adipisci quas asperiores. Impedit, corrupti porro fugiat sequi hic dolorum rem at eligendi.</p>
    <p class= "col-md" >
        <span class="text-info fs-3">Conclusion</span> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repudiandae possimus voluptas tempore qui? Pariatur aliquid ratione impedit amet animi rem enim, molestiae illum voluptate illo dicta labore ad. Placeat.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea omnis unde cupiditate quo obcaecati praesentium nobis ad, eos explicabo neque, magnam vel iure nulla, eum officiis deleniti dolores. Asperiores, animi.Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis corporis omnis quam, harum perspiciatis nobis rem beatae libero enim accusamus molestias repudiandae ratione? Dicta deserunt consectetur suscipit, ullam obcaecati ipsum.</p>

  </div>

    @if(session()->has('message'))

    <div class="d-flex justify-content-center">
   <div class="alert alert-success text-center w-25">
     <p class="fs-3 text-warning"> {{session()->get('message')}} </p>
   </div>
   </div>

   @endif
  @endsection 