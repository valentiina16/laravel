@extends('plantillaweb')

@section('secciondinamica')


<nav class="mt-3">
    <a class="navbar-brand" href="#">Akine</a>
    <a class="btn btn-primary" href="http://127.0.0.1:8000/clients" role="button">Clientes</a>
    <a class="btn btn-primary" href="http://127.0.0.1:8000/products" role="button">Productos</a>
    <a class="btn btn-primary" href="http://127.0.0.1:8000/sales" role="button">Ventas</a>
</nav>

<table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre_empresa</th>
        <th scope="col">NIT</th>
        <th scope="col">Fecha</th>
        <th scope="col">Hora</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
        <tr>
            <th scope="row">{{$sale->id}}</th>
            <td>{{$sale->Nombre_empresa}}</td>
            <td>{{$sale->NIT}}</td>
            <td>{{$sale->Fecha}}</td>
            <td>{{$sale->Hora}}</td>
            <td>
              <a href="{{route('sales.edit', $sale)}}">
                <button type="button" class="btn btn-warning btn-sm">Editar</button>
              </a>
            </td>
            <td>
              <form method="POST" action="{{route('sales.destroy', $sale)}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
              </form>
            </td>
          </tr>



        @endforeach


    </tbody>
  </table>



@endsection
