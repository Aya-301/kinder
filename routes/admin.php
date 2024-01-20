<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\TeacherController;

Route::prefix('admin')->group(function () {
    Route::get('addtest',[TestimonialsController::class,'create'])->name('addtest');
    Route::post('insert',[TestimonialsController::class,'store'])->name('insert');
    Route::get('adminTestimonials',[TestimonialsController::class,'index'])->name('adminTestimonials');
    Route::get('showTestimoninals/{id}',[TestimonialsController::class,'show'])->name('showTestimoninals');
    Route::get('editTestimoninals/{id}',[TestimonialsController::class,'edit'])->name('editTestimoninals');
    Route::put('updateTestimoninals/{id}',[TestimonialsController::class,'update'])->name('updateTestimoninals');
    Route::get('deleteTestimoninals/{id}',[TestimonialsController::class,'destroy']);
    Route::get('trashed',[TestimonialsController::class,'trashed'])->name('trashed');
    Route::get('forceDelete/{id}',[TestimonialsController::class,'forceDelete'])->name('forceDelete');
    Route::get('restoreTestimoninal/{id}',[TestimonialsController::class,'restore'])->name('restoreTestimoninal');   
   
    Route::get('adminApp',[AppointmentController::class,'index'])->name('adminApp');
    Route::get('addApp',[AppointmentController::class,'create'])->name('addApp');
    Route::post('insertApp',[AppointmentController::class,'store'])->name('insertApp');
    Route::get('editApp/{id}',[AppointmentController::class,'edit'])->name('editApp');
    Route::put('updateApp/{id}',[AppointmentController::class,'update'])->name('updateApp');
    Route::get('deleteApp/{id}',[AppointmentController::class,'destroy'])->name('deleteApp');

    Route::get('adminTeachers',[TeacherController::class,'index'])->name('adminTeachers');
    Route::get('addTeacher',[TeacherController::class,'create'])->name('addTeacher');
    Route::post('insertTeacher',[TeacherController::class,'store'])->name('insertTeacher');
    Route::get('showTeacher/{id}',[TeacherController::class,'show'])->name('showTeacher');
    Route::get('editTeacher/{id}',[TeacherController::class,'edit'])->name('editTeacher');
    Route::put('updateteacher/{id}',[TeacherController::class,'update'])->name('updateTeacher');
    Route::get('deleteTeacher/{id}',[TeacherController::class,'destroy']);
    Route::get('teacherTrashed',[TeacherController::class,'trashed'])->name('teacherTrashed');
    Route::get('forceDeleteTeacher/{id}',[TeacherController::class,'forceDelete'])->name('forceDeleteTeacher');
    Route::get('restoreTeacher/{id}',[TeacherController::class,'restore'])->name('restoreTeacher');
});
?>