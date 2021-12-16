@extends('plantillaweb')
@section('secciondinamica')
    <h2>Editar registro de producto{{$product->id}}</h2>
    <form action="{{route('products.update', $product)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="mb-3">
          <label>Marca...</label>
          <input type="text" name="Marca" placeholder="Marca" class="form-control mb-2" value="{{$product->Marca}}">
        </div>
        <div class="mb-3">
          <label>Descripcion...</label>
          <input type="text" name="Descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{$product->Descripcion}}">
        </div>
        <div class="mb-3">
          <label>Precio...</label>
          <input type="number" name="Precio" placeholder="Precio" class="form-control mb-2" value="{{$product->Precio}}">
        </div>
        <div class="mb-3">
            <label class="custom-file-label">Imagen del producto...</label>
            <input type="file" name="Foto" class="custom-file-input" value="{{$product->Foto}}">
          </div>
        <div class="mb-3">
          <label>Fecha_elaboracion...</label>
          <input type="number" name="Fecha_elaboracion" placeholder="Fecha_elaboracion" class="form-control mb-2" value="{{$product->Fecha_elaboracion}}">
        </div>
        <div class="mb-3">
            <label>Fecha_vencimiento...</label>
            <input type="number" name="Fecha_vencimiento" placeholder="Fecha_vencimiento" class="form-control mb-2" value="{{$product->Fecha_vencimiento}}">
        </div>
        <div class="mb-3">
            <label>Cantidad...</label>
            <input type="number" name="Cantidad" placeholder="Cantidad" class="form-control mb-2" value="{{$product->Cantidad}}">
        </div>
        <div class="mb-3">
            <label>Valor_total...</label>
            <input type="double" name="Valor_total" placeholder="Valor_total" class="form-control mb-2" value="{{$product->Valor_total}}">
        </div>
        <div class="mb-3">
            <label>Medio_pago...</label>
            <input type="text" name="Medio_de_pago" placeholder="Medio_de_pago" class="form-control mb-2" value="{{$product->Medio_pago}}">
        </div>
        <button type="submit" class="btn btn-danger">Guardar</button>
      </form>
      @endsection


