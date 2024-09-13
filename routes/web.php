<?php

use App\Http\Controllers\CardCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CardCategoryController::class, 'index'])
    ->name('card_categories.index');

Route::get('/play/{cardCategory:slug}', [CardCategoryController::class, 'show'])
    ->name('card_categories.show');
