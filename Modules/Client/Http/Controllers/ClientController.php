<?php

namespace Modules\Client\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Client\Entities\Cliente;
use Modules\Client\Http\Requests\StoreRequest;
use Modules\Client\Http\Requests\UpdateRequest;
use Modules\Product\Entities\Producto;

class ClientController extends Controller
{
 
    public function index()
    {
        $clients =Cliente::get(); 
        return view('client::index',compact('clientes'));
    }
    public function create()
    {

        return view('admin::client::create');
    }


    public function store( StoreRequest $request)
    {
       Cliente::create($request->all());
        return redirect()->route('clientes::index');
        //
    }

    public function show(Cliente $client)
    {
        return view('admin::client::show',compact('client'));
    }


    public function edit(Cliente $client)
    {
        return view('admin::client::edit'.compact('client'));
    }
    public function update(UpdateRequest  $request,Cliente $client)

    {
        $client->update( $request->all());
        return redirect()->route('clientes::index');
        //
    }
    public function destroy(Producto $client)
    {
        $client->delete();
        return redirect()->route('clientes::index');
        //
    }
}
