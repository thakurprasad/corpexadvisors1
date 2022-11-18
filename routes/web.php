<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;

use App\Http\Controllers\TestContoller;
use App\Http\Controllers\CompanyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/elastic-search', function () {   
        $client = Elasticsearch\ClientBuilder::create()->build();
        var_dump($client);
});


Route::get('/cron-status', 
function(){
    return DB::select('SELECT registered_state as State, COUNT(1) Total_Records FROM `companies` GROUP BY registered_state  
ORDER BY `total_records` ASC');
});
Route::get('/data', [TestContoller::class, 'getCompanyData']);
Route::get('/companies', [CompanyController::class, 'index']);

#Route::get('/companies/create/{offset}', [CompanyController::class, 'create']);

Route::get('/companies/create_in_loop/{loop}', [CompanyController::class, 'create_in_loop']);
Route::get('/companies/create_in_loop', [CompanyController::class, 'create_in_loop']);
Route::get('/companies/total_record_update', [CompanyController::class, 'total_record_update']);

Route::get('/companies/show/', [CompanyController::class, 'show']);
//Route::get('companies', function () {  return view('companies/list'); });
Route::get('/test', function () {  return view('home-test'); });




Route::get('/1', function () {  return view('home-backup'); });
Route::get('/2', function () {  return view('home-backup2'); });
Route::get('/inner', function () {  return view('blank-inner-page'); });

Route::get('/', function () {  return view('home-backup3'); });

Route::get('about', function () {  return view('about'); });

Route::get('/contact-us', function () {  return view('contact-us'); });
Route::get('/sign-in', function () {  return view('sign-in'); });
Route::get('/sign-up', function () {  return view('sign-up'); });

Route::get('/affiliate', function () {  return view('affiliate'); });  

//Business//

Route::get('business_registrations',[ ServiceController::class, 'service'] ); 

Route::get('business-registrations', function () {  return view('business-registrations/business-registrations'); });

Route::get('business-registrations/private-limited-company-registration', function () {  return view('business-registrations/private-limited-company-registration'); });

Route::get('business-registrations/public-limited-company-registration', function () {  return view('business-registrations/public-limited-company-registration'); });

Route::get('business-registrations/one-person-company', function () {  return view('business-registrations/one-person-company'); });

Route::get('business-registrations/nidhi-company-registration', function () {  return view('business-registrations/nidhi-company-registration'); });

Route::get('business-registrations/producer-company-registration', function () {  return view('business-registrations/producer-company-registration'); });

Route::get('business-registrations/indian-subsidiary-company-registration', function () {  return view('business-registrations/indian-subsidiary-company-registration'); });


Route::get('business-registrations/limited-liability-partnership', function () {  return view('business-registrations/limited-liability-partnership'); });

Route::get('business-registrations/partnership-firm-registration', function () {  return view('business-registrations/partnership-firm-registration'); });

Route::get('business-registrations/sole-proprietorship-registration', function () {  return view('business-registrations/sole-proprietorship-registration'); });

//fssai-&-eating-license//
Route::get('fssai-eating-license/fssai-license', function () {  return view('fssai-eating-license/fssai-license'); });

Route::get('fssai-eating-license/fssai-state-license', function () {  return view('fssai-eating-license/fssai-state-license'); });

Route::get('fssai-eating-license/central-fssai-license', function () {  return view('fssai-eating-license/central-fssai-license'); });

Route::get('fssai-eating-license/fssai-annual-return', function () {  return view('fssai-eating-license/fssai-annual-return'); });

Route::get('fssai-eating-license/fssai-license-renewal', function () {  return view('fssai-eating-license/fssai-license-renewal'); });

Route::get('fssai-eating-license/eating-house-license', function () {  return view('fssai-eating-license/eating-house-license'); });

//government-licenses//
Route::get('government-licenses/psara-license', function () {  return view('government-licenses/psara-license'); });

Route::get('government-licenses/drug-license', function () {  return view('government-licenses/drug-license'); });

Route::get('government-licenses/ayush-license', function () {  return view('government-licenses/ayush-license'); });

Route::get('government-licenses/manufacturing-drug-license', function () {  return view('government-licenses/manufacturing-drug-license'); });

Route::get('government-licenses/retail-drug-license', function () {  return view('government-licenses/retail-drug-license'); });

Route::get('government-licenses/wholesale-drug-license', function () {  return view('government-licenses/wholesale-drug-license'); });

Route::get('government-licenses/trade-license', function () {  return view('government-licenses/trade-license'); });

Route::get('government-licenses/health-trade-license', function () {  return view('government-licenses/health-trade-license'); });

Route::get('government-licenses/iso-registration', function () {  return view('government-licenses/iso-registration'); });

//government-registration//

Route::get('government-registration/apeda-registration', function () {  return view('government-registration/apeda-registration'); });

Route::get('government-registration/rera-registration', function () {  return view('government-registration/rera-registration'); });

Route::get('government-registration/rera-registration-for-agents', function () {  return view('government-registration/rera-registration-for-agents'); });

Route::get('government-registration/rera-registration-for-promoters', function () {  return view('government-registration/rera-registration-for-promoters'); });

Route::get('government-registration/noc-pollution-control-board', function () {  return view('government-registration/noc-pollution-control-board'); });

Route::get('government-registration/fire-department-noc', function () {  return view('government-registration/fire-department-noc'); });

Route::get('government-registration/building-noc', function () {  return view('government-registration/building-noc'); });

Route::get('government-registration/delhi-pollution-control-committee', function () {  return view('government-registration/delhi-pollution-control-committee'); });

Route::get('government-registration/uttar-pradesh-pollution-control-board', function () {  return view('government-registration/uttar-pradesh-pollution-control-board'); });

//trademark-&-ngo//

Route::get('trademark-ipr/trademark-registration', function () {  return view('ipr/trademark-registration'); });

Route::get('trademark-ipr/trademark-classes-finder', function () {  return view('ipr/trademark-classes-finder'); });

Route::get('trademark-ipr/trademark-renewal', function () {  return view('ipr/trademark-renewal'); });

Route::get('trademark-ipr/trademark-search', function () {  return view('ipr/trademark-search'); });

Route::get('trademark-ipr/copyright-disclaimer', function () {  return view('ipr/copyright-disclaimer'); });

Route::get('trademark-ipr/trademark-objection', function () {  return view('ipr/trademark-objection'); });

Route::get('trademark-ipr/trademark-rectification', function () {  return view('ipr/trademark-rectification'); });


//ngo//
Route::get('trademark-ngo/ngo-registration', function () {  return view('ngo/ngo-registration'); });

Route::get('trademark-ngo/trust-registration', function () {  return view('ngo/trust-registration'); });

Route::get('trademark-ngo/society-registration', function () {  return view('ngo/society-registration'); });

Route::get('trademark-ngo/section-8-company-registration', function () {  return view('ngo/section-8-company-registration'); });

Route::get('trademark-ngo/fcra-registration', function () {  return view('ngo/fcra-registration'); });

Route::get('trademark-ngo/80g-and-12a-registration', function () {  return view('ngo/80g-and-12a-registration'); });

Route::get('trademark-ngo/12aa-registration', function () {  return view('ngo/12aa-registration'); });

//business-conversion//

Route::get('business-conversion/sole-proprietorship-to-pvt-ltd-company', function () {  return view('business-conversion/sole-proprietorship-to-pvt-ltd-company'); });

Route::get('business-conversion/conversion-of-pvt-ltd-to-public-limited', function () {  return view('business-conversion/conversion-of-pvt-ltd-to-public-limited'); });

Route::get('business-conversion/conversion-of-llp-to-private-company', function () {  return view('business-conversion/conversion-of-llp-to-private-company'); });

Route::get('business-conversionpartnership-firm-into-pvt-ltd-company/', function () {  return view('business-conversion/partnership-firm-into-pvt-ltd-company'); });


//business-closure//
Route::get('business-closure/winding-private-limited-company', function () {  return view('business-closure/winding-private-limited-company'); });

Route::get('business-closure/closing-a-limited-liability-partnership', function () {  return view('business-closure/closing-a-limited-liability-partnership'); });

Route::get('business-closure/revival-of-struck-off-companies', function () {  return view('business-closure/revival-of-struck-off-companies'); });

//secretarial-secretarial-events//

Route::get('secretarial-events/secretarial-secretarial-events', function () {  return view('secretarial-secretarial-events/secretarial-secretarial-events'); });

Route::get('secretarial-events/annual-compliance-of-a-pvt-ltd-company', function () {  return view('secretarial-secretarial-events/annual-compliance-of-a-pvt-ltd-company'); });



Route::get('secretarial-events/annual-filing-for-llp', function () {  return view('secretarial-secretarial-events/annual-filing-for-llp'); });

Route::get('secretarial-secretarial-events/nidhi-company-compliance', function () {  return view('secretarial-secretarial-events/nidhi-company-compliance'); });

Route::get('secretarial-events/section-8-company-compliance', function () {  return view('secretarial-secretarial-events/section-8-company-compliance'); });


Route::get('event-based-secretarial-events/event-based-compliances-in-a-company', function () {  return view('event-based-secretarial-events/event-based-compliances-in-a-company'); });

Route::get('event-based-secretarial-events/change-in-object-clause', function () {  return view('event-based-secretarial-events/change-in-object-clause'); });

Route::get('event-based-secretarial-events/appointment-and-resignation-of-directors', function () {  return view('event-based-secretarial-events/appointment-and-resignation-of-directors'); });

Route::get('event-based-secretarial-events/change-in-name-clause', function () {  return view('event-based-secretarial-events/change-in-name-clause'); });


Route::get('date', function () {  return date('d-m-Y H:i:s'); });




