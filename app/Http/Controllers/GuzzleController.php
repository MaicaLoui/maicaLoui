<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use function GuzzleHttp\Psr7\try_fopen;


class GuzzleController extends Controller
{

    public function intent(Request $request)
    {
        // Retrieve form values
        $hip = $request->input('hip');
        $waist = $request->input('waist');
        $hipHeight = $request->input('hipHeight');
        $skirtLength = $request->input('skirtLength');

        // $request->session()->put('formValues', [
        //     'hip' => $hip,
        //     'waist' => $waist,
        //     'hipHeight' => $hipHeight,
        //     'skirtLength' => $skirtLength,
        // ]);

        // Make GET request to external API
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:8080/skirtPattern?', [
            'query' => [
                'hip' => $hip,
                'waist' => $waist,
                'hipHeight' => $hipHeight,
                'skirtLength' => $skirtLength,
            ]
        ]);

        // Parse the response
        $skirtPattern = json_decode($response->getBody(), true);

        //$request->session()->put('formValues', $request->all());
        // Return the result view with the skirt pattern data
        return view('pages.skirt.skirtPatternBasic', [
            'skirtPattern' => $skirtPattern,

        ]);
    }

    public function intent2(Request $request)
    {
        //$formValues = json_decode($request->input('formValues'), true);

        if ($request->isMethod('get')) {
            $formValues = $request->session()->get('formValues');
        } else {
            $formValues = $request->input('formValues');
        }
        // Make GET request to external API
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:8080/skirtPattern?', [
            'query' => $formValues
        ]);

        // Parse the response
        $skirtPattern = json_decode($response->getBody(), true);

        // Return the result view with the skirt pattern data
        return view('pages.skirtPatternWaist', ['skirtPattern' => $skirtPattern]);
    }
}
