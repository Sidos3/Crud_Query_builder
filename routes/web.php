<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('article',CrudController::class);