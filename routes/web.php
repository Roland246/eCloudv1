<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StockageController;

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

/* ROUTES IBRAHIMA */

Route::get('/faq', function () {
    return view('SupDoc.faq');
})->name('faq');

Route::get('/guide', function () {
    return view('SupDoc.guide');
})->name('guide');

Route::get('/help', function () {
    return view('SupDoc.help');
})->name('help');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('stockage', StockageController::class);
Route::resource('contact', ContactController::class);
Route::get('commandes',  [App\Http\Controllers\CommandeController::class, 'create'])->name('new.commande');

Route::middleware(['auth',])->group(function () {
    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->back('/');
     });
    Route::post('create/commandes',  [App\Http\Controllers\CommandeController::class, 'store'])->name('create.commande');
    Route::get('messages',  [App\Http\Controllers\AdminController::class, 'message'])->name('messages');
    Route::put('update-commande/{id}', [App\Http\Controllers\CommandeController::class, 'updateStatus']);
    Route::get('delete-commande/{id}', [App\Http\Controllers\CommandeController::class, 'destroy']);
});


