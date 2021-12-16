@extends('plantillaweb')
@section('secciondinamica')
    <h2>Editar registro de ventas {{$sale->id}}</h2>
    <form action="{{route('sales.update', $sale)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label>Nombre de la empresa...</label>
            <input type="text" name="Nombre_empresa" placeholder="Nombre_empresa" class="form-control mb-2" value="{{$sale->Nombre_empresa}}">
        </div>
        <div class="mb-3">
            <label>NIT...</label>
            <input type="number" name="NIT" placeholder="NIT" class="form-control mb-2" value="{{$sale->NIT}}">
        </div>
        <div class="mb-3">
            <label>Fecha...</label>
            <input type="date" name="Fecha" placeholder="Fecha" class="form-control mb-2" value="{{$sale->Fecha}}">
          </div>
        <div class="mb-3">
            <label>Hora...</label>
            <input type="time" name="Hora" placeholder="Hora" class="form-control mb-2" value="{{$sale->Hora}}">

        </div>

        <button type="submit" class="btn btn-danger">Guardar</button>
      </form>
      @endsection

