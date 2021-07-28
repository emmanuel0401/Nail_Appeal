<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Nail Appeal</title>
    <!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/home.css') }}"/>

</head>
<nav class="navbar navbar-expand navbar-light background-color: bg-light"> 
    <img src="/images/logo1.png" width="60" height="60" class="d-inline-block align-top" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarNavAltMarkup">
      <div class="col-md-8"> 
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">INICIO</a>
        <a class="nav-item nav-link active" href="/catalogo"> CATÁLOGO </a>
        <a class="nav-item nav-link active" href="/nosotros">NOSOTROS</a>
        <a class="nav-item nav-link active" href="/contacto">CONTACTO</a>
        <li> @auth
              {{auth()->user()->name}}
            @endauth 
        </li>
        @guest
          <li><a class="nav-item nav-link active" href="{{'/login'}}"> INICIAR SESIÓN </a></li>
            <a class="nav-item nav-link active" href={{'/register'}}> RESGISTRARME </a></li>
          @else
          <li><a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">CERRAR SESIÓN</a>
          </li>
        @endguest
        <form id="logout-form" action="{{route ('logout')}}" method="post" style="display:none;">
        @csrf  
        </form>
        <a class="nav-item nav-link active" href="/carrito"><img src="/images/bolsa-compra.png" width="40" height="40"></a>
        @if (count(Cart::getContent())) {{count(Cart::getContent())}}
       @endif
        </div>
      </div>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <div class="botoncito">
          <!--<button type="button"> mas acerca de DOM </button>        -->
             <script type="text/javascript">
            function changeColor(x)
            {
                if(x.style.background=="rgb(247, 211, 88)")
                {
                    x.style.background="#fff";
                }else{
                    x.style.background="#40E0D0";
                }
                return false;
            }
            </script>
            <button class="btn btn-outline-primary my-2 my-sm-0" onclick = "changeColor(this);">Buscar</a>
        </div> 
      </form>
    </div>
</nav>
  <div class="container" style="height:500px">
    <div class="row justify-content-center justify-content-md-star">
      <div class="col-6">
        <div class="text-justify">
          <h1>BIENVENIDOS A THE NAIL APPEAL</h1>
          <p id="texto">MANICURE<br>
          Déjanos consentir tus manos al mismo tiempo que hacemos un manicure completo que incluye el arreglo de uñas y cutículas, eliminación de células muertas, exfoliación e hidratación con masaje. Para terminar, escoge tu color favorito entre una gran variedad de tonos!</p>
          <div text-align="center">
            <button id="button" onclick="location.href='/nosotros'" class="btn btn-outline-primary">Más</button>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/manicure.jpeg" class="d-block w-100" width="500" height="380"alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/manicure2.jpg" class="d-block w-100" width="500" height="380" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/manicure3.jpg" class="d-block w-100" with="500" height="380"alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/manicure4.png" class="d-block w-100" height="380"alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container" style="height: 500px">
  <div class="row">
      <div class="col-6">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/pedicure.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/pedicure2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/pedicure3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/pedicure4.jpg" class="d-block w-100" height="360px" alt="...">
                </div>
              </div>
          </div>
      </div>
      <div class="col-6">
        <h1>CONCIENTETE A TI MISMA Y DALE ESA BELLEZA A TUS MANOS Y PIES</h1>
        <p id="texto">PEDICURE<br>
        Para pies secos y cansados, es un básico The Nail Appeal. Para sentirte renovada y con energía para seguir con tu día! Remoja tus pies en agua caliente, removemos células muertas, exfoliamos con miel y azúcar y esmaltado.
        El manicure y el pedicure se hacen al mismo tiempo para que en una hora estés lista y como nueva!
      </div>
  </div>
</div>
<footer>
  <div class="redsocial">
    <br/><br/> <p> Conoce nuestras redes sociales </p>
        <ul>
          <li><a href="https://twitter.com/?lang=es" target="_blank"> <img src=https://lh6.googleusercontent.com/-vao9pzZoGtk/T6VYC4d1YMI/AAAAAAAAA0U/4rdP2chJido/s48/twitter48.png" width=35 height=35 alt="Síguenos en Twitter" /></a></li>            
          <li><a href="https://www.facebook.com/" target="_blank"> <img alt="Siguenos en Facebook" src="https://lh3.googleusercontent.com/-NSLbC_ztNls/T6VX0g6z8AI/AAAAAAAAA0A/_vyIBrmZbuY/s48/facebook48.png" width=35 height=35  /></a></li>
          <li><a href="https://www.instagram.com/?hl=es-la" target="_blank"> <img alt="Siguenos en Blogger" src="https://lh3.googleusercontent.com/-D-erW-8vZFo/UIqE3H6oUuI/AAAAAAAABgE/4kh346Lwaxk/s48/instagram48.png" width=35 height=35  /></a></li>
          <li><a href="https://www.youtube.com/" target="_blank"><img alt="Siguenos en YouTube" src="https://lh6.googleusercontent.com/-Atgpy-x_OwI/T6mYkA18hYI/AAAAAAAAA1U/qksUJ5uBq3c/s48/youtube48.png" width=35 height=35  /></a></li>
        </ul>
        <p id="final"> Derechos reservados The Nail appeal </p>
  </div>
</footer>
</html>