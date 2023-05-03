<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminPotensiController;
use App\Http\Controllers\AdminProfilController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminAuthController;







Route::get('/', function () {
    // return view('home.index');
    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layout.wrapper', $data);
});

Route::get('/beranda', function () {
    $data = [
        'content' => 'home/beranda/index'
    ];
        return view('home.layout.wrapper', $data);
});

Route::get('/Profil', function () {
    $data = [
        'content' => 'home/profil/index'
    ];
        return view('home.layout.wrapper', $data);
});

Route::get('/Potensi', function () {
    $data = [
        'content' => 'home/Potensi/index'
    ];
        return view('home.layout.wrapper', $data);
});

Route::get('/Galeri', function () {
    $data = [
        'content' => 'home/Galeri/index'
    ];
        return view('home.layout.wrapper', $data);
});

Route::get('/Kontak', function () {
    $data = [
        'content' => 'home/kontak/index'
    ];
        return view('home.layout.wrapper', $data);
});

Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);


//=======admin=======
Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/logout', [AdminAuthController::class, 'logout']);


    Route::get('/dashboard', [AdminDashboardController::class, 'index']);

    Route::get('/profil',[AdminProfilController::class, 'index']);
    Route::put('/profil/update',[AdminProfilController::class, 'update']);

    Route::resource('/posts/blog', AdminBlogController::class);
    Route::resource('/posts/kategori', AdminKategoriController::class);

    Route::resource('/user', AdminUserController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/potensi', AdminPotensiController::class);
    Route::resource('/pesan', AdminPesanController::class);

});
