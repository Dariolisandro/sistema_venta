<?php

use App\Http\Controllers\RoleControler;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Modules\Category\Http\Controllers\CategoryController;
use Modules\Proveedor\Http\Controllers\ProveedorController;
use Modules\Client\Http\Controllers\ClientController;
use Modules\Product\Http\Controllers\ProductController;
use Modules\Sale\Http\Controllers\SaleController;
use Modules\Purchase\Http\Controllers\PurchaseController;
use Modules\Category\Resources\views;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',function (){

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware'=>['auth']], function(){
    Route::resource('roles',RoleControler::class);
    Route::resource('users',UserController::class);
    Route::resource('Modules/Category',CategoryController::class);

});

//require __DIR__ . '/auth.php';
Auth::routes();

/*Route::resource('categories','CategoryController')->names('categories');
Route::resource('clients','ClientController')->names('clients');
Route::resource('products','ProductController')->names('products');
Route::resource('providers','ProviderController')->names('providers');
Route::resource('purchase','PurchaseController')->names('purchases');
Route::resource('sales','SaleController')->names('sales');
*/


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
