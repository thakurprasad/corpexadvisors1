<?php 

use App\Http\Controllers\Affiliate\AffiliateController;

Route::group(['middleware' => ['auth', 'affiliate']], function() {
    
    Route::prefix('affiliate')->name('affiliate.')->group(function(){
        Route::get('dashboard',[AffiliateController::class, 'dashboard']);
        Route::get('update-profile/{user_id}',[AffiliateController::class, 'edit_profile']);
        Route::post('update-profile/{user_id}',[AffiliateController::class, 'update_profile']);
 
	}); // end of prefix affiliate
}); // end of middleware affiliate