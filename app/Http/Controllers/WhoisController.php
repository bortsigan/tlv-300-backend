<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhoisController extends Controller
{
    /**
     * Retrieves WHOIS information for a given domain name.
     *
     * - Extracts the domain name from the incoming HTTP request.
     * - Constructs the WHOIS API request URL using the API key and the provided domain name.
     * - Sends a GET request to the WHOIS API service, requesting the data in JSON format and ignoring raw texts.
     * - Returns the JSON response from the WHOIS API.
     *
     * @param Request $request The incoming HTTP request containing the domain name.
     * @return \Illuminate\Http\JsonResponse The JSON response containing WHOIS information.
     */
    public function getWhois(Request $request)
    {
        $apiKey = env('WHOIS_API_KEY');
        $apiURL = env('WHOIS_API_URL');
        $domainName = $request->get('domainName');
        $requestURL = "{$apiURL}?apiKey={$apiKey}&domainName={$domainName}&outputFormat=JSON&ignoreRawTexts=1";
        $response = Http::get($requestURL);

        return response()->json($response->json());
    }
}
