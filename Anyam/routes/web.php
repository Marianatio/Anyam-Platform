<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

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


   Route::get('/firebase-config', [FirebaseController::class, 'getFirebaseConfig']);
    Route::get('/getdata', [FirebaseController::class, 'getdata']);
    Route::get('/postdata', [FirebaseController::class, 'postdata']);
    Route::get('/deletedata', [FirebaseController::class, 'deletedata']);
    Route::post('/firebase-config', [FirebaseController::class, 'setFirebaseConfig']);

