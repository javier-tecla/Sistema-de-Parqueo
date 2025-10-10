<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index.home')->middleware('auth');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

// rutas para ajustes
Route::get('/admin/ajustes', [App\Http\Controllers\AjusteController::class, 'index'])->name('admin.ajustes.index')->middleware('auth');
Route::post('/admin/ajustes/create', [App\Http\Controllers\AjusteController::class, 'store'])->name('admin.ajustes.create')->middleware('auth');

// rutas para roles
Route::get('/admin/roles', [App\Http\Controllers\RolerController::class,'index'])->name('admin.roles.index')->middleware('auth');
Route::get('/admin/roles/create', [App\Http\Controllers\RolerController::class, 'create'])->name('admin.roles.create')->middleware('auth');
Route::post('/admin/roles/create', [App\Http\Controllers\RolerController::class, 'store'])->name('admin.roles.store')->middleware('auth');
Route::get('/admin/rol/{id}/edit', [App\Http\Controllers\RolerController::class, 'edit'])->name('admin.roles.edit')->middleware('auth');
Route::put('/admin/rol/{id}', [App\Http\Controllers\RolerController::class, 'update'])->name('admin.roles.update')->middleware('auth');
Route::delete('/admin/rol/{id}', [App\Http\Controllers\RolerController::class, 'destroy'])->name('admin.roles.destroy')->middleware('auth');




