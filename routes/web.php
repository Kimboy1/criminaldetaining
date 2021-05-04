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

Route::get('/', function(){
    return redirect(route('dashboard'));
})->name('index');
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/dashboard/criminal/add' ,[App\Http\Controllers\CriminalController::class, 'add'])->name('criminal.add');  
Route::post('/dashboard/criminal/add' ,[App\Http\Controllers\CriminalController::class, 'store'])->name('criminal.add');   

Route::get('/dashboard/criminal/edit' ,[App\Http\Controllers\CriminalController::class, 'edit'])->name('criminal.edit');  
Route::post('/dashboard/criminal/edit' ,[App\Http\Controllers\CriminalController::class, 'update'])->name('criminal.edit');      

Route::get('/dashboard/criminal/delete/{id}' ,[App\Http\Controllers\Auth\CriminalController::class, 'delete'])->name('criminal.delete');  

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
