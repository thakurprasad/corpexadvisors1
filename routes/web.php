<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Redirect;


use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\TestContoller;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriptionController;


include __DIR__ . '/admin.php';
include __DIR__ . '/affiliate.php';
include __DIR__ . '/customer.php';
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

Auth::routes();
Route::get('/test', function () {  return view('home-test'); });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/startup-registration/{lavel_1}', [HomeController::class, 'startupRegistrationLabel1']);
Route::get('/startup-registration/{lavel_1}/{lavel_2}', [HomeController::class, 'startupRegistrationLabel2']);
Route::get('/startup-registration/{lavel_1}/{lavel_2}/view-more-details', [HomeController::class, 'startupRegistrationLabel3']);


Route::get('/elastic-search', function () {   
        $client = Elasticsearch\ClientBuilder::create()->build();
        var_dump($client);
});

Route::get('menu', function(){
    return json_encode(Helper::getAllMenuList());
});

Route::get('/data', [TestContoller::class, 'getCompanyData']);
Route::get('/companies', [CompanyController::class, 'index']);

Route::get('/companies/create_in_loop/{loop}', [CompanyController::class, 'create_in_loop']);
Route::get('/companies/create_in_loop', [CompanyController::class, 'create_in_loop']);
Route::get('/companies/total_record_update', [CompanyController::class, 'total_record_update']);
Route::get('/companies/show/', [CompanyController::class, 'show']);


Route::get('about', function () {  return view('about'); });

Route::get('/contact-us', [ContactController::class, 'index'] );
Route::post('/contact-us', [ContactController::class, 'store'] );
Route::post('/subscription', [SubscriptionController::class, 'store'] );

Route::get('/sign-in', function () {  return view('sign-in'); });
Route::get('/sign-up', function () {  return view('sign-up'); });

Route::get('/affiliate', function () {  return view('affiliate'); });  


Route::get('/1', function () {  return view('home-backup'); });
Route::get('/2', function () {  return view('home-backup2'); });



Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard',
                    function(){                        
                        if(\Auth::user()->user_type == 'admin'){
                            return Redirect::to('admin/dashboard');
                        }
                        if(\Auth::user()->user_type == 'affiliate'){
                            return Redirect::to('affiliate/dashboard');   
                        }
                        if(\Auth::user()->user_type == 'customer'){
                            return Redirect::to('customer/dashboard');
                        }
                        return Redirect::to('/');                        
                    }

            );


   
    Route::get('agents/add', [ AgentController::class, 'add']);
    Route::post('agents/add', [ AgentController::class, 'store']);

});

