<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\RéalisateursController;
use App\Http\Controllers\AuthController;


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

route::get('/films', [FilmsController::class, 'getall'])->name('films');





route::get('/réalisateur/{id}',[RéalisateurController::class,'index'])->name('auteur');












route::get('/update/{id}', [FilmsController::class,'showUpdate'])->whereNumber('id')->name('update');


route::get('film/{id}', [FilmsController::class, 'show'])->whereNumber('id');


route::get('réalisateur/{id}', [RéalisateursController::class, 'showRéalisateur'])->whereNumber('id');


route::post('/register', [AuthController::class, 'add'])->name('addUser');

route::get('/register', [AuthController::class, 'showAuth'])->name('showAuth');


route::get('/login', [AuthController::class, 'getLogin'])->name('login');


route::post('/login', [AuthController::class, 'authenticate'])->name('login');

route::get('/logout', [AuthController::class, 'logout'])->name('logout');


route::middleware(['auth'])->group(function(){
route::post('/films', [FilmsController::class, 'add' ]);
route::post('/update/{id}', [FilmsController::class, 'update'])->name('updateFilms');
route::delete('/delete/{id}', [FilmsController::class,'destroy'])->name('delete');
});




