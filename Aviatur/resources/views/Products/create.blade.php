

@extends('plantillaweb')

@section('secciondinamica')

<form action="{{route('products.store')}}" name="Clients" method="POST">
    @csrf
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Akine</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/clients/create">Clientes</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/products/create">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/sales/create">Ventas</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <h2>Registro de productos</h2>
    <div class="mb-3">
        <label>Nombre del cliente...</label>
        <select name="id_client" id="" class="form-control">
          @foreach ($clients as $client)
              <option value="{{$client->id}}">{{$client->Nombres}}//{{$client->Cedula}}</option>
          @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label>Marca...</label>
      <input type="text" class="form-control" name="Marca" placeholder="Escriba marca del producto...">
    </div>
    <div class="mb-3">
      <label>Descripcion...</label>
      <input type="text" class="form-control" name="Descripcion" placeholder="Escriba descripcion del producto...">
    </div>
    <div class="mb-3">
      <label>Precio...</label>
      <input type="number" class="form-control" name="Precio" placeholder="Escriba precio del producto..." onkeyup="valor_total()">
    </div>
    <div class="mb-3">
      <label class="custom-file-label">Imagen del producto...</label>
      <input type="file" class="custom-file-input" name="Foto">
    </div>
    <div class="mb-3">
        <label>Fecha_elaboracion...</label>
        <input type="date" class="form-control" name="Fecha_elaboracion">
    </div>
    <div class="mb-3">
        <label>Fecha_vencimiento...</label>
        <input type="date" class="form-control" name="Fecha_vencimiento">
    </div>
    <div class="mb-3">
        <label>Cantidad...</label>
        <input type="number" class="form-control" name="Cantidad" placeholder="Escriba cantidad de producto que comprara..." onkeyup="valor_total()">
    </div>
    <div class="mb-3">
        <label>Valor_total...</label>
        <input type="double" class="form-control" name="Valor_total" placeholder="Su valor total con iva incluido a pagar es...">
    </div>
    <div class="mb-3">
        <label>Medio_pago...</label>
        <input type="text" class="form-control" name="Medio_de_pago" placeholder="Escriba su medio de pago...">
    </div>

    <button type="submit" class="btn btn-danger">Insertar producto</button>
  </form>

@endsection

<script>
    function valor_total(){
      var precio = document.Clients.Precio.value;
      var cantidad = document.Clients.Cantidad.value;

      try {
        precio = (isNaN(parseInt(precio))) ? 0 :parseInt(precio);
        cantidad = (isNaN(parseInt(cantidad))) ? 0 :parseInt(cantidad);
        document.Clients.Valor_total.value= (precio*cantidad)*1.12;
      } catch (e) {

      }
    }
</script>
