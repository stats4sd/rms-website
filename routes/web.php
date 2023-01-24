<?php

use App\Http\Controllers\EventController;
use Dcblogdev\MsGraph\Facades\MsGraph;
use Dcblogdev\MsGraph\Facades\MsGraphAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {

    $tenant = env('MSGRAPH_TENANT_ID');

    // User Login
    $url = "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/authorize";
    $client_id = env('MSGRAPH_CLIENT_ID');

    return redirect(
        "{$url}?client_id={$client_id}&scope="
        . urlencode('https://graph.microsoft.com/.default') .
        "&response_type=code&redirect_uri="
        . urlencode('https://rms.test/after_login') .
        "&response_mode=query"
    );


});

Route::get('after_login', function () {

    $tenant = env('MSGRAPH_TENANT_ID');

    $url = "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/token";

    $response = \Illuminate\Support\Facades\Http::asForm()->post($url, [
        'client_id' => env('MSGRAPH_CLIENT_ID'),
        'client_secret' => env('MSGRAPH_SECRET_ID'),
        'scope' => 'https://graph.microsoft.com/.default',
        'code' => request()->query('code'),
        'grant_type' => 'authorization_code',
        'redirect_uri' => url('after_login'),
    ])->json();

    cache()->set('azure_token', $response['access_token']);

    return redirect('test');
});

Route::get('events', [EventController::class, 'index']);
