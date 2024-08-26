<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhoisController extends Controller
{
    public function getWhois(Request $request)
    {
        $apiKey = env('WHOIS_API_KEY');
        $domainName = $request->get('domainName');
        $url = "https://www.whoisxmlapi.com/whoisserver/WhoisService?apiKey={$apiKey}&domainName={$domainName}&outputFormat=JSON&ignoreRawTexts=1";
        $response = Http::get($url);

        return response()->json($response->json());
    }
}
