<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nail</title>
        <!-- Fonts -->
       <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
        
        <!-- Styles -->
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
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>NUESTRA HISTORIA</h1>
            <p id="texto"> Lo que se conoce como manicura moderna proviene de Francia, cerca del año 1930, cuando al rey Luis Felipe le salió uno de esos molestos cueritos o padrastros que tanto conocemos. A raíz de esto, el doctor del rey inventó 
            un kit de manicura, cosa que su sobrina popularizaría más adelante. Para el siglo XIX estos instrumentos metálicos se hacen comunes en los Estados Unidos y para ese entonces ya era normal usar cremas y  polvos en las uñas.
            <br><br>1990 fue cuando por fin las mujeres ya tenían demasiada variedad para elegir el color como la decoración para sus uñas.
            En los dos mil ya había más esmaltes pues esto fue a tantos experimentos y combinaciones, y como lo dije su existencia fue cada día mejor hoy en día existen millones de diseños para las uñas como también existen millones de colores.</p>
        </div>
        <div class="col4">
            <img src="/images/hoja_uñas.jpg" width="380" height="380">
        </div>
    </div>
</div>
<div class="container">
    <h1> SERVICIOS </h1>
    <div class="row">
        <div class="col-6">
            <br>
            <h2>MANICURE</h2>
            <p id="texto"> Una manicura es un tratamiento de belleza cosmético para las uñas y manos que suele realizarse en casa o en un salón de belleza. En una manicura se cortan o liman los bordes de las uñas, se realizan masajes a las manos y se aplica esmalte de uñas. </p>
            <br><h2>UÑAS / DECORACIONES</h2><br>
            <p id="texto"> Las uñas se pueden secar, tanto como la piel. La manicura y la pedicura son tratamientos cosméticos para darle un buen aspecto a las uñas. Esto se hace con diversas herramientas, como las tijeras cuticulares, tijeras para uñas, cortaúñas y limas. Dejando de lado tratamientos meramente estéticos, cuando exista un problema ungueal en las uñas deberá consultarse con un especialista sanitario, como un dermatólogo, o un podólogo (si el problema se da en las uñas de los pies </p>
            <br>
        </div>
        <div class="col-6">
            <h2>PEDICURE</h2>
            <p id="texto"> La pedicura es el tratamiento de las afecciones cutáneas córneas propias de los pies.1​ Un pedicuro o pedicura, denominado corrientemente callista, es la persona que practica la pedicura.2 Un tratamiento de pedicura también es una manera de mejorar el aspecto de los pies y las uñas. </p>
            <br><h2>PESTAÑAS</h2><br>
            <p id="texto"> Una mirada amplia y despierta destila juventud y belleza y las pestañas son su marco. Sin embargo, tenerlas densas y largas es un privilegio de muy pocas. La edad, hábitos de vida poco saludables o la propia condición genética, pueden provocar su caída, escasez, acortamiento y debilitamiento. Las extensiones de pestañas son la opción ideal, y más teniendo en cuenta las largas jornadas estivales, evitando de este modo los temidos ‘ojos de mapache’. </p>
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