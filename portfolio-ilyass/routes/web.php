<?php

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
Route::get('/veille', function () {
    return view('veille');
})->name('veille');


use App\Mail\ContactPortfolio;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Mail::to('ilyassgourmat@gmail.com')->send(new ContactPortfolio($data));

    return back()->with('success', 'Message envoyé avec succès !');
})->name('contact.store');

Route::get('/mon-projet', function () {
    return view('projet-pro');
})->name('projet.pro');