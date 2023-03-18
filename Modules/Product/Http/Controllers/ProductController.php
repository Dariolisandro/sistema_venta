<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Modules\Product\Entities\Producto;
use Modules\Product\Http\Requests\StoreRequest;
use Modules\Product\Http\Requests\UpdateRequest;



class ProductController extends Controller
{
   
    public function index()
    {
        $product = Producto::get(); 
        return view('product::index',compact('product'));
    }
    public function create()
    {
        $product=Category::get()        
        $product=   
        return view('admin::product::create');
    }


    public function store(StoreRequest $request)
    {
        Producto::create($request->all());
        return redirect()->route('product::index');
        //
    }

    public function show(Producto $product)
    {
        return view('admin::product::show',compact('product'));
    }


    public function edit(Producto $product)
    {
        return view('admin::product::edit'.compact('product'));
    }
    public function update(UpdateRequest  $request, Producto $product)

    {
        $product->update( $request->all());
        return redirect()->route('product::index');
        //
    }
    public function destroy(Producto $product)
    {
        $product->delete();
        return redirect()->route('product::index');
        //
    }
}
