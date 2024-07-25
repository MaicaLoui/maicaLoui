<?php

namespace App\Http\Controllers;

use App\Models\Bodice;
use App\Models\Client;
use App\Models\Skirt;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('pages.client.client', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.client.newClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




        $client = Client::create([
            'name' => $request->name,
            'gender' => $request->gender

        ]);

        // $skirt = Skirt::find($client_id);
        // if ($skirt->clients()->exists()) {
        // } else {
        // }


        $client->skirt()->create([
            'client_id' => $client->id,
            'waist' => $request->waist,
            'hip' => $request->hip,
            'hip_height' => $request->hip_height,
            'length' => $request->length
        ]);

        $client->bodice()->create([
            'client_id' => $client->id,
            'bust' => $request->bust,
            'back_length' => $request->back_length,
            'back_width' => $request->back_width,
            'shoulder' => $request->shoulder,
            'bodice_waist' => $request->bodice_waist,
            'bodice_hip' => $request->bodice_hip,
            'body_rise' => $request->body_rise,
            'bust_to_bust' => $request->bust_to_bust
        ]);


        $clients = Client::all();

        foreach ($clients as $client) {
            $waist = Skirt::where('client_id', $client->id)
                ->whereNotNull('waist')
                // ->whereNotNull('hip')
                ->first();

            $client->has_skirt = $waist ? 1 : 0;
            $client->save();
        }

        foreach ($clients as $client) {
            $waist = Bodice::where('client_id', $client->id)
                ->whereNotNull('bodice_waist')
                // ->whereNotNull('hip')
                ->first();

            $client->has_bodice = $waist ? 1 : 0;
            $client->save();
        }



        // $skirt->client()->create([

        // ]);

        // $guzzleClient = new GuzzleClient();
        // $response = $guzzleClient->post('http:/localhost:8080/skirts', [
        //     'json' => [
        //         'waist' => $request->input('waist'),
        //         'hip' => $request->input('hip'),
        //         'hip_height' => $request->input('hip_height'),
        //         'skirt_length' => $request->input('length'),
        //     ]
        // ]);



        return redirect('/client');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        //$clients = DB::table('clients')->get();
        // dd($clients);
        //return redirect('/skirt');
        //return view('pages.skirtCalc')->with('clients', $clients);
        return view('pages.client.clientShow', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
