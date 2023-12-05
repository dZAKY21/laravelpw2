<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Admin
Route::middleware(['auth', 'checkRole:A '])->group(function () {
    Route::resource('fakultas', FakultasController::class);
    Route::resource('prodi', ProdiController::class);
    Route::resource('mahasiswa', MahasiswaController::class);
});

// User
Route::middleware(['auth', 'checkRole:U '])->group(
    function () {
        Route::get('/fakultas', [FakultasController::class, 'index'])->name
        ('fakulats.index');
    }
);
// Route::get('/fakultas', function () {
//     return view('fakultas');
// });

// Route::get('/prodi', function () {
//     return view('prodi');
// });


// Route::get('/mahasiswa', function () {
//     $data = [
//         ["npm" => 2226250083, "nama" => "Ahmad"],
//         ["npm" => 2226250082, "nama" => "Mahda"],

//     ];
//     return view('mahasiswa.index')->with(
//         'mahasiswa',
//         $data
//     );
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['checkRole:A,U'])->name('home');
