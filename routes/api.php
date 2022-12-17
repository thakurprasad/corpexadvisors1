<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CompanyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('api')->group(function () {   # root/api

    Route::group(['prefix' => 'v1'] , function () {   # root/api/v1/{url}
        
        Route::any('companies', [CompanyController::class, 'getCompanies']);
        Route::any('company', [CompanyController::class, 'getCompany']);
    
    });

});