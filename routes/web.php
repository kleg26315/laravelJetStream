<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [TaskController::class, 'index']);

// tasks/create URL로 접근하는 GET 액션
Route::get('tasks/create', [TaskController::class, 'create']);
// task/ 로 접근하는 POST 액션
Route::get('tasks', [TaskController::class, 'store']);

Route::resource('tasks', TaskController::class);