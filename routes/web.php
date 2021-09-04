<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LoginWithSocialNetworkController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
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

/*
|-----------------------------------------------------------------------
| Email Verification.
|-----------------------------------------------------------------------
*/
// gui email xac thuc lan 1
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// gui lai email xac minh
Route::post('/email/verification-notification', [VerifyEmailController::class, 'resendEmail'])
    ->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// tien hanh xac thuc va chuyen huong ve /home
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verification'])
    ->middleware(['auth', 'signed'])->name('verification.verify');

/*
|-----------------------------------------------------------------------
| Forgot Password and Reset Password.
|-----------------------------------------------------------------------
*/
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', [ResetPasswordController::class, 'requestPasswordReset'])
    ->middleware('guest')->name('password.email');

// dat lai mat khau
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword'])
    ->middleware('guest')->name('password.update');

/*
|-----------------------------------------------------------------------
| Login, Register normally and Log out.
|-----------------------------------------------------------------------
*/

Route::get('login', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|-----------------------------------------------------------------------
| Login with Socials Network (Facebook, Google).
|-----------------------------------------------------------------------
*/
Route::get('/auth/{provider}/redirect', [LoginWithSocialNetworkController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [LoginWithSocialNetworkController::class, 'callback']);


/*
|-----------------------------------------------------------------------
| Routes for Customers.
|-----------------------------------------------------------------------
*/
// Set language
Route::group(['middleware' => 'locale'], function () {
    Route::get('change-language/{language}', [Controller::class, 'changeLanguage'])->name('change_language');
});
// ->middleware('verified');
Route::group(['as' => 'user.'], function () {
    Route::get('/profile', [UserController::class, 'profile'])->middleware('auth:web')->name('profile');
    Route::post('/profile/update', [UserController::class, 'update'])->middleware('auth:web')->name('update');
    Route::post('/update-password', [UserController::class, 'updatePassword'])->name('update_password');
    Route::get('user', [UserController::class, 'id']);
});

Route::get('/', function () {
    return view('index');
});


Route::get('/standard-list', function () {
    return view('standard_list');
});

Route::get('/detail-tour', function () {
    return view('detail_tour');
});

Route::get('/contact-us', function () {
    return view('contact_us');
});

Route::get('/blog', function () {
    return view('blog_masonry');
});

Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/booking', function () {
    return view('booking_page');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/mail', function () {
    return view('mail.booking');
});
Route::get('/myaccount', function () {
    return view('my_account');
});

/*
|-----------------------------------------------------------------------
| Routes for Administrators.
|-----------------------------------------------------------------------
*/
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => 'auth:web'], function () {
    Route::group(['prefix' => '/tag', 'as' => 'tag.'], function () {
        Route::get('/', [TagController::class, 'index'])->name('index');
        Route::get('/add', [TagController::class, 'create'])->name('add');
        Route::post('/store', [TagController::class, 'store'])->name('store');
        Route::get('/edit/{tag_id}', [TagController::class, 'edit'])->name('edit');
        Route::post('/update/{tag_id}', [TagController::class, 'update'])->name('update');
        Route::get('/delete/{tag_id}', [TagController::class, 'destroy'])->name('delete');
    });
});
// page admin
Route::get('/admin', function () {
    return view('admin.homeadmin');
});

//slider
Route::get('/admin/slider', function () {
    return view('admin.slider.listslider');
});
Route::get('/admin/add-slider', function () {
    return view('admin.slider.addslider');
});

// area location.
Route::get('/admin/area-location', function () {
    return view('admin.arealocation.manage_location');
});
Route::get('/admin/add-location', function () {
    return view('admin.arealocation.add_location');
});
// tour.
Route::get('/admin/tour', function () {
    return view('admin.tour.manage_tour');
});

Route::get('/admin/add-tour', function () {
    return view('admin.tour.add_tour');
});
Route::get('/admin/testtour', function () {
    return view('admin.tour.testtour');
});

// upload-images
Route::post('upload-images','ImagesController@store');

Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login'])->name('login');

