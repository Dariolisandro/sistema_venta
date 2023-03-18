<?php

namespace Modules\Proveedor\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Proveedor\Entities\Provider;
use Modules\Proveedor\Http\Requests\StoreRequest;
use Modules\Proveedor\Http\Requests\UpdateRquest;


class ProveedorController extends Controller
{
    public function index()
    {
        $Provider = Provider::get(); 
        return view('provider::index',compact('providers'));
    }
    public function create()
    {

        return view('admin::provider::create');
    }


    public function store(StoreRequest $request)
    {
        Provider::create($request->all());
        return redirect()->route('providers::index');
        //
    }

    public function show(Provider $provider)
    {
        return view('admin::provider::show',compact('provider'));
    }


    public function edit(Provider $provider)
    {
        return view('admin::provider::edit'.compact('provider'));
    }
    public function update(UpdateRquest  $request, Provider $provider)

    {
        $provider->update( $request->all());
        return redirect()->route('providers::index');
        //
    }
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->route('providers::index');
        //
    }
}
