<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);



Route::resource('/item',App\Http\Controllers\ItemController::class);
Route::resource('/review',App\Http\Controllers\ReviewController::class);

Route::resource('/cat',App\Http\Controllers\ItemCategoryController::class);


Route::resource('/blog',App\Http\Controllers\BlogController::class);
Route::resource('/blogs',App\Http\Controllers\AdminBlogController::class);
Route::resource('/blogcategory',App\Http\Controllers\BlogCategoryController::class);


Route::get('/addtocart/{id}',[CartController::class,'addToCart'])->name('addtocart');
Route::get('/multipleaddtocart/{id}/{qnt}',[CartController::class,'addMultipleToCart'])->name('addmultipletocart');
Route::get('/removecart/{id}/',[CartController::class,'removeCart'])->name('removeCart');
Route::get('/destroyCart',[CartController::class,'destroyCart'])->name('destroyCartm');


Route::get('/mycart',[CartController::class,'myCart'])->name('mycart');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');


Route::get('/search',[SearchController::class,'search'])->name('search');



Route::get('/about', function(){
    return view('about');
});
Route::get('/terms', function(){
    return view('terms');
});
Route::get('/privacy', function(){
    return view('privacy');
});
Route::get('/delivery', function(){
    return view('delivery');
});Route::get('/waranty', function(){
    return view('waranty');
});


Route::get('/contact', function(){
    return view('contact')->with('address', Address::all()->last());
});
