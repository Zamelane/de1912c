<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/partner', [\App\Http\Controllers\PartnerController::class, 'index'])->name('partners.index');
