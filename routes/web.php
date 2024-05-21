<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use Stichoza\GoogleTranslate\GoogleTranslate;

Route::get('/biodiversite', [IndexController::class, 'biodiversite']);
Route::get('/chefchaouen', [IndexController::class, 'chefchaouen']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/geologie', [IndexController::class, 'geologie']);
Route::get('/geositeChefchaouen', [IndexController::class, 'geositeChefchaouen']);
Route::get('/geosites', [IndexController::class, 'geosites']);
Route::get('/', [IndexController::class, 'index']);
Route::get('/maison', [IndexController::class, 'maison']);
Route::get('/maison-musee', [IndexController::class, 'maisonMusee']);
Route::get('/presentation', [IndexController::class, 'presentation']);
Route::get('/publication', [IndexController::class, 'publication']);
Route::get('/sport', [IndexController::class, 'sport']);

Route::get('/gallerie', [IndexController::class, 'gallerie']);
