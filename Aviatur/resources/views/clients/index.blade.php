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
        <th scope="col">Nombres</th>
        <th scope="col">Cedula</th>
        <th scope="col">Celular</th>
        <th scope="col">Email</th>
        <th scope="col">Direccion</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <th scope="row">{{$client->id}}</th>
            <td>{{$client->Nombres}}</td>
            <td>{{$client->Cedula}}</td>
            <td>{{$client->Celular}}</td>
            <td>{{$client->Email}}</td>
            <td>{{$client->Direccion}}</td>
            <td>{{$client->Ciudad}}</td>
            <td>
              <a href="{{route('clients.edit', $client)}}">
                <button type="button" class="btn btn-warning btn-sm">Editar</button>
              </a>
            </td>
            <td>
              <form method="POST" action="{{route('clients.destroy', $client)}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
              </form>
            </td>
          </tr>



        @endforeach


    </tbody>
  </table>
    {{$clients -> links()}}


@endsection
