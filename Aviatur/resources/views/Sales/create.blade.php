@extends('plantillaweb')

@section('secciondinamica')

<form action="{{route('sales.store')}}" method="POST">
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
    <h2>Registro de ventas</h2>
    <div class="mb-3">
        <label>Marca del producto...</label>
        <select name="id_client" id="" class="form-control">
          @foreach ($products as $product)
              <option value="{{$product->id}}">{{$product->Marca}}</option>
          @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Nombre de la empresa...</label>
        <input type="text" class="form-control" name="Nombre_empresa" placeholder="Escriba nombre de la empresa...">
    </div>
    <div class="mb-3">
        <label>Nit...</label>
        <input type="number" class="form-control" name="NIT" placeholder="Escriba el nit...">
    </div>
    <div class="mb-3">
        <label>Fecha...</label>
        <input type="date" class="form-control" name="Fecha">
    </div>
    <div class="mb-3">
        <label>Hora...</label>
        <input type="time" class="form-control" name="Hora">
    </div>



    <button type="submit" class="btn btn-danger">Insertar venta</button>
  </form>

@endsection
