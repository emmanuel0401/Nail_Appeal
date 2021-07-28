<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/home.css') }}"/>
<h1>DISEÑOS REGISTRADOS</h1>

<br>
<form class="form-row">
    <div class="form-group col-md-9">
        <a href="{{ url ('/unas/create') }}" class="btn btn-outline-primary">Registrar Diseño</a>
    </div>
    <div class="form-group col-md-2">
        <input name="busqueda" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
    </div>
    <div class="form-group col">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </div>
</form>

<table class="table table-light table-hover" width="90%"   text-align:center>
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Descripción</th>
            <th> Acciones <th>
        </tr>
    </thead>
    <tbody>
        @foreach($unas as $una)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><img src="{{ asset('storage').'/'.$una->foto}}" alt="" width="200" height="140"></td>
            <td>{{ $una->nombre}}</td>
            <td>{{ $una->tipo}}</td>
            <td>{{ $una->precio}}</td>
            <td>{{ $una->cantidad}}</td>
            <td>{{ $una->descripcion}}</td>
            <td>
            <a class="btn btn-warning" href="{{ url ('/unas/'.$una->id.'/edit') }}">Editar</a>
            <form method="post" action="{{ url('/unas/'.$una->id) }}" style="display:inline">
            {{csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar el diseño uñas?');" >Borrar </button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="form-row">
{{ $unas->links() }}
<a href="/" class="btn btn-outline-success" > Regresar</a>
</div><br>