<?php

use Illuminate\Support\Facades\Route;
use Modules\Permission\App\Http\Controllers\Admin\RoleController;

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
Route::name('api')->prefix('admin')->middleware('auth:admin-api')->group(function() {
    Route::apiResource('roles',RoleController::class);
});




