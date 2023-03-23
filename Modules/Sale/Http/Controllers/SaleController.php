<?php

namespace Modules\Sale\Http\Controllers;


use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Sale\Entities\Sale;
use Modules\Sale\Http\Requests\UpdateRequest;
use Modules\Sale\Http\Requests\StoreRequest;

use Modules\Client\Entities\Cliente;

class SaleController extends Controller
{
    public function index()
    {
        $puchases = Sale::get();
        return view('sale::index',compact('sales'));
    }
    public function create()
    {
        $clients = Cliente::get();
        return view('admin::sale::create',compact('providers'));
    }


    public function store(StoreRequest $request)
    {
        $sale = Sale::create($request->all());

        foreach ($request->product_id as $key => $product){
            $results[] = array("product_id"=>$request->product_id[$key],
            "quantity"=>$request->quantity[$key],"price"=>$request->price[$key],
            "discount"=>$request->discount[$key]);
        }
        $sale->saleDetails()->createMany($results);
        return redirect()->route('sale::index');
    }

    public function show(Sale $sale)
    {
        return view('admin::sale::show',compact('sale'));
    }


    public function edit(Sale $sale)
    {
        $clients = Cliente::get();
        return view('admin::sale::edit'.compact('providers'));
    }
    public function update(UpdateRequest  $request, Sale $sale)

    {
        $sale->update( $request->all());
        return redirect()->route('sale::index');
        //
    }
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sale::index');
        //
    }
}
