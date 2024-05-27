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
// Route::resource('contacts','ContactController');

use App\Http\Controllers\ContactController;

Route::resource('contacts', ContactController::class);
Route::get('/contacts/search', [ContactController::class, 'index'])->name('contacts.search');
