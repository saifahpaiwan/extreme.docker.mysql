<?php

use App\Http\Controllers\ItemgameController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ItemgameController::class, 'index']);
Route::get('/randomitem', [ItemgameController::class, 'randomitem']);
 
