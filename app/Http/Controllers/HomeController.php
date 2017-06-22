<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = Location::find(1);
        return view('home')->with('location', $location);
    }

    public function open($id) {
        $location = Location::find($id);
        //dd($location->id);
        // TODO: what to do if the given location does not exist?
        if($location->id == '' or $location->id == NULL or !$location->id){
            $location = Location::find(1);
            return view('home')->with('location', $location);
        } else {
            return view('home')->with('location', $location);
        }
    }
}
