<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OAuthController extends Controller
{
    public function oauth(Request $request)
    {
        dd("ok");
        $http = new \GuzzleHttp\Client;

        $response = $http->post('http://127.0.0.1:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => 2,
                'client_secret' => 'nkPVrOIVEuvNbcah3Xs3vfIXYJze5ivpZzStZoRU',
                'username' => '1783555833@qq.com',
                'password' => '',
                'scope' => '',
            ],
        ]);

        return json_decode((string) $response->getBody(), true);
    }
}
