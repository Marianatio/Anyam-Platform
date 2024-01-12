<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;
use App\http\controllers\PelaporanController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/firebase-config', [FirebaseController::class, 'getFirebaseConfig']);
Route::get('/getdata', [FirebaseController::class, 'getdata']);
Route::get('/postdata', [FirebaseController::class, 'postdata']);
Route::get('/deletedata', [FirebaseController::class, 'deletedata']);
Route::post('/firebase-config', [FirebaseController::class, 'setFirebaseConfig']);

Route::get('/firebase-config', [FirebaseController::class, 'getFirebaseConfig']);
Route::get('/getdatapelaporan',[PelaporanController::class,'getdatapelaporan']);
Route::get('/postdatapelaporan',[PelaporanController::class,'postdatapelaporan']);

