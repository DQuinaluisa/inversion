<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PaymentController;
use App\Models\User;
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
});

Route::get('send', function () {

    $users = User::all();

    foreach ($users as $user) {
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];


    }
    Mail::to($user->email, $user->name)->send(new \App\Mail\MyTestMail($details));
    return view('message');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/message', [App\Http\Controllers\HomeController::class, 'index2'])->name('message');


Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index3'])->middleware('can:admin')->name('admin');

// Route::get('/users', [UserController::class, 'index' ])->name('admin');



Route::get('/paypal/pay', [PaymentController::class, 'payWithPayPal']);
Route::get('/paypal/status',  [PaymentController::class, 'payPalStatus']);

