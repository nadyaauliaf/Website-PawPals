<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gr1Controller;
use App\Http\Controllers\gr2Controller;
use App\Http\Controllers\gr3Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Vet1Controller;
use App\Http\Controllers\Vet2Controller;
use App\Http\Controllers\Vet3Controller;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingPH2Controller;
use App\Http\Controllers\BookingPH3Controller;

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
    return view('home');
});

// Route::get('/register', [SignUpController::class, 'show'])->name('SignUp.show');
// Route::post('/register', 'SignInController@register')->name('SignIn.perform');

        /**
         * Login Routes
         */
// Route::get('/login', [SignInController::class, 'show'])->name('SignIn.show');
// Route::post('/login', [SignInController::class, 'login'])->name('SignIn.perform');

    
// Route::group(['middleware' => ['auth']], function() {
// 	/**
// 	 * Logout Routes
// 	 */
// 	Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
// });
// Route::get('login', function () {
//     return view('home');
// });

Route::get('login', [SignUpController::class, 'login'])->name('PawPals.login');

Route::get('SignUp', function () {
    return view('signup');
});

Route::get('SignIn', function () {
    return view('welcome');
});

Route::resource('PawPals', SignUpController::class);

Route::resource('Booking', BookingController::class);

Route::resource('BookingPetHotel2', BookingPH2Controller::class);

Route::resource('BookingPetHotel3', BookingPH3Controller::class);

Route::resource('BookingGrooming1', gr1Controller::class);

Route::resource('BookingGrooming2', gr2Controller::class);

Route::resource('BookingGrooming3', gr3Controller::class);

Route::resource('VetAppointment1', Vet1Controller::class);

Route::resource('VetAppointment2', Vet2Controller::class);

Route::resource('VetAppointment3', Vet3Controller::class);

Route::get('addressBook', function () {
	return view('addressBook');
});

Route::get('orderHistory', function () {
	return view('orderHistory');
});

Route::get('store', function () {
	return view('store');
});

Route::get('product', function () {
	return view('product');
});

Route::get('petHotel', function () {
	return view('petHotel');
});

Route::get('petHotel/B-Pets Appointment', function () {
	return view('PHAppointment1');
});

Route::get('petHotel/Noel Pet Shop Appointment', function () {
	return view('PHAppointment2');
});

Route::get('petHotel/The Buntel Appointment', function () {
	return view('PHAppointment3');
});

Route::get('veterinary', function () {
	return view('veterinary');
});

Route::get('veterinary/vet1', function () {
	return view('VetAppointment1');
});

Route::get('veterinary/vet2', function () {
	return view('VetAppointment2');
});

Route::get('veterinary/vet3', function () {
	return view('VetAppointment3');
});

Route::get('grooming', function () {
	return view('grooming');
});

Route::get('grooming/Happy Pets Petshop & Grooming', function () {
	return view('grAppointment1');
});

Route::get('grooming/Pet Kingdom', function () {
	return view('grAppointment2');
});

Route::get('grooming/JakPetz', function () {
	return view('grAppointment3');
});

Route::get('Maps', function () {
	return view('maps');
});

Route::get('Article', function () {
	return view('article');
});

Route::get('profile', function () {
	return view('profile');
});

Route::get('profile/change password', function () {
	return view('changePass');
});

Route::get('MyCart', function () {
	return view('cart');
});

// Route::get('profile/PawPals/change password', [SignUpController::class, 'edit']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
