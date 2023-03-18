<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Modules\Category\Http\Requests\StoreRquest;
use Modules\Category\Http\Requests\UpdateRquest;

class CategoryController extends Controller
{
    public function index()
    {
        $categorie = Category::get(); 
        return view('category::index',compact('categorie'));
    }
    public function create()
    {

        return view('admin::category::create');
    }


    public function store(StoreRquest $request)
    {
        Category::create($request->all());
        return redirect()->route('categorie::index');
        //
    }

    public function show(Category $category)
    {
        return view('admin::category::show',compact('category'));
    }


    public function edit(Category $category)
    {
        return view('admin::category::edit'.compact('category'));
    }
    public function update(UpdateRquest  $request, Category $category)

    {
        $category->update( $request->all());
        return redirect()->route('categorie::index');
        //
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categorie::index');
        //
    }
}
