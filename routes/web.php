<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/site', [SiteController::class, 'index']);
Route::get('/sair', [SiteController::class, 'logout']);
Route::get('/images', [SiteController::class, 'images']);
Route::get('/usuarios/{qnt}', [SiteController::class, 'users']);

Route::prefix('/tasks')->group(function(){
    Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
    Route::post('/', [TasksController::class, 'store'])->name('tasks.store');
    Route::get('/create', [TasksController::class, 'create'])->name('tasks.create');
    Route::get('/{id}', [TasksController::class, 'show'])->name('tasks.show');
    Route::get('/{id}/edit', [TasksController::class, 'edit'])->name('tasks.edit');
    Route::put('/{id}', [TasksController::class, 'update'])->name('tasks.update');
    Route::delete('/{id}', [TasksController::class, 'destroy'])->name('tasks.destroy');

    Route::get('resolve/{id}', [TasksController::class, 'resolve'])->name('tasks.resolve');
});

Route::get('/', function(){
    return view('layouts.app');
});

Route::fallback(function(){
    return "Pagina não encontrada";
});

// Route::get('/', function () {

// });