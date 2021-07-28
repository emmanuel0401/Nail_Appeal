<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/home.css') }}" />
    <title>Carrito</title>    
</head>
<nav class="navbar navbar-expand navbar-light bg-light">
    <img src="/images/logo.jpeg" width="60" height="60" class="d-inline-block align-top" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarNavAltMarkup">
      <div class="col-md-8">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="/">INICIO</a>
        <a class="nav-item nav-link active" href="/catalogo"> CATÁLOGO</a>
        <a class="nav-item nav-link active" href="/nosotros">NOSOTROS</a>
        <a class="nav-item nav-link active" href="/contacto">CONTACTO</a>
        <a class="nav-item nav-link active" href="{{'/login'}}"> INICIAR SESIÓN </a></li>
        <a class="nav-item nav-link active" href={{'/register'}}> REGISTRARME </a></li>
        </div>
        </div>
    </div>
</nav>
<body>      
<div class="container">
    <div class="row">
        <div class="col-sm-12 bg-light">
            <table class="table table-striped">
                <thead>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Foto</th>
                <th scope="col">Cantidad</th>
                <th sc ope="col">Accion</th>
                </thead>    
                @foreach (Cart::getContent() as $una)
                    <tr>
                    <td>{{ $una->name}}</td>
                    <td>{{ $una->price}}</td>
                    <td><img src="{{ asset('storage').'/'.$una->foto}}" alt="" width="100" height="100">
                    <td>{{$una->quantity}}</td>
                    <th scope="row">
                    <form method="POST" action="{{route('Cart.destroy',$una->id)}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Eliminar</button>
                    </form>    
                @endforeach
            </table>
        </div>
    </div>
        <table class="table">
            <thead>
                  <tr>
                      <th sc ope="col">Items</th>
                      <th scope="col">Total</th>
                   </tr>
            </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{Cart::getTotalQuantity()}}</th>
                        <th scope="row">{{Cart::getTotal()}}</th>
                        <th><button class="btn btn-dark">Pagar</button></th>
                     </tr>
            </tbody>
        </table>
    </div>
</body>
</html>