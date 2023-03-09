<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ApprocheController;
use App\Http\Controllers\CarriereController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\VieController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\TermeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\NewsLetterController;

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

// les routes de chaques pages
Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/about',[AboutController::class,'index'])->name('about');

Route::get('/carriere',[CarriereController::class,'create'])->name('carriere.create');
Route::get('/job-detail/{id}',[CarriereController::class,'show'])->name('carriere.show');

Route::get('/candidature',[CarriereController::class,'create'])->name('candidature.create');
Route::post('/candidature-store',[CandidatureController::class,'store'])->name('candidature.store');

Route::get('/news',[NewsController::class,'create'])->name('news.create');
Route::get('/news/{id}',[NewsController::class,'show'])->name('news.show');

Route::get('/vie',[VieController::class,'index'])->name('vie');

Route::get('/approche',[ApprocheController::class,'index'])->name('approche');

Route::get('/expertise',[ExpertiseController::class,'create'])->name('expertise.create');
Route::get('/expertise/{id}',[ExpertiseController::class,'show'])->name('expertise.show');

Route::get('/realisation',[RealisationController::class,'create'])->name('realisation.create');
Route::get('/realisation-detail /{id}',[RealisationController::class,'show'])->name('realisation.show');

Route::get('/terme-condition',[TermeController::class,'index'])->name('terme-condition');



Route::get('/contact',[ContactController::class,'create'])->name('contact.create');
Route::post('/contact-store',[ContactController::class,'store'])->name('contact.store');

Route::post('/news-letter',[newsLetterController::class,'store'])->name('news-letter.store');
