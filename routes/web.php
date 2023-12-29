<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;
use App\Http\Controllers\Student\LessonController as StudentLessonController;
use App\Http\Controllers\Student\SubjectController as StudentSubjectController;
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
    return view('guest.index');
})->name('guest.home');
Route::get('/contact', function () {
    return view('guest.contact');
})->name('guest.contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/student-dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');
    Route::get('/student-subjects', [StudentSubjectController::class, 'index'])->name('student.subjects');
    Route::get('/student-subject/{id?}', [StudentLessonController::class, 'index'])->name('student.subject');
    Route::get('/lesson-content/{id?}', [StudentLessonController::class, 'content'])->name('lesson.content');
});

require __DIR__ . '/auth.php';
