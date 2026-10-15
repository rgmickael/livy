<?php

use Illuminate\Support\Facades\Route;

Route::get('/counter', function () {
    return view('welcome');
})->name('counter');
Route::livewire('/calculator', 'pages::calculator')->name('calculator');
