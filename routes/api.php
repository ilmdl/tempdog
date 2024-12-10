<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\challangeController;
use App\Http\Controllers\compoundController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\medication_typeController;
use App\Http\Controllers\medicationController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\roomController;
use App\Http\Controllers\user_typeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::middleware(["auth:sanctum","abilities:ability1,register:user"])->group(function () {

    Route::resources([
        "brand" => brandController::class,
        "challange" => challangeController::class,
        "compound" => compoundController::class,
        "medtype" => medication_typeController::class,
        "role" => roleController::class,
        "staff" => roleController::class,
        "usertype" => user_typeController::class,
        "file" => fileController::class,
    ]);
// });

// Route::middleware(["auth:sanctum","abilities:browse"])->group(function () {
    Route::resources([
        "medication" => medicationController::class,
        "room" => roomController::class,
    ]);
// });

Route::post('registerstaff', [AuthController::class, 'registerStaff'])->middleware("auth:sanctum","ability:register:user");
Route::post('register', [AuthController::class, 'registerUser'])->middleware("auth:sanctum","ability:register:user");
Route::post('login', [AuthController::class, 'loginUser']);
Route::post('loginstaff', [AuthController::class, 'loginStaff']);
// Route::rec