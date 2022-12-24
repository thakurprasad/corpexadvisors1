<?php 

use App\Http\Controllers\Affiliate\AffiliateController;

Route::group(['middleware' => ['auth', 'affiliate']], function() {
    
    Route::prefix('affiliate')->name('affiliate.')->group(function(){
        Route::get('dashboard',[AffiliateController::class, 'dashboard']);
 
	}); // end of prefix affiliate
}); // end of middleware affiliate