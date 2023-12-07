<?php

use App\Http\Controllers\Admin\EventCrudController;
use App\Http\Controllers\Admin\EventResourceCrudController;
use App\Http\Controllers\Admin\EventTypeCrudController;
use App\Http\Controllers\Admin\FeaturedTroveCrudController;
use App\Http\Controllers\Admin\SupportRequestCrudController;
use App\Http\Controllers\Admin\TroveCrudController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventTypeController;
use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array)config('backpack.base.web_middleware', 'web'),
        (array)config('backpack.base.middleware_key', 'admin')
    ),
], function () { // custom admin routes
    Route::crud('event', EventCrudController::class);

    Route::get('authorise', [EventController::class, 'authorise']);
    Route::get('redirect', [EventController::class, 'updateAllFromApi']);

    Route::crud('trove', TroveCrudController::class);
    Route::crud('support-request', SupportRequestCrudController::class);
    Route::crud('event-type', EventTypeCrudController::class);
    Route::crud('event-resource', EventResourceCrudController::class);


    Route::get('event_types/{eventtype}/joining-instructions', [EventTypeController::class, 'getJoiningInstructions']);

});


// Override the login route. We now use the Filament login thanks to the quick-setup of the socialment package to allow login with Azure AD
Route::group([
    'namespace' => 'Backpack\CRUD\app\Http\Controllers',
    'middleware' => config('backpack.base.web_middleware', 'web'),
    'prefix' => config('backpack.base.route_prefix'),
], function () {
    Route::get('login', function() {
        return redirect ('/filament/login');
    })->name('backpack.auth.login');
});
