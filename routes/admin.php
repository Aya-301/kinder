<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialsController;



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
});
?>