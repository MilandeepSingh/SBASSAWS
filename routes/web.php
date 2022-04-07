<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\GeneralController;

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

Route::get('/test', function () {
    return view('test');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login", [UserController::class, 'login']);
Route::post("/signup", [UserController::class, 'signUp']);
Route::post('/add_to_favourites', [ProjectController::class, 'addToFavourites']);
Route::post("/donatefinal", [DonateController::class, 'donateFinal']);

Route::get("/", [ProjectController::class, 'index']);
Route::get("/detail/{id}", [ProjectController::class, 'detail']);
Route::get("/favouriteslist", [ProjectController::class, 'favouritesList']);
Route::get("/removefavourite/{id}", [ProjectController::class, 'removeFavourite']);
Route::get("/donate", [DonateController::class, 'donate']);
Route::get("/donationslist", [DonateController::class, 'donationsList']);
Route::get("/sendmail", [DonateController::class, 'index']);

Route::get("/gallery", [GeneralController::class, 'showGallery']);
Route::get("/aboutus", [GeneralController::class, 'showAboutUs']);
Route::get("/dailywork", [GeneralController::class, 'showDailyWork']);
Route::get("/hisabkitab", [GeneralController::class, 'showHisabKitab']);