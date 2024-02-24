<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use Illuminate\Routing\RouteRegistrar;

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
        // Profile
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
        // Profile
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

        // SubCategory
        Route::get('/subcategories', [SubCategoryController::class, 'index'])->name('subcategories.index');
        Route::get('/subcategories/create', [SubCategoryController::class, 'create'])->name('subcategories.create');
        Route::post('/subcategories/store', [SubCategoryController::class, 'store'])->name('subcategories.store');
        Route::get('/subcategories/{subcategory}/edit', [SubCategoryController::class, 'edit'])->name('subcategories.edit');
        Route::put('/subcategories/{subcategory}', [SubCategoryController::class, 'update'])->name('subcategories.update');
        Route::get('/subcategories/{subcategory}', [SubCategoryController::class, 'destroy'])->name('subcategories.destroy');

        // Instructors
        Route::get('/instructors', [AdminController::class, 'Instructors'])->name('instructors.index');
        Route::post('/update/user-status', [AdminController::class, 'UpdateUserStatus'])->name('update.user.status');
    }
);

Route::get('admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::get('become-instructor', [InstructorController::class, 'BecomeInstructor'])->name('become.instructor');
Route::post('instructor-register', [InstructorController::class, 'InstructorRegister'])->name('instructor.register');

/////// Instructor Group Middleware
Route::group(
    [
        'middleware' => ['auth', 'roles:instructor'],
        'prefix' => 'instructor',
        'as' => 'instructor.',
    ],
    function () {
        // Profile
        Route::get('/dashboard', [InstructorController::class, 'Instructordashboard'])->name('dashboard');
        Route::get('/profile', [InstructorController::class, 'InstructorProfile'])->name('profile');
        Route::put('/profile/update', [InstructorController::class, 'InstructorProfileUpdate'])->name('profile.update');
        Route::get('/change-password', [InstructorController::class, 'InstructorChangePassword'])->name('change.password');
        Route::put('/password-update', [InstructorController::class, 'InstructorPasswordUpdate'])->name('password.update');
        Route::get('/logout', [InstructorController::class, 'InstructorLogout'])->name('logout');

        // Courses
        Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
        Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
        Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');
        Route::get('/subcategory/ajax/{category_id}', [CourseController::class, 'GetSubCategory']);
    }
);

Route::get('instructor/login', [InstructorController::class, 'InstructorLogin'])->name('instructor.login');

require __DIR__ . '/auth.php';
