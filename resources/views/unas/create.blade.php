<form action="{{url('/unas')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/home.css') }}"/>
<br><br>
<h1> REGISTRAR DISEÑO</h1>
<div class="contenedor">
    <div class="form-group">
        <br><br>
        <label for="Nombre"> </label>
        <input type="text"  size="50" placeholder="&#128100; Nombre" name="Nombre" id="Nombre" required >
        <br><br>
        <label for="Tipo">  </label>
        <input type="text"  size="50" placeholder="&#128400; Tipo" name="Tipo" id="Tipo" required>
        <br><br>

        <label for="Precio"> </label>
        <input class="input" type="Dirección" size="50" placeholder="&#128178; Precio" id="Precio" name="Precio" required>
        <br><br>

        <label for="Cantidad"> </label>
        <input class="input" type="Cantidad" size="50" placeholder=" &#128722; Cantidad" id="Cantidad" name="Cantidad" required>
        <br><br>

        <label for="Descripcion"> </label>
        <input class="input" type="Descripcion" size="50" placeholder="&#128221; Descripcion" id="Descripcion" name="Descripcion" required>
        <br><br>

        <label for="Foto"> </label>
        <input class="input" type="file" size="40" placeholder="&#128273; Foto" id="Foto" name="Foto" required>
        <br>
        </div>

    <button class="btn btn-outline-primary"> Registrar </button>
<a href="/" class="btn btn-outline-success"> Regresar</a>
    </div>
</form>
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