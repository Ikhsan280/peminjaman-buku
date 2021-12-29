<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;

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

Route::get('/index', function () {
    return view('admin.buku.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(
    [
        'register' => false
    ]
    );

   Route::group(['prefix'=>'admin','middleware',['auth']],function(){
     Route::get('buku',function(){
        return view('buku.index');
     })->middleware(['role:admin|pengguna']);

     Route::get('pengarang',function(){
        return view('pengarang.index');
     })->middleware(['role:admin']);

     });

     route::resource('admin/buku',BukuController::class);
     route::resource('admin/anggota',AnggotaController::class);

