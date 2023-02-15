<?php

namespace App\Services;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class MSGraphService
{

    public static function authorise(): RedirectResponse
    {
        $tenant = env('MSGRAPH_TENANT_ID');

        // User Login
        $url = "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/authorize";
        $client_id = env('MSGRAPH_CLIENT_ID');

        return redirect(
            "{$url}?client_id={$client_id}&scope="
            . urlencode('https://graph.microsoft.com/.default') .
            "&response_type=code&redirect_uri="
            . urlencode('https://rms.test/admin/redirect') .
            "&response_mode=query"
        );
    }

    public static function getToken(): string
    {
        $tenant = env('MSGRAPH_TENANT_ID');

        $url = "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/token";

        $response = \Illuminate\Support\Facades\Http::asForm()->post($url, [
            'client_id' => env('MSGRAPH_CLIENT_ID'),
            'client_secret' => env('MSGRAPH_CLIENT_SECRET'),
            'scope' => 'https://graph.microsoft.com/.default',
            'code' => request()->query('code'),
            'grant_type' => 'authorization_code',
            'redirect_uri' => url('admin/redirect'),
        ])->json();

        return $response['access_token'];

    }


}

