<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KindController;
use App\Http\Controllers\TeacherController;

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

// Route::get('index', function () {
//     return view('index');
// })->name('index');
Route::fallBack(function () {
    return view('404');
});
// Route::get('classes', function () {
//     return view('classes');
// })->name('classes');
// Route::get('about', function () {
//     return view('about');
// })->name('about');
// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');
// Route::get('facilities', function () {
//     return view('facilities');
// })->name('facilities');
// Route::get('teachers', function () {
//     return view('teachers');
// })->name('teachers');
// Route::get('testimonials', function () {
//     return view('testimonials');
// })->name('testimonials');
// Route::get('becomeAteacher', function () {
//     return view('becomeAteacher');
// })->name('becomeAteacher');
// Route::get('appointment', function () {
//     return view('appointment');
// })->name('appointment');

Route::get('/home1', [KindController::class, 'home'])->name('index');
Route::get('/teachers', [KindController::class, 'team'])->name('teachers');
Route::get('/about', [KindController::class, 'about'])->name('about');
Route::get('/facilities', [KindController::class, 'facilities'])->name('facilities');
Route::get('/testimonials', [KindController::class, 'testimonials'])->name('testimonials');
Route::get('/appointment', [KindController::class, 'appointment'])->name('appointment');
Route::get('/classes', [KindController::class, 'classes'])->name('classes');
Route::get('/becomeAteacher', [KindController::class, 'calltoaction'])->name('becomeAteacher');
Route::get('/contact', [KindController::class, 'contact'])->name('contact');
// Route::fallBack('404', [KindController::class, 'error']);
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
