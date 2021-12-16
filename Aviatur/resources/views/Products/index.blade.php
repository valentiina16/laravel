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
        <th scope="col">Marca</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
        <th scope="col">Foto</th>
        <th scope="col">Fecha_elabor</th>
        <th scope="col">Fecha_venc</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Total</th>
        <th scope="col">Medio_pago</th>
        <th scope="col">Opciones</th>



      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->Marca}}</td>
            <td>{{$product->Descripcion}}</td>
            <td>{{$product->Precio}}</td>
            <td>{{$product->Foto}}</td>
            <td>{{$product->Fecha_elaboracion}}</td>
            <td>{{$product->Fecha_vencimiento}}</td>
            <td>{{$product->Cantidad }}</td>
            <td>{{$product->Valor_total }}</td>
            <td>{{$product->Medio_de_pago}}</td>



            <td>
              <a href="{{route('products.edit', $product)}}">
                <button type="button" class="btn btn-warning btn-sm">Editar</button>
              </a>
            </td>

            <td>
              <form method="POST" action="{{route('products.destroy', $product)}}">
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
