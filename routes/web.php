<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SosHelp;
use App\Http\Middleware\isAdmin;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('about-us', function () {
    return view('about');
})->name("about-us");
Route::get('contact-us', function () {
    return view("contact");
})->name("contact-us");

Route::resource("contact",ContactController::class);

Route::match(["GET","POST"],"login",[AuthController::class,"login"])->name("login");
Route::match(["GET","POST"],"register",[AuthController::class,"register"])->name("register");

Route::get("logout",[AuthController::class,"logout"])->name("logout");

Route::match(["GET","POST"],"sos-help",[SosHelp::class,"index"])->name("sos-help");

Route::prefix("admin-user")->middleware([isAdmin::class])->group(function(){
    Route::get("/",[AdminController::class,"index"])->name("dashboard");
    Route::get("contacts",[AdminController::class,"contacts"])->name("contacts");
    Route::get("users",[AdminController::class,"users"])->name("users");
    Route::get("sos-alert-message",[AdminController::class,"sosAlertMessage"])->name("sos-alert-message");
    Route::get("sos-alert-message/read/{id?}",[AdminController::class,"sosAlertMessageRead"])->name("sos-alert-message-read");
    Route::get("sos-alert-message/unread/{id?}",[AdminController::class,"sosAlertMessageUnRead"])->name("sos-alert-message-unread");
});
