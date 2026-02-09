<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MainController;


//Route::get('/', [MainController::class,'home']);
Route::get('/', [MainController::class,'home']);
Route::get('/about', [MainController::class,'about']);

Route::get('/review', [MainController::class,'review']);

Route::post('/review/check', [MainController::class,'review_check']);

Route::get('/test', [MyController::class,'test']);

///Route::get('/user/{id}/{name}', function ($id, $name) {
 //   return 'ID: '.$id.' name: '.$name;
//});
