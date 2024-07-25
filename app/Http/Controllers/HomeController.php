<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected function randomPhrase()
    {
        $phrases = [
            'A dart should not exceed 3cm in size',
            'The seam should be pressed in the direction towards the waist.',

            // Add more phrases here
        ];

        return $phrases[array_rand($phrases)];
    }

    public function index()
    {
        $phrase = $this->randomPhrase();
        return view('pages.index', compact('phrase'));
    }
}
