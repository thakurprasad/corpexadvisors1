<?php 
use App\Http\Controllers\Customer\CustomerController;


Route::group(['middleware' => ['auth', 'customer']], function() {
    Route::prefix('customer')->name('customer.')->group(function(){

        Route::get('dashboard', function(){
            return view('customer.index');
        });

        Route::get('update-profile/{user_id}',[CustomerController::class, 'edit_profile']);
        Route::post('update-profile/{user_id}',[CustomerController::class, 'update_profile']); 
        Route::post('services',[ServiceController::class, 'update_profile']); 

 
	}); // end of prefix affiliate
}); // end of middleware affiliate