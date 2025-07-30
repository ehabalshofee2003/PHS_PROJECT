<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\StockReportcontroller;
use App\Http\Controllers\SalesReportcontroller;


Route::post('/admin/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
            //LOGOUT
            Route::post('/logout', [AuthController::class, 'logout']);


 
});
