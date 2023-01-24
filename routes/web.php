<?php

use Dcblogdev\MsGraph\Facades\MsGraph;
use Dcblogdev\MsGraph\Facades\MsGraphAdmin;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {

    $tenant = env('MSGRAPH_TENANT_ID');
//    $url = "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/token";

//    // application level login
//    $response = \Illuminate\Support\Facades\Http::asForm()->post($url, [
//        'client_id' => env('MSGRAPH_CLIENT_ID'),
//        'client_secret' => env('MSGRAPH_SECRET_ID'),
//        'scope' => 'https://graph.microsoft.com/.default',
//        'grant_type' => 'client_credentials',
//        ])->json();
//
//    cache()->set('azure_token', $response['access_token']);

    // return redirect('test');

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

Route::get('test', function () {

    $token = cache()->get('azure_token');

    $response = \Illuminate\Support\Facades\Http::withToken($token)
        ->get(env('MSGRAPH_ENDPOINT') . '/groups')->json();


    $group = collect($response['value'])->filter(fn($item) => $item['mail'] === 'caltest@stats4sd.org');

    $rmsId = $group->first()['id'];

    $calendar = \Illuminate\Support\Facades\Http::withToken($token)
        ->get(env('MSGRAPH_ENDPOINT') . '/groups/' . $rmsId . '/calendar')
        ->json();

    $events = \Illuminate\Support\Facades\Http::withToken($token)
        ->get(env('MSGRAPH_ENDPOINT') . '/groups/' . $rmsId . '/calendar/events')
    ->
    json();
    ddd($events['value']);
});
