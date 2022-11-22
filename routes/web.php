<?php
namespace App\Http\controllers;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
;

Route::get('/vehicule',[VehiculeController ::class,'vehicule']);

Route::get('/myview',[MyController ::class,'index']);

Route::get('/layout',[LayoutController ::class,'index']);


require __DIR__.'/auth.php';
