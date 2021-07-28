<form action="{{ url ('/unas/'.$una->id)}}" method="post" enctype="multipart/form-data">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/home.css') }}"/>
    <h1>EDICIÓN</h1>
{{ csrf_field() }} 
{{ method_field('PATCH') }} 
<div class="contenedor">
    <div class="form-group">
        <label for="Nombre">  </label>
        <input type="text" size="50" placeholder="&#128100; Nombre" name="Nombre" id="Nombre"  value="{{ $una->nombre }}" required autofocus>
        <br><br>

        <label for="Tipo">  </label>
        <input type="text" size="50" placeholder="&#128100; Tipo" name="Tipo" id="Tipo" value="{{ $una->tipo}}" required autofocus>
        <br><br>

        <label for="Precio">  </label>
        <input class="input" type="Dirección" size="50" placeholder=" &#127968; Precio" id="Precio" name="Precio" value="{{ $una->precio}}" required>
        <br><br>

        <label for="Cantidad"> </label>
        <input class="input" type="Cantidad" size="50" placeholder="&#9993; Cantidad" id="Cantidad" name="Cantidad" value="{{ $una->cantidad}}" required>
        <br><br>

        <label for="Descripcion"> </label>
        <input class="input" type="Descripcion" size="50" placeholder="&#9993; Descripcion" id="Descripcion" name="Descripcion" value="{{ $una->descripcion}}" required>
        <br><br>

        <label for="Foto"> Foto</label>
        <br/>
        <img src="{{ asset('storage').'/'.$una->foto}}" alt="" width="100">

        <input type="file" name="Foto" id="Foto" value=""> 
        <br/><br/>
        <button class="btn btn-outline-primary"> Guardar </button>
        <a href="/unas" class="btn btn-outline-success" > Regresar</a>
        </form>
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
        <p id="final"> Derechos reservados The Nail appeal</p>
    </div>
  </footer>