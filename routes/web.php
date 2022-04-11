<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Maincontroller;
use Illuminate\Support\Facades\Auth;

/*
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

Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');

Route::group(['middleware'=>['Authcheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');

    Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
    Route::get('/admin/setting',[MainController::class,'setting']);
    Route::get('/admin/profile',[MainController::class,'profile']);
    Route::get('/admin/staff',[MainController::class,'staff']);
    Route::get('/admin/students',[MainController::class,'students']);
});

Route::resource("students", StudentController::class);


Route::get('/students', 'App\Http\Controllers\StudentController@students');
Route::post('/students', 'App\Http\Controllers\StudentController@UserForm');

Route::resource('/contact', ContactController::class);



Route::get('/students-list',[StudentController::class, 'index'])->name('students.list');
Route::post('/add-student',[StudentController::class,'addStudent'])->name('add.student');
Route::get('/getStudentsList',[StudentController::class, 'getStudentsList'])->name('get.students.list');
Route::post('/getStudentDetails',[StudentController::class, 'getStudentDetails'])->name('get.student.details');
Route::post('/updateStudentDetails',[StudentController::class, 'updateStudentDetails'])->name('update.student.details');
Route::post('/deleteStudent',[StudentController::class,'deleteStudent'])->name('delete.student');
Route::post('/deleteSelectedStudents',[StudentController::class,'deleteSelectedStudents'])->name('delete.selected.countStudent');

