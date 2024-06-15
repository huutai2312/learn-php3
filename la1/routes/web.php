<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TinController;
use App\Http\Controllers\Ps27199Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get( '/' ,[TinController::class,'index'])->name('fe.index');
Route::get( '/lien-he' ,[TinController::class,'lienhe'])->name('fe.lienhe');
Route::get('/ct/{id}',[TinController::class,'lay1tin'])->name('fe.lay1tin');
Route::get( '/ps27199' ,[Ps27199Controller::class,'index'])->name('fe.ps27199');
Route::get( '/admin' ,[Ps27199Controller::class,'indexAdmin'])->name('admin.index');
Route::get( '/admin/sanpham' ,[Ps27199Controller::class,'adminSanppham'])->name('admin.sanpham');
Route::get( '/admin/user' ,[Ps27199Controller::class,'adminUser'])->name('admin.user');
