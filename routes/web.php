<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studentcontroller;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/',"Studentcontroller@index");
route::get('/show/{id}',"Studentcontroller@show");
route::get('/edit/{id}',"Studentcontroller@edit");
route::get('/create',"Studentcontroller@create");
route::post('/store',"Studentcontroller@store");
route::post('/update/{id}',"Studentcontroller@update");

