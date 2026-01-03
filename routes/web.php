<?php

use App\Livewire\Auth\Login;
use App\Livewire\Public\Home;
use App\Livewire\Kiosk\Survey;
use App\Livewire\Auth\Register;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Employees;
use App\Livewire\Admin\Leaderboard;
use App\Livewire\Admin\EmployeesAdd;
use App\Livewire\Admin\EmployeesEdit;
use Illuminate\Support\Facades\Route;
use App\Livewire\Public\LeaderboardPublic;


// Auth Routes
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

// Public Routes
Route::get('/', Home::class)->name('home-public');
Route::get('/survey/{employee}', Survey::class)->name('survey.employee');
Route::get('/leaderboard/employees', LeaderboardPublic::class)->name('public.leaderboard');

// Admin Routes
Route::get('/dashboard', Dashboard::class)->name('admin.dashboard')->middleware('auth');
Route::get('/employees', Employees::class)->name('admin.employees')->middleware('auth');
Route::get('/employees/add', EmployeesAdd::class)->name('admin.employees.add')->middleware('auth');
Route::get('/employees/edit/{id}', EmployeesEdit::class)->name('admin.employees.edit')->middleware('auth');
Route::get('/leaderboard', Leaderboard::class)->name('admin.leaderboard')->middleware('auth');
