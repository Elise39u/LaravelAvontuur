<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Npcs;
use Carbon\Carbon;

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
        $currenttime = Carbon::now()->timezone('America/Nassau');
        $time = $currenttime->hour > 6 && $currenttime->hour < 19;
        $location = Location::findOrFail($id);
        if (!$location->exists()) {
            return view('error');
        } elseif($location->id == '' or $location->id == NULL or !$location->id){
            $location = Location::find(1);
            return view('home')->with('location', $location)->with('currenttime', $time);
        }
        else {
            return view('home')->with('location', $location)->with('currenttime', $time);
        }
    }

    public function npc($id = null) {
        $npc_id = Npcs::findOrFail($id);
        if (!$npc_id->exists()) {
            return view('error');
        }  elseif($npc_id->id == '' or $npc_id->id === NULL or !$npc_id->id) {
            $npc_id = Npcs::find(1);
            return view('npc')->with('npcinfo', $npc_id);
        } else {
            return view('npc')->with('npcinfo', $npc_id);
        }
    }

    public function items($id){
        var_dump('You`re on the item page with item_id ' . $id . ' ');
    }

    public function monstertime($area_id) {
        var_dump('You`re on the monster page with area_id ' . $area_id . ' ');
    }

    public function shops($id) {
        var_dump('You`re on the shop page with shop_id ' . $id . ' ');
    }
}
