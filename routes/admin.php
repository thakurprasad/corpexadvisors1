<?php 

use App\Http\Controllers\{
		ServiceController,
		CommandController 
	};

Route::get('admin/login', function(){
		return "Welcome to admin";
	});



Route::group(['middleware' => ['auth', 'admin']], function() {	
	Route::prefix('admin')->name('admin.')->group(function(){	

		Route::get('/', function(){
			return view('admin.index');
		});
		Route::get('/dashboard', function(){
			return view('admin.index');
		});

		Route::get('services', [ServiceController::class, 'index']);
		Route::get('service/{col}/{id}', [ServiceController::class, 'edit']);
		Route::post('service/{col}/{id}', [ServiceController::class, 'update']);

	    Route::get('backup/mysql/{_token}', [CommandController::class, 'show']);
	    //Route::get('artisan/{command}/{param}', [CommandController::class, 'show']);


	}); // end of prefix admin 
}); // end of middleware admin