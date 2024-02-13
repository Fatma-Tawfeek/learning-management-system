<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InstructorController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/////// Admin Group Middleware
Route::group(
    [
        'middleware' => ['auth', 'roles:admin'],
        'prefix' => 'admin',
        'as' => 'admin.',
    ],
    function () {
        Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('dashboard');
        Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('logout');
        Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('profile');
        Route::put('/profile/update', [AdminController::class, 'AdminProfileUpdate'])->name('profile.update');
        Route::get('/change-password', [AdminController::class, 'AdminChangePassword'])->name('change.password');
        Route::put('/password-update', [AdminController::class, 'AdminPasswordUpdate'])->name('password.update');
    }
);

Route::get('admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

/////// Instructor Group Middleware
Route::group(
    [
        'middleware' => ['auth', 'roles:instructor'],
        'prefix' => 'instructor',
        'as' => 'instructor.',
    ],
    function () {
        Route::get('/dashboard', [InstructorController::class, 'Instructordashboard'])->name('dashboard');
        Route::get('/profile', [InstructorController::class, 'InstructorProfile'])->name('profile');
        Route::put('/profile/update', [InstructorController::class, 'InstructorProfileUpdate'])->name('profile.update');
        Route::get('/change-password', [InstructorController::class, 'InstructorChangePassword'])->name('change.password');
        Route::put('/password-update', [InstructorController::class, 'InstructorPasswordUpdate'])->name('password.update');
        Route::get('/logout', [InstructorController::class, 'InstructorLogout'])->name('logout');
    }
);

Route::get('instructor/login', [InstructorController::class, 'InstructorLogin'])->name('instructor.login');

require __DIR__ . '/auth.php';
