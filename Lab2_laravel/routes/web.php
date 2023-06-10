<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CV;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\WorkerController;


Route::get('/', function () {
    return 'welcome';
});
Route::get('/Molchanov/cv', [CV::class, 'resume']);

Route::get('/worker', [WorkerController::class, 'index']);
Route::get('/worker/create', [WorkerController::class, 'create']);
Route::get('/worker/edit', [WorkerController::class, 'edit']);
Route::get('/worker/show', [WorkerController::class, 'show']);
Route::get('/worker/store', [WorkerController::class, 'store']);
Route::get('/worker/update', [WorkerController::class, 'update']);
Route::get('/worker/delete', [WorkerController::class, 'delete']);

Route::get('/department', [DepartmentController::class, 'index']);
Route::get('/department/create', [DepartmentController::class, 'create']);
Route::get('/department/edit', [DepartmentController::class, 'edit']);
Route::get('/department/show', [DepartmentController::class, 'show']);
Route::get('/department/store', [DepartmentController::class, 'store']);
Route::get('/department/update', [DepartmentController::class, 'update']);
Route::get('/department/delete', [DepartmentController::class, 'delete']);


