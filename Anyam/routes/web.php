<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\ModulKomikController;

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

 Route::get('/', function () {
     return view('index');
 });

   Route::get('/about', function () {
      return view('menu.about');
   });

   Route::get('/contact', function () {
      return view('menu.contact');
   });
   Route::get('/login', function () {
      return view('menu.login');
   });
   Route::get('/pricing', function () {
      return view('menu.pricing');
   });
   Route::get('/service', function () {
      return view('menu.service.service');
   });  
   
   Route::get('/feedback', function () {
      return view('menu.service.feedback');
   });

   Route::get('/detailservice', function(){
return view('menu.service.servicedetail');
   });
   Route::get('/firebase-config', [FirebaseController::class, 'getFirebaseConfig']);
    Route::get('/getdata', [FirebaseController::class, 'getdata']);
    Route::get('/postdata', [FirebaseController::class, 'postdata']);
    Route::get('/deletedata', [FirebaseController::class, 'deletedata']);
    Route::post('/firebase-config', [FirebaseController::class, 'setFirebaseConfig']);

Route::get('/getdatafasilitator', [FirebaseController::class, 'getdatafasilitator']);
Route::get('/postdatafasilitator', [FirebaseController::class, 'postdatafasilitator']);
Route::get('/deletedatafasilitator', [FirebaseController::class, 'deletedatafasilitator']);

Route::get('/getdatakomik',[ModulKomikController::class,'getdatamodulekomik']);
Route::get('/postdatakomik',[ModulKomikController::class,'postdatamodulekomik']);
Route::get('/deletedatakomik',[ModulKomikController::class,'deletedatamodulekomik']);

Route::get('/getdatalaporankekerasanseksual',[FirebaseController::class,'getdatalaporankekerasanseksual']);
Route::get('/postdatalaporankekerasanseksual',[FirebaseController::class,'postdatalaporankekerasanseksual']);
Route::get('/deletedatalaporankekerasanseksual',[FirebaseController::class,'deletedatalaporankekerasanseksual']);

