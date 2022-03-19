<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('student.')->group(function () {

    Route::get('students', [StudentsController::class, 'index'])->name('students');
    Route::get('add-student', [StudentsController::class, 'create'])->name('add');
    Route::post('add-student', [StudentsController::class, 'store'])->name('post');
    Route::get('edit-student/{id}', [StudentsController::class, 'edit'])->name('edit');
    Route::put('update-student/{id}', [StudentsController::class, 'update'])->name('update');
    Route::get('delete-student/{id}', [StudentsController::class, 'destory'])->name('delete');
});
