<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
 use App\Http\Controllers\UserController;
 use App\Http\Controllers\PostController;
 use App\Http\Controllers\UploadController;


 Route::get("/uploads",[UploadController::class, "index"])->name("uploads.index");
 Route::post("/store",[UploadController::class, "store"])->name("uploads.store");
 Route::get("/edit/{id}",[UploadController::class, "edit"])->name("uploads.edit");
 Route::put("/update/{id}",[UploadController::class, "update"])->name("uploads.update");

 Route::delete("/destroy/{id}",[UploadController::class, "destroy"])->name("uploads.destroy");


















































//  Route::get('show', [UserController::class, 'index'])->name('show');
//  Route::get('create', [UserController::class, 'create']);
//  Route::post('store', [UserController::class, 'store'])->name('store');
//  Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
//  Route::put('update/{id}', [UserController::class, 'update'])->name('update');
//  Route::delete('destroy/{id}', [UserController::class, 'destroy'])->name('destroy');











