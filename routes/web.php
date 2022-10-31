<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/news', function(){
//     return view('newsletter');
// });
// Route::get('/about-us', function(){
//     return view('about');
// });
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/donate', [PageController::class, 'donate'])->name('donate');
Route::get('/newsletter', [PageController::class, 'newsletter'])->name('newsletter');
Route::get('/volunteer', [PageController::class, 'volunteer'])->name('volunteer');
Route::get('/material', [PageController::class, 'material'])->name('material');
Route::get('/account', [PageController::class, 'account'])->name('account');
Route::get('/partner', [PageController::class, 'partner'])->name('partner');
Route::get('/volunteerform', [PageController::class, 'volunteerform'])->name('volunteerform');
Route::get('/partnerwus', [PageController::class, 'partnerwus'])->name('partnerwus');
