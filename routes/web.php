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
    return view('store/partials/slider');
});


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();


Route::resource('seguridad', 'UsuarioController');
Route::resource('proceso', 'ProcessesController');
Route::resource('procedure', 'ProceduresController');
Route::resource('registers', 'RegistersController');
Route::resource('document', 'DocumentsController');
