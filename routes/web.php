<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(
    [
        'register' => false
    ]
    );

    // Hanya untuk role admin
    Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
        Route::get('/',function(){
            return 'halaman admin';
        });

        Route::get('profile',function(){
            return 'Halaman Profile Admin';
        });
    });

    //Hanya untuk role pengguna
    Route::group(['prefix'=>'pengguna','middleware'=>['auth','role:pengguna']],function(){
        Route::get('/',function(){
            return 'Halaman pengguna';
        });
        Route::get('profile', function(){
            return 'halaman profile pengguna';
        });
    });
