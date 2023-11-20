<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [NoteController::class,'index'])->name('notes.index');
Route::get('/notes/create', [NoteController::class,'create'])->name('notes.create');
Route::post('/notes/store', [NoteController::class,'store'])->name('notes.store');
Route::get('/notes/{id}/edit', [NoteController::class,'edit'])->name('notes.edit');
Route::patch('/notes/{id}/update', [NoteController::class,'update'])->name('notes.update');
Route::get('/notes/{id}/delete', [NoteController::class,'destroy'])->name('notes.destroy');
