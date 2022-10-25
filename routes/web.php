<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjcareerController;


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
    return view('newlogin');
});


/*Route::get('/login', function () {
    return view('newlogin');
});*/




Auth::routes();
/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');*/
/*Route::get('/home', [App\Http\Controllers\ObjcareerController::class, 'index'])->name('home');
*/
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

/*Route::get('/home', [ 'as' => 'home', 'uses' => 'ObjcareerController@index']);*/

Route::resource('/objcareer', ObjcareerController::class);
Route::resource('/homep', HomeController::class);

Route::get('edit/{id}', 'HomeController@edit');

Route::put('update/{id}', 'HomeController@update');

Route::post('store', 'HomeController@store');