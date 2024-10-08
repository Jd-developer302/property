<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\Admin\AboutController;
use App\Http\Controllers\API\Admin\CountryController;
use App\Http\Controllers\API\Admin\CountryStateController;
use App\Http\Controllers\API\Admin\CityController;
use App\Http\Controllers\API\Admin\LocationController;
use App\Http\Controllers\API\Admin\CategoryController;
use App\Http\Controllers\API\Admin\ArticleController;
use App\Http\Controllers\API\FrontEnd\ContactController;
use App\Http\Controllers\API\FrontEnd\AboutController as FrontendAboutController;
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



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::prefix('admin')->group(function () {
    Route::resource('about', AboutController::class);
    Route::get('countries', [CountryController::class, 'index']);
    Route::post('countries', [CountryController::class, 'store']);
    Route::get('countries/{id}', [CountryController::class, 'edit']);
    Route::put('countries/{id}', [CountryController::class, 'update']);
    Route::delete('countries/{id}', [CountryController::class, 'destroy']);
    Route::resource('states', CountryStateController::class);
    Route::resource('cities', CityController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('articles', ArticleController::class);
});


Route::get('frontend/about', [FrontendAboutController::class, 'index']);
Route::post('/contact', [ContactController::class, 'submitContactForm']);