<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;

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

Route::get('/login', function(){
    $data = [
        'content' => 'home/auth/login'
    ];
    return view('home.layout.wrapper', $data);
});

//=======admin=======
Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', function(){
        $data = [
            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layout.wrapper', $data);
    });

    Route::resource('/user', AdminUserController::class);
});
