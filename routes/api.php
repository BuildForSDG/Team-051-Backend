<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    Log::critical('API base was accessed');
});

Route::resource('users', 'UserAPIController');

Route::resource('accidents', 'AccidentAPIController');

Route::resource('breakdowns', 'BreakdownAPIController');

Route::resource('countries', 'CountryAPIController');

Route::resource('failed-jobs', 'FailedJobAPIController');

Route::resource('user-settings', 'UserSettingAPIController');

Route::resource('user-notifications', 'UserNotificationAPIController');

Route::resource('hospital-notifications', 'HospitalNotificationAPIController');

Route::resource('police-station-notifications', 'PoliceStationNotificationAPIController');

Route::resource('tower-notifications', 'TowerNotificationAPIController');

Route::resource('states', 'StateAPIController');

Route::resource('lgas', 'LgaAPIController');

Route::resource('police-stations', 'PoliceStationAPIController');

Route::resource('safety-forces', 'SafetyForceAPIController');

Route::resource('hospitals', 'HospitalAPIController');

Route::resource('towers', 'TowerAPIController');

Route::resource('pickups', 'PickupAPIController');

Route::resource('phones', 'PhoneAPIController');

Route::resource('roads', 'RoadAPIController');

Route::resource('incidents', 'IncidentAPIController');

Route::resource('trips', 'TripAPIController');

//Route::resource('panics', 'panicAPIController');

Route::resource('robberies', 'RobberyAPIController');

Route::resource('kidnappings', 'KidnappingAPIController');

Route::resource('responses', 'ResponseAPIController');

Route::resource('hospital-responses', 'HospitalResponseAPIController');

Route::resource('police-responses', 'PoliceResponseAPIController');

Route::resource('tow-responses', 'TowResponseAPIController');

Route::resource('pickup-responses', 'PickupResponseAPIController');

Route::resource('road-safety-responses', 'RoadSafetyResponseAPIController');
