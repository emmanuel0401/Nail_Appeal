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
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<body>
  <div class="container">
   <h1>UBICACION</h1>
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29769.14514606216!2d-86.88712140869141!3d21.146700980553277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1607656664473!5m2!1ses-419!2smx" width="800" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  <div class="contenedor">
    <h2>Quejas o sugerencias</h2>
    <h2>Envia un mensaje</h2><br>
    <form  action="{{route ('contacto')}}" method="POST">
      @csrf 
        <div class="form-group">
          <input type="name" id="inputs" class="form-control" name="nombre" value="{{old ('nombre')}}" placeholder="Nombre">
          @error('nombre')
          <p><strong>{{$message}}</strong></p>
          @enderror
          <input type="email" class="form-control" name="email" value="{{old ('email')}}" placeholder="Correo electronico"><br>
          @error('email')
          <p><strong>{{$message}}</strong></p>
          @enderror
          <input type="telefono" class="form-control" name="telefono" value="{{old ('telefono')}}" placeholder="Teléfono"><br>
          @error('telefono')
          <p><strong>{{$message}}</strong></p>
          @enderror
          <textarea id="mensaje" class="form-control" name="mensaje" placeholder="Escribe tu comentario" rows="5">{{old ('mensaje')}}</textarea>
          @error('mensaje')
          <p><strong>{{$message}}</strong></p>
          @enderror
        </div>
            <button type="submit" class="btn btn-outline-primary">Enviar</button>
      </form>
      @if (session('fin'))
      <script>alert ("{{session('fin')}}");</script>
      @endif
  </div>
</body>
  <footer class="footerr">
    <div class="redsocial">
        <br/><br/> <p> Conoce nuestras redes sociales </p>
        <ul>
        <li><a href="https://twitter.com/?lang=es" target="_blank"> <img src=https://lh6.googleusercontent.com/-vao9pzZoGtk/T6VYC4d1YMI/AAAAAAAAA0U/4rdP2chJido/s48/twitter48.png" width=35 height=35 alt="Síguenos en Twitter" /></a></li>
        <li><a href="https://www.facebook.com/" target="_blank"> <img alt="Siguenos en Facebook" src="https://lh3.googleusercontent.com/-NSLbC_ztNls/T6VX0g6z8AI/AAAAAAAAA0A/_vyIBrmZbuY/s48/facebook48.png" width=35 height=35  /></a></li>
        <li><a href="https://www.instagram.com/?hl=es-la" target="_blank"> <img alt="Siguenos en Blogger" src="https://lh3.googleusercontent.com/-D-erW-8vZFo/UIqE3H6oUuI/AAAAAAAABgE/4kh346Lwaxk/s48/instagram48.png" width=35 height=35  /></a></li>
        <li><a href="https://www.youtube.com/" target="_blank"><img alt="Siguenos en YouTube" src="https://lh6.googleusercontent.com/-Atgpy-x_OwI/T6mYkA18hYI/AAAAAAAAA1U/qksUJ5uBq3c/s48/youtube48.png" width=35 height=35  /></a></li>
        </ul>
        <p id="final"> Derechos reservados The Nail appeal SA de CV</p>
    </div>
  </footer>
</html>