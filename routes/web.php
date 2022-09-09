<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/admin/students');
});

Route::prefix('admin')->name('student.')->group(function () {

    Route::get('students', [StudentsController::class, 'index'])->name('students');
    Route::get('add-student', [StudentsController::class, 'create'])->name('add');
    Route::post('add-student', [StudentsController::class, 'store'])->name('post');
    Route::get('edit-student/{id}', [StudentsController::class, 'edit'])->name('edit');
    Route::put('update-student/{id}', [StudentsController::class, 'update'])->name('update');
    Route::get('delete-student/{id}', [StudentsController::class, 'destory'])->name('delete');
});

Route::get('posts', [ClientController::class, 'getAllPost'])->name('posts');
Route::get('post/{id}', [ClientController::class, 'getPostById'])->name('postId');
Route::get('add-post', [ClientController::class, 'addPost'])->name('add-post');
Route::get('update-post', [ClientController::class, 'updatePost'])->name('update-post');
Route::get('delete-post/{id}', [ClientController::class, 'deletePost'])->name('postId');
