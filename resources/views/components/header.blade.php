<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lyon Street Graff</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
</head>
<body>
    
            <div class="wrap">
                <input class="burger-check" id="burger-check" type="checkbox"><label for="burger-check" class="burger"></label>
                <nav id="navigation1" class="navigation">
                  <ul>
                    <li><a href="{{ url('/home') }}">Galerie</a></li>
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <li> <a href="{{ route('register') }}">Inscription</a></li>
                    
                  </ul>
                </nav>
    
        
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
           
                
                   
                <div class="overlay"></div>
              
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#bs-carousel" data-slide-to="1"></li>
                  <li data-target="#bs-carousel" data-slide-to="2"></li>
                </ol>
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                      <hgroup>
                          <h1>Lyon Street Graff</h1>        
                          <h3>Le Street Art pour tous, partout.</h3>
                      </hgroup>
                      
                    </div>
                  </div>
                  <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">        
                      <hgroup>
                          <h1>Partagez</h1>        
                          <h3>Une oeuvre vous plaît, partagez la </h3>
                      </hgroup>       
                      
                    </div>
                  </div>
                  <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">        
                      <hgroup>
                          <h1>Découvrez</h1>        
                          <h3>Une galerie des oeuvres partagées</h3>
                      </hgroup>
                      
                    </div>
                  </div>
                </div> 
              </div>
              
              
              <script>

                  var menuburger = document.querySelector(".menu-burger");
var menu = document.querySelector(".menu");
    menuburger.addEventListener("click", function(event){
    event.preventDefault();
    menu.classList.toggle("menu-open");
});
              </script>
</body>
</html>