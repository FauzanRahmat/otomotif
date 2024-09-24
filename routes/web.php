<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\NavteksController;


use App\Models\Logo;
use App\Models\Product;
use App\Models\Pelayanan;
use App\Models\Testimoni;
use App\Models\Slider;
use App\Models\Footer;
use App\Models\Navteks;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $l=Logo::first();
    $a=Product::get();
    $d=Slider::get();
    $c=Testimoni::get();
    $j=Pelayanan::get();
    $e=Footer::get();
    $j=Navteks::get();

    $testimoni1 = Testimoni::where('testimoni_id', 1)->first();
    $testimoni2 = Testimoni::where('testimoni_id', 2)->first();
    $testimoni3 = Testimoni::where('testimoni_id', 3)->first();
    $testimoni4 = Testimoni::where('testimoni_id', 4)->first();

    $pelayanan1 = Pelayanan::where('pelayanan_id', 1)->first();
    $pelayanan2 = Pelayanan::where('pelayanan_id', 2)->first();
    $pelayanan3 = Pelayanan::where('pelayanan_id', 3)->first();
    $pelayanan4 = Pelayanan::where('pelayanan_id', 4)->first();
    return view('welcome',compact('l','a','j','c','d','e','j','pelayanan1','pelayanan2','pelayanan3','pelayanan4','testimoni1','testimoni2','testimoni3','testimoni4'));
});

Route::get('/admin', function () {
    return view('adminpage');
});

Route::group(['prefix'=>'admin'], function () {
    Route::resource('logo', LogoController::class);
});

Route::group(['prefix'=>'admin'], function () {
    Route::resource('product', ProductController::class);
});

Route::group(['prefix'=>'admin'], function () {
    Route::resource('pelayanan', PelayananController::class);
});

Route::group(['prefix'=>'admin'], function () {
    Route::resource('testimoni', TestimoniController::class);
});

Route::group(['prefix'=>'admin'], function () {
    Route::resource('slider', SliderController::class);
});

Route::group(['prefix'=>'admin'], function () {
    Route::resource('footer', FooterController::class);
});

Route::group(['prefix'=>'admin'], function () {
    Route::resource('navteks', NavteksController::class);
});
