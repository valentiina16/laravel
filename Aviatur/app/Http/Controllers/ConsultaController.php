<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function consulta(){

        $consulta = Client::select(['Nombres','Email'])->get();

        $consulta = Client::join('products' , 'clients.id' , '=' , 'products.id')
                            ->get();

        $consulta = Client::where('Ciudad','Cali')->get();

        $consulta = Product::select('products')->sum('Valor_total');

        $consulta = Sale::whereBetween('id',[2,5])->get();

        $consulta = Client::select(['Nombres'])
                        ->where('Nombres','LIKE','%ruz%')
                        ->get();


        echo $consulta;
    }
}
