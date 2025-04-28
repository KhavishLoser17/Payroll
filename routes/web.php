<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\CompetentController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\ReimbursementController;

// Route::get('/', function () {
//     return redirect()->route('login');
// })->name('home');

// Guest Routes
// Route::middleware('guest')->group(function () {
    // Login Routes
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login'); // Show Login Form
    Route::post('login', [AuthController::class, 'webLogin'])->name('web.auth.login'); // Process Login

    // Registration Routes
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register'); // Show Register Form
    Route::post('register', [AuthController::class, 'register'])->name('web.auth.register'); // Process Registration

    // Password Reset Routes
    Route::get('forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request'); // Show Forgot Password Form
    Route::post('forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email'); // Send Reset Link
    Route::get('reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset'); // Show Reset Password Form
    Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.update'); // Process Reset Password
// });

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'webLogout'])->name('logout');
});


// Route::middleware(['auth', 'role:Admin|Super-Admin|Manager|Logistic'])->group(function () {

 Route::get('/home', [HomeController::class, 'index'])->name('home');
 Route::get('/employee', [EmployeeController::class, 'employee'])->name('employee');
 Route::get('/attendance', [AttendanceController::class, 'attendance'])->name('attendance');
 Route::get('/salary', [SalaryController::class, 'salary'])->name('salary');
 Route::get('/tax', [TaxController::class, 'tax'])->name('tax');
 Route::get('/payroll', [PayrollController::class, 'payroll'])->name('payroll');
 Route::get('/disbursement', [ReimbursementController::class, 'disbursement'])->name('disbursement');
// });


Route::get('/hr1', [CompetentController::class, 'fetchCompetent'])->name('competent');
Route::get('/hr1-schedule', [ScheduleController::class, 'getSeminarSchedule'])->name('schedule');
Route::get('hr1-evaluation', [EvaluationController::class, 'showEvaluations'])->name('evaluation');




Route::get('/users', function () {
    return view('users.index');
});
// Route::middleware(['permission:view reports'])->group(function () {
//     Route::get('/reports', [ReportController::class, 'index']);
// });


Route::controller(UserManagementController::class)->group(function () {
    Route::get('users-profile', 'userProfilePage')->middleware('auth')->name('users-profile');
});
