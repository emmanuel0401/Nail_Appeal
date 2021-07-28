<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Catalogo</title>
    <!-- Fonts -->
     <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/home.css') }}" />
  </head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="/images/logo1.png" width="60" height="60" class="d-inline-block align-top" alt="">
  <!--<a class="navbar-brand" href="#">The Nail Appeal</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
      <button name="buscar" class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="contenedor2">
  @foreach($unas as $una)    
    <div class="cuadro">
        <img src="{{ asset('storage').'/'.$una->foto}}" alt="" width="220" height="200"><br>
        {{ $una->nombre}}<br>
        {{ $una->descripcion}}<br>$
        {{ $una->precio}}
        <form action="{{route('Cart.store')}}" method="post">
          @csrf
          <input type="hidden" name="unas_id" value="{{$una->id}}"><br>
          <input type="submit" name="btn"  class="btn btn-outline-primary" value="Agregar al carrito">
        </form>
    </div>
  @endforeach
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
      <p id="final"> Derechos reservados The Nail appeal</p>
  </div>
</footer>
</html>