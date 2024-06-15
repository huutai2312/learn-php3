<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TinController;
use App\Http\Controllers\Ps27199Controller;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', [TinController::class, 'index']);
Route::get('/lien-he', [TinController::class, 'lienhe']);
Route::get('/ct/{id}', [TinController::class, 'lay1tin']);
Route::get('/tintrongloai/{id}', [TinController::class, 'layTinTheoIdLT']);
Route::get('/ps27199', [Ps27199Controller::class, 'index']);

Route::get('/txn', function () {
    $tinxemnhieu = DB::table('tin')
        ->select('id', 'tieuDe', 'xem')
        ->orderBy('xem', 'desc')
        ->limit(10)
        ->get();

    return view('txn', ['tinxemnhieu' => $tinxemnhieu]);
});
Route::get('/tinmoi', function () {
    $tinmoi = DB::table('tin')
        ->select('id', 'tieuDe', 'ngayDang')
        ->orderBy('ngayDang', 'desc')
        ->limit(10)
        ->get();
    return view('tinmoi', ['tinmoi' => $tinmoi]);
});

Route::get('/admin', [AdminController::class, 'index']);
