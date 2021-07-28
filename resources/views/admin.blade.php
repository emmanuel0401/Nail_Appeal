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
        <a class="nav-item nav-link active" href="{{'/login'}}"> INICIAR SESIÓN </a></li>
        <a class="nav-item nav-link active" href={{'/register'}}> RESGISTRARME </a></li>
        <a class="nav-item nav-link active" href="/carrito"><img src="/images/bolsa-compra.png" width="40" height="40"></a>
      </div>
    </div>
  </div>
</nav>
</html>