<?php

use App\Http\Controllers\CapacityBuildingController;
use App\Http\Controllers\EventController;
use Dcblogdev\MsGraph\Facades\MsGraph;
use Dcblogdev\MsGraph\Facades\MsGraphAdmin;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'set.locale',
], function () {
        Route::get('/', function () {
            return view('home');
        });

        Route::get('events', [EventController::class, 'index']);

        Route::get('capacity-building', [CapacityBuildingController::class, 'index']);
        Route::view('grantees', 'grantees');

});