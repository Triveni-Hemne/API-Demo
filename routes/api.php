<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DeviceController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('data',[DemoController::class,'getData']);
// Route::get('devices',[DeviceController::class,'list']);
// Route::get('devices/{slug}',[DeviceController::class,'listparams']);
Route::get('devices/{slug?}',[DeviceController::class,'list']);

// Api using post method
// the post method is used for sending data to database
// the get method is used for view the data from the database

Route::post('add',[DeviceController::class, 'add']);

// to update the data put method is used
Route::put('update',[DeviceController::class, 'update']);

// making route for search api
Route::get('search/{string}', [DeviceController::class, 'search']);

// this route for deleting the data 
Route::delete('delete/{id}',[DeviceController::class, 'delete']);