<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatekerController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LoginController;

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

Route::get('/home', [App\Http\Controllers\ObatekerController::class, 'home']);
// Route::get('/login', [App\Http\Controllers\ObatekerController::class, 'login']);
Route::get('/obat', [App\Http\Controllers\ObatekerController::class, 'obat']);
Route::get('/order', [App\Http\Controllers\ObatekerController::class, 'order']);
Route::get('/editHome', function () {
    return view('admin.editHome');
});
Route::get('/editObat', function () {
    return view('admin.editObat');
});

//CRUD OBAT

Route::get('/obats', [ObatController::class,'index'])->name('obats.index');
Route::get('/obats/create', [ObatController::class,'create'])->name('obats.create');
Route::post('/obats', [ObatController::class,'store'])->name('obats.store');
Route::get('/obats/{obat}', [ObatController::class,'show'])->name('obats.show');
Route::get('/obats/{obat}/edit', [ObatController::class,'edit'])->name('obats.edit');
Route::patch('/obats/{obat}', [ObatController::class,'update'])->name('obats.update');
Route::delete('/obat/{obat}', [ObatController::class,'destroy'])->name('obats.destroy');

//CRUD ORDER

Route::get('/orders', [orderController::class,'index'])->name('orders.index');
Route::get('/orders/create', [orderController::class,'create'])->name('orders.create');
Route::post('/orders', [orderController::class,'store'])->name('orders.store');
Route::get('/orders/{order}', [orderController::class,'show'])->name('orders.show');
Route::get('/orders/{order}/edit', [orderController::class,'edit'])->name('orders.edit');
Route::patch('/orders/{order}', [orderController::class,'update'])->name('orders.update');
Route::delete('/order/{order}', [orderController::class,'destroy'])->name('orders.destroy');

//File Upload

Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);
Route::post('/file-upload', [FileUploadController::class, 'prosesFileUpload']);

//Session

// Route::get('/', [SessionController::class,'index']);
Route::get('/buat-session', [SessionController::class,'buatSession']);
Route::get('/akses-session', [SessionController::class,'aksesSession']);
Route::get('/hapus-session', [SessionController::class,'hapusSession']);
Route::get('/flash-session', [SessionController::class,'flashSession']);


//Login

// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


// Route::get('login', [LoginController::class, 'view'])->name('login');

// Route::post('login', [LoginController::class, 'authenticate'])->name('login.auth');
// Route::middleware('auth')->get('/berhasil', function() {
//     return "Berhasil Login";
// })->name('dashboard');

// Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', function() {
//     return view('admin.order');
// });

// Route::view('/data-order', 'admin.order');
// Route::view('/data-obat', 'admin.obat');