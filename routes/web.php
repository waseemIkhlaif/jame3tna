<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollageController;
use App\Http\Controllers\NessesaryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function(){return view('index');})->name('home');
Route::get('/about-us', function(){return view('aboutus');})->name('aboutus');
Route::get('/collages', [CollageController::class, 'collage'])->name('collages');
Route::get('/nessesary', [NessesaryController::class, 'nessesary'])->name('nessesary');
Route::get('/majors/{collage_id}', [MajorController::class, 'majors'])->name('major');
Route::get('/courses/{course_id}', [CourseController::class, 'courses'])->name('courses');
/*------------------Dashboard Route-----------------------------*/
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');});
    Route::middleware('auth')->group(function () {
        Route::get('/AdminDashboard', [AdminController::class, 'AdminDashboard'])->name('AdminDashboard');});
Route::post('/addcourse', [DashboardController::class, 'AddCourse'])->name('addcourse');
Route::post('/deletecourse', [DashboardController::class, 'DeleteCourse'])->name('deletecourse');
Route::post('/addfile', [DashboardController::class, 'Addfile'])->name('addfile');
Route::post('/deletefile', [DashboardController::class, 'DeleteFile'])->name('deletefile');
/*------------------Contact Route-----------------------------*/
Route::get('/contact-us', [ContactusController::class, 'contactus'])->name('contactus');
Route::post('/sendmail', [ContactusController::class, 'sendEmail'])->name('sendmail');
/*------------------Admin Dashboard Route-----------------------------*/
Route::post('/movetocourses/{id}', [AdminController::class, 'Accept']);
Route::post('/deleteorder/{id}', [AdminController::class, 'DeleteOrder']);
Route::post('/acceptfile/{id}', [AdminController::class, 'Acceptfile']);
Route::post('/deletefileorder/{id}', [AdminController::class, 'DeleteFileOrder']);
