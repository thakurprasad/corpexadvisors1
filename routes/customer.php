<?php 



Route::group(['middleware' => ['auth', 'customer']], function() {
    Route::prefix('customer')->name('customer.')->group(function(){


        Route::get('dashboard', function(){
            return view('customer.index');
        });
 

 
	}); // end of prefix affiliate
}); // end of middleware affiliate