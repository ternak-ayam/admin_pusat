<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jasaexova', [App\Http\Controllers\JasaController::class, 'index'])->name('jasa');
Route::get('/', [App\Http\Controllers\OrderController::class, 'index'])->name('order');
// Route::get('/user', 'WebRelasi@index');
// Route::get('/', [App\Http\Controllers\JasaController::class, 'jasa_orders']);

Route::get('/seler', [App\Http\Controllers\SelerController::class, 'seler'])->name('seler');
Route::get('/karyawan', [App\Http\Controllers\KaryawanController::class, 'karyawan'])->name('karyawan');


Route::get('modal-jasa/{id}', [App\Http\Controllers\JasaController::class, 'modals']);
Route::get('modal-inv/{id}', [App\Http\Controllers\JasaController::class, 'modals_inv']);

Route::get('/subscriptions', [App\Http\Controllers\SubsController::class, 'subscription']);
Route::get('/users', [App\Http\Controllers\UsersController::class, 'users']);

Route::post('/blogs/upload', [App\Http\Controllers\BlogController::class, 'update_blogs']);
Route::get('/blogs/update/{id}', [App\Http\Controllers\BlogController::class, 'upload_blogs']);
Route::get('/blogs/create', [App\Http\Controllers\BlogController::class, 'create_blogs']);
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'view_blogs']);
Route::get('/blogs/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete_blogs']);

Route::get('/employees', [App\Http\Controllers\EmployeesController::class, 'employees']);
Route::get('/add/employees', [App\Http\Controllers\EmployeesController::class, 'add_employees']);
Route::post('/add/employees/accept', [App\Http\Controllers\EmployeesController::class, 'accept_employees']);
Route::post('/add/employees/reject', [App\Http\Controllers\EmployeesController::class, 'reject_employees']);

Route::post('/apply', [App\Http\Controllers\EmployeesController::class, 'apply_jobs'])->name('apply');
Route::get('/register', function () {
    return view('auth.register');
});
