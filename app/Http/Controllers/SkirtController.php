<?php

namespace App\Http\Controllers;

use App\Models\Skirt;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkirtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create the skirt calc inputs (form)
        return view('pages.skirt.skirtCalc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return request()->all();
        // var_dump(request()->all());

        $attributes = request()->validate([
            'waist' => 'required',
            'hip' => 'required',
            'hip_height' => 'required',
            'skirt_length' => 'required'
        ]);

        Skirt::create($attributes);
        return redirect('/skirt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skirt  $skirt
     * @return \Illuminate\Http\Response
     */
    public function show(Skirt $skirt)
    {

        $skirts = Skirt::with('client')->get();

        // dd($skirts);
        $clients = Client::all();
        // return view('pages.skirtPattern', ['skirts' => $skirts]);
        return view('pages.skirt.skirtCalc', ['clients' => $clients], ['skirts' => $skirts]);
        // return $skirt;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skirt  $skirt
     * @return \Illuminate\Http\Response
     */
    public function edit(Skirt $skirt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skirt  $skirt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skirt $skirt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skirt  $skirt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skirt $skirt)
    {
        //
    }
}
