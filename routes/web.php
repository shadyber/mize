<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShippingInfoController;
use App\Http\Controllers\BankStatementController;
use App\Http\Controllers\BankPaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StripePaymentController;

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
Route::resource('/storeorder',App\Http\Controllers\StoreOrderController::class);
Route::resource('/storelocation',App\Http\Controllers\StoreLocationController::class);

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
Route::post('/checkout',[CheckoutController::class,'store'])->name('checkout');
Route::resource('/shippingifno',ShippingInfoController::class);

Route::get('/myorder',[App\Http\Controllers\OrderController::class,'myorders'])->name('myorders');


Route::get('/search',[SearchController::class,'search'])->name('search');



Route::get('/about', [AboutUsController::class, 'index'])->name('about');

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
    return view('contact')->with('address', \App\Models\Address::all()->last());
});



Route::group(['middleware' => 'role:admin'], function() {
    Route::resource('/items',App\Http\Controllers\AdminItemController::class);
    Route::resource('/order',App\Http\Controllers\OrderController::class);
    Route::post('/orderstatus',[OrderController::class,'updateStatus'])->name('order.status');
    Route::post('/photoupdate', [App\Http\Controllers\AdminItemController::class, 'photoupdate'])->name('photoupdate');
    Route::resource('/itemsphoto',App\Http\Controllers\ItemPhotoController::class);
    Route::resource('/verity',App\Http\Controllers\VerityController::class);
    Route::resource('/users',App\Http\Controllers\CustomerController::class);
    Route::get('/about/create',[AboutController::class,'create']);
    Route::get('/about/edit',[AboutController::class,'create']);
    Route::post('/about',[AboutController::class,'store']);
    Route::resource('/currency',CurrencyController::class);
    Route::resource('/payments',PaymentController::class);

    Route::resource('/bankstatement',BankStatementController::class);
});


    Route::resource('/bankpayment',BankPaymentController::class);
    Route::post('/confirmbankpayment',[BankPaymentController::class,'confirmpayment'])->name('confirmbankpayment');

Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

