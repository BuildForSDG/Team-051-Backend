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


Route::resource('users', 'UserAPIController');

Route::resource('accidents', 'AccidentAPIController');

Route::resource('breakdowns', 'BreakdownAPIController');

Route::resource('countries', 'CountryAPIController');

Route::resource('failed_jobs', 'FailedJobAPIController');

Route::resource('user_settings', 'UserSettingAPIController');

Route::resource('user_notifications', 'UserNotificationAPIController');

Route::resource('hospital_notifications', 'HospitalNotificationAPIController');

Route::resource('police_station_notifications', 'PoliceStationNotificationAPIController');

Route::resource('tower_notifications', 'TowerNotificationAPIController');

Route::resource('states', 'StateAPIController');

Route::resource('lgas', 'LgaAPIController');

Route::resource('police_stations', 'PoliceStationAPIController');

Route::resource('safety_forces', 'SafetyForceAPIController');

Route::resource('hospitals', 'HospitalAPIController');

Route::resource('towers', 'TowerAPIController');

Route::resource('pickups', 'PickupAPIController');

Route::resource('phones', 'PhoneAPIController');

Route::resource('roads', 'RoadAPIController');

Route::resource('incidents', 'IncidentAPIController');

Route::resource('trips', 'TripAPIController');

Route::resource('panics', 'panicAPIController');

Route::resource('robberies', 'RobberyAPIController');

Route::resource('kidnappings', 'KidnappingAPIController');

Route::resource('responses', 'ResponseAPIController');

Route::resource('hospital_responses', 'HospitalResponseAPIController');

Route::resource('police_responses', 'PoliceResponseAPIController');

Route::resource('tow_responses', 'TowResponseAPIController');

Route::resource('pickup_responses', 'PickupResponseAPIController');

Route::resource('road_safety_responses', 'RoadSafetyResponseAPIController');