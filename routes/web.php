<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\pesertaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KompetisiController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class,'index']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::match(['get','post'],'/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [pesertaController::class, 'index']);
    Route::get('/peserta/tambah', [pesertaController::class, 'tambah']);
    Route::post('/peserta/store', [pesertaController::class, 'store']);
    Route::get('/peserta/edit/{id}', [pesertaController::class, 'edit']);
    Route::post('/peserta/update', [pesertaController::class, 'update']);
    Route::get('/peserta/hapus/{id}', [pesertaController::class, 'hapus']);

    // Route::get('/', [KompetisiController::class, 'index']);
    Route::get('/kompetisi/tambah', [KompetisiController::class, 'tambah']);
    Route::post('/kompetisi/store', [KompetisiController::class, 'store']);
    Route::get('/kompetisi/edit/{id}', [KompetisiController::class, 'edit']);
    Route::post('/kompetisi/update', [KompetisiController::class, 'update']);
    Route::get('/kompetisi/hapus/{id}', [KompetisiController::class, 'hapus']);

    Route::get('/tim/tambah', [TimController::class, 'tambah']);
    Route::post('/tim/store', [TimController::class, 'store']);
    Route::get('/tim/edit/{id}', [TimController::class, 'edit']);
    Route::post('/tim/update', [TimController::class, 'update']);
    Route::get('/tim/hapus/{id}', [TimController::class, 'hapus']);
});

Route::get('beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('admin', [pesertaController::class, 'index'])->name('admin');

Auth::routes();

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('admin');
    } else {
        return redirect()->route('beranda');
    }
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
