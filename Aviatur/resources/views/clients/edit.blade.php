@extends('plantillaweb')
@section('secciondinamica')
    <h2>Editar registro de clientes {{$client->id}}</h2>
    <form action="{{route('clients.update', $client)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label>Nombres completos...</label>
          <input type="text" name="Nombres" placeholder="Nombres" class="form-control mb-2" value="{{$client->Nombres}}">
          <label>Nombres completos...</label>
          <input type="text" name="Cedula" placeholder="Cedula" class="form-control mb-2" value="{{$client->Cedula}}">
          <label>Celular...</label>
          <input type="number" name="Celular" placeholder="Celular" class="form-control mb-2" value="{{$client->Celular}}">
          <label>Email...</label>
          <input type="email" name="Email" placeholder="Email" class="form-control mb-2" value="{{$client->Email}}">
          <label>Direccion...</label>
          <input type="text" name="Direccion" placeholder="Direccion" class="form-control mb-2" value="{{$client->Direccion}}">
          <label>Ciudad...</label>
          <input type="text" name="Ciudad" placeholder="Ciudad" class="form-control mb-2" value="{{$client->Ciudad}}">


        </div>

        <button type="submit" class="btn btn-danger">Guardar</button>
      </form>
      @endsection

