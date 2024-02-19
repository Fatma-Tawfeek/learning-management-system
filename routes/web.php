<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\Backend\CategoryController;

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

Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('frontend.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

/////// User Group Middleware
Route::group(
    [
        'middleware' => ['auth'],
        'prefix' => 'user',
        'as' => 'user.',
    ],
    function () {
        Route::get('/profile', [UserController::class, 'UserProfile'])->name('profile');
        Route::put('/profile/update', [UserController::class, 'UserProfileUpdate'])->name('profile.update');
        Route::get('/change-password', [UserController::class, 'UserChangePassword'])->name('change.password');
        Route::put('/password-update', [UserController::class, 'UserPasswordUpdate'])->name('password.update');
        Route::get('/logout', [UserController::class, 'UserLogout'])->name('logout');
    }
);

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

        // Category
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
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
