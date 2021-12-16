<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view ('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('products.create',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product -> Marca = $request -> Marca;
        $product -> Descripcion = $request -> Descripcion;
        $product -> Precio = $request -> Precio;
        $product -> Foto = $request -> Foto;
        $product -> Fecha_elaboracion = $request -> Fecha_elaboracion;
        $product -> Fecha_vencimiento = $request -> Fecha_vencimiento;
        $product -> Cantidad = $request -> Cantidad;
        $product -> Valor_total = $request -> Valor_total;
        $product -> Medio_de_pago = $request -> Medio_de_pago;
        //metodo save guarda en bbdd
        $product -> save();

        return redirect()->route('products.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view ('products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product -> Marca = $request -> Marca;
        $product -> Descripcion = $request -> Descripcion;
        $product -> Precio = $request -> Precio;
        $product -> Foto = $request -> Foto;
        $product -> Fecha_elaboracion = $request -> Fecha_elaboracion;
        $product -> Fecha_vencimiento = $request -> Fecha_vencimiento;
        $product -> Cantidad = $request -> Cantidad;
        $product -> Valor_total = $request -> Valor_total;
        $product -> Medio_de_pago = $request -> Medio_de_pago;
        //metodo save guarda en bbdd
        $product -> save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->DELETE();
        return redirect()->route('products.index');
    }
}
