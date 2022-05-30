<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\viewblog;
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

Route::get('/',[homecontroller::class,'show_post'])->name('home');
Route::get('/viewblog/{id}',[viewblog::class,'view'])->name('viewblog');
Route::middleware(['auth'])->group(function () { 
Route::get('/post', [postcontroller::class,'index'])->name('post_index');
Route::post('/post', [postcontroller::class,'create'])->name('post_create');
Route::get('/dashboard', [dashboardcontroller::class, 'show_post'])->name('dashboard');    
Route::get('/post/edit/{id}', [postcontroller::class, 'edit'])->name('post_edit');
Route::put('/post/edit/{id}', [postcontroller::class, 'update'])->name('post_update');
Route::get('/post/delete/{id}', [postcontroller::class, 'destroy'])->name('post_destroy');
});



require __DIR__.'/auth.php';
