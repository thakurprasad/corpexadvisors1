<?php 

use App\Http\Controllers\ServiceController;

Route::prefix('admin')->name('admin.')->group(function(){

Route::get('login', function(){
		return "Welcome to admin";
	});

	Route::get('services', [ServiceController::class, 'index']);
	Route::get('service/{col}/{id}', [ServiceController::class, 'edit']);
	Route::post('service/{col}/{id}', [ServiceController::class, 'update']);

});