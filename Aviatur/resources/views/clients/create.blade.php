@extends('plantillaweb')

@section('secciondinamica')



<form action="{{route('clients.store')}}" method="POST">
    @csrf
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#">Akine</a>
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

      <h2>Registro de Clientes</h2>

    <div class="mb-3">
      <label>Nombres completos...</label>
      <input type="text" class="form-control" name="Nombres" placeholder="Escriba su nombre...">
    </div>
      <div class="mb-3">
      <label>Cedula...</label>
      <input type="number" class="form-control" name="Cedula" placeholder="Escriba su cedula...">
    </div>
      <div class="mb-3">
      <label>Celular...</label>
      <input type="number" class="form-control" name="Celular" placeholder="Escriba su celular...">
    </div>
      <div class="mb-3">
      <label>Email...</label>
      <input type="Email" class="form-control" name="Email" placeholder="Escriba su Email...">
    </div>
      <div class="mb-3">
        <label>Direccion...</label>
      <input type="text" class="form-control" name="Direccion" placeholder="Escriba su direccion...">
    </div>
      <div class="mb-3">
      <label>Ciudad...</label>
      <input type="text" class="form-control" name="Ciudad" placeholder="Escriba su ciudad...">
    </div>

    <button type="submit" class="btn btn-danger">Insertar cliente</button>
  </form>

@endsection
