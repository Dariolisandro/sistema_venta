<?php

namespace Modules\Purchase\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Purchase\Entities\Purchase;
use Modules\Proveedor\Entities\Provider;
use Modules\Category\Entities\Category;
use Modules\Purchase\Http\Requests\StoreRequest;
use Modules\Purchase\Http\Requests\UpdateRequest;



class PurchaseController extends Controller
{
    public function index()
    {
        $puchases = Purchase::get();
        return view('purchase::index',compact('purchases'));
    }
    public function create()
    {
        $providers = Provider::get();
        return view('admin::purchase::create',compact('providers'));
    }


    public function store(StoreRequest $request)
    {
        $purchase = Purchase::create($request->all());

        foreach ($request->product_id as $key => $product){
            $results[] = array("product_id"=>$request->product_id[$key],
            "quantity"=>$request->quantity[$key],"price"=>$request->price[$key]);
        }
        $purchase->purchaseDetails()->createMany($results);
        return redirect()->route('purchase::index');
    }

    public function show(Purchase $purchase)
    {
        return view('admin::purchase::show',compact('purchase'));
    }


    public function edit(Purchase $purchase)
    {
        $providers = Provider::get();
        return view('admin::purchase::edit'.compact('providers'));
    }
    public function update(UpdateRequest  $request, Purchase $purchase)

    {
        $purchase->update( $request->all());
        return redirect()->route('purchase::index');
        //
    }
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        return redirect()->route('purchase::index');
        //
    }
}
