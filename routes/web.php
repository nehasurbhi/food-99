<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


 Route::get('/home', [ContactController::class, 'showHomePage'])->name('home');
 Route::get('/about', [ContactController::class, 'showAboutPage'])->name('about');
 Route::get('/contact', [ContactController::class, 'showContactPage'])->name('contact');
 
// Route::get('/home', function () {
//     return view('app');
// });
// Route::get('/home', [ContactController::class, 'showHomePage']);
require __DIR__.'/auth.php';
