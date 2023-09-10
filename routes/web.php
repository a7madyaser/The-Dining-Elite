<?php
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\profileController;
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

Route::get('/main', function () {
    return view('home.main');
});

Route::get('/admin-layout', function () {
    return view ('admin.layout');
});

Route::get('/admin-admin', function () {
    return view ('admin.sidebar.admin');
});

Route::get('/admin-user', function () {
    return view ('admin.sidebar.user');
});

Route::get('/admin-category', function () {
    return view ('admin.sidebar.category');
});

Route::get('/admin-reservation', function () {
    return view ('admin.sidebar.reservation');
});

Route::get('/admin-restaurant', function () {
    return view ('admin.sidebar.restaurant');
});

Route::get('/admin-dashboard', function () {
    return view ('admin.sidebar.dashboard');
});

////////////////////////////////////


Route::get('/about', function () {
    return view('home.about');
});

Route::get('/book', function () {
    return view('home.reservation.book');
});

Route::get('/login', function () {
    return view('home.login.login');
});

Route::get('/show', function () {
    return view('home.show');
});
Route::get('/a', function () {
    return view('admin.About');
});
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});


Route::resource("/reservation", ReservationController::class);



// Route::get('/profile', function () {
//     return view('user.user-profile');
// });

// Route::resource("/user", profileController::class);
Route::get('/', function () {
    return view('user.index');
});

Route::resource("/user", profileController::class);
