<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnswerController;
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

Route::get('/tes', function () {
    return "Tes aja ini";
});

Route::get('/tesAdha', function () {
    return "Tes Adha";
});
Route::get('/',[HomeController::class, 'home'])->name('web.halaman.index')->middleware('guest');;
Route::get('/contactus',[HomeController::class, 'contactus'])->name('web.halaman.contactus')->middleware('guest');;
Route::get('/team',[HomeController::class, 'team'])->name('web.halaman.team')->middleware('guest');;
//Route::get('/',[HomeController::class, 'home'])->middleware('guest');
Route::get('/register',[RegisterController::class, 'register'])->middleware('guest');;
//Route::post('/registerNonDokter',[RegisterController::class, 'store']);
Route::post('/register',[RegisterController::class, 'store']);
Route::get('/login',[LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/home',[HomeController::class, 'dashboard'])->middleware('auth');
Route::get('/session', function () {
    // Retrieve a piece of data from the session...
    $value = session('key');
});
Route::get('/profile',[ProfileController::class, 'index'])->middleware('auth');
Route::get('/profileUpdate',[ProfileController::class, 'edit'])->middleware('auth');
Route::post('/profileUpdate',[ProfileController::class, 'update']);
Route::post('/createProfile',[ProfileController::class, 'store']);
Route::resource('question', QuestionController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');

Route::get('/user/question',[QuestionController::class, 'indexCurrentUserQuestion'])->middleware('auth');
//Route::get('/question', [QuestionController::class, 'index']);

Route::post('/question/{id}', [AnswerController::class, 'store'])->middleware('auth');

Route::get('/user/answer',[AnswerController::class, 'indexCurrentUserAnswer'])->middleware('auth');
Route::delete('/answer/{id}', [AnswerController::class,'destroy'])->middleware('auth');
Route::get('/answer/{id}/edit', [AnswerController::class,'edit'])->middleware('auth');
Route::put('/answer/{id}', [AnswerController::class,'update'])->middleware('auth');
Route::put('/answer/{id}/like', [AnswerController::class,'updateLike'])->middleware('auth');