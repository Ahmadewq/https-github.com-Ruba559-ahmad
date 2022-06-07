<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('index');
});
// Route::get('/test', function () {
//     return view('admin.add_doctor');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::group([ 'middleware'=> 'auth:web'],function(){

Route::post('/add_appointement', [ClinicController::class, 'addAppointement']);
Route::get('/index_advice', [ClinicController::class, 'indexAdvice']);
Route::post('/add_advice', [ClinicController::class, 'addAdvice']);
Route::get('/logout',[ClinicController::class,'getLogout']);

});


Route::group([ 'middleware'=> 'auth:secretary'],function(){

Route::get('/appointement', [DoctorController::class, 'indexAppointement']);
Route::get('/visit', [DoctorController::class, 'indexVisit']);
Route::get('/advice_medical', [DoctorController::class, 'indexAdviceMedical']);

Route::post('/index_reply', [DoctorController::class, 'indexReply']);
Route::post('/reply_store', [DoctorController::class, 'Reply']);

});

Route::group([ 'middleware'=> 'auth:secretary'],function(){

Route::get('/index_admin', [AdminController::class, 'indexAdmin']);
Route::post('/add_accept', [AdminController::class, 'addAccept']);
Route::get('/index_add_doctor', [AdminController::class, 'indexAddDoctor']);
Route::post('/add_doctor', [AdminController::class, 'addDoctor']);

});