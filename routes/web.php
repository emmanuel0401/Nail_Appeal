<?php

use App\Http\Controllers\CorreoController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('inicio');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/index', function () {
    return view('contactanos.index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post('/contacto', 'CorreoController@store');
Route::get('contacto', [CorreoController::class, 'index'])->name('contacto');

//Route::get('index',[CorreoController::class, 'index'])->name('contactanos.index');
//Route::post('store',[CorreoController::class, 'store'])->name('contactanos.store');


Auth::routes();
Route::get('/catalogo', 'UnasController@catalogo');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/Cart', 'CarritosController');

Route::group(['middleware' => ['role:administrador']], function () {
    Route::resource('unas', 'UnasController');
});
Route::get('/carrito', function () {
    return view('carrito');
})->middleware('auth');
