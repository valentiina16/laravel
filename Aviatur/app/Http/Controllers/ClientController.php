<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::simplePaginate(2);
        return view ('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clients.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client -> Nombres = $request -> Nombres;
        $client -> Cedula = $request -> Cedula;
        $client -> Celular = $request -> Celular;
        $client -> Email = $request -> Email;
        $client -> Direccion = $request -> Direccion;
        $client -> Ciudad = $request -> Ciudad;
        //metodo save guarda en bbdd
        $client -> save();

        return redirect()->route('clients.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view ('clients.edit' , compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client -> Nombres = $request -> Nombres;
        $client -> Cedula = $request -> Cedula;
        $client -> Celular = $request -> Celular;
        $client -> Email = $request -> Email;
        $client -> Direccion = $request -> Direccion;
        $client -> Ciudad = $request -> Ciudad;
        //metodo save guarda en bbdd
        $client -> save();

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->DELETE();
        return redirect()->route('clients.index');
    }
}
