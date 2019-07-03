<?php
// HEADER -----------------------------------------------------
function displayHeader()
{
    $content =
        '<!DOCTYPE html>
    <html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    
        <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand&display=swap" rel="stylesheet">
    
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    
        <style>
            body {
                // font-family: "Just Another Hand", cursive;
            }
        </style>
    
        <title>FOODTRUCK</title>
    </head>
    
    <body>
    
        <header>
    
            <section class="pt-5 pb-5 bg-dark inner-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="mt-0 mb-3 text-white">On mange quoi?</h1>
                            <div class="breadcrumbs">
                                <img src="img/retro-food-truck_23-2147530708.jpg" alt="">
                                <p class="mb-0 text-white"><a class="text-white" href="#">Home</a> / <span
                                        class="text-success">About</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <div class="container col-12 text-dark mx-auto">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <div class="collapse navbar-collapse">
         <div class="navbar-nav ">
           <a class="nav-item nav-link active" href="index.php">Accueil</a>
           <a class="nav-item nav-link" href="index.php?page=liste">Liste  des foodtrucks</a>
           <a class="nav-item nav-link" href="index.php?page=ajout">Ajouter un foodtruck</a>
           <a class="nav-item nav-link " href="index.php?page=modifier">Modifier un foodtruck</a>
         </div>
       </div>
     </nav>
 </div>
        ';


    return $content;
}





// FOOTER ------------------------------------------------------------------
function displayFooter()
{
    $content = '<div class="row container mx-auto text-center col-12 p-0">

    <div class="card col-md-12 col-sm-12 bg-warning mx-auto">
    <div class="card-body text-center">
      <a class="fb-ic">
        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
      </a>
      <!-- Twitter -->
      <a class="tw-ic">
        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
      </a>

      <!--Instagram-->
      <a class="ins-ic">
        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
      </a>
      <!--Pinterest-->
      <a class="pin-ic">
        <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
      </a>

    </div>

    <div>
      <p><a href="#" class="mentions">Mentions légales</a> | &copy; Marjo-Audrey</p>
    </div>
  </div>

</div>

</body>

</html>';

    return $content;
}