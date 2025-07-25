<?php

use App\Http\Controllers\NoteControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WellcomeController;

Route::get('/', [WellcomeController::class, 'welcome'])->name('home');

Route::get('/note',[NoteControler::class,'index'])->name('note.index');
Route::get('/note/create',[NoteControler::class,'create'])->name('note.create');
Route::post('/note',[NoteControler::class,'store'])->name('note.store');
Route::get('/note/{id}',[NoteControler::class,'show'])->name('note.show');
Route::get('/note/{id}//edit',[NoteControler::class,'edit'])->name('note.edit');
Route::put('/note/{id}',[NoteControler::class,'update'])->name('note.update');
Route::delete('/note/{id}',[NoteControler::class,'create'])->name('note.destroy');


