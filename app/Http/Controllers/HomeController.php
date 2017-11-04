<?php

namespace App\Http\Controllers;

use App\Areas;
use App\inventories;
use App\inventory_item;
use App\item_type;
use App\Items;
use App\User;
use Illuminate\Http\Request;
use App\Location;
use App\Npcs;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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

    public function getInventory() {
        $inventory_id = Auth::user()->inventory_id;
        $inventory = inventories::with('inventoryCheck')->where('id', $inventory_id)->get();
        foreach ($inventory as $item) {
            if(empty($item->id)) {
                $Inventory = new inventories;
                $Inventory->capacity = 30;
                $Inventory->save();
                $user_inv = new User;
                $user_inv->inventory_id = $Inventory->id;
                $user_inv->save();
            } else{
                $userid = Auth::user()->inventory_id;
                $inventorySpace = inventories::with('getInventoryItems')->where('id', $userid)->get();
                return $inventorySpace;
            }
        }
    }

    public function open($id) {
        $area_name = Areas::with('Location')->get();
        $currenttime = Carbon::now()->timezone('America/Nassau');
        $time = $currenttime->hour > 6 && $currenttime->hour < 19;
        $inventory = json_decode($this->getInventory()[0]);
        $location = Location::findOrFail($id);
        if (!$location->exists()) {
            return view('error');
        } elseif($location->id == '' or $location->id == NULL or !$location->id){
            $location = Location::find(1);
            return view('home')->with('location', $location)->with('currenttime', $time)->with('areaname', $area_name)
                ->with('time', $currenttime)->with('inventory', $inventory);
        }
        else {
            return view('home')->with('location', $location)->with('currenttime', $time)->with('areaname', $area_name)
                ->with('time', $currenttime)->with('inventory', $inventory);
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

    public function items($id)
    {
        $item_id = item_type::findOrFail($id);
        if (!$item_id->exists()) {
            return view('error');
        } elseif ($item_id->id == '' or $item_id->id == NULL or !$item_id->id) {
            return abort(404);
        } else {
            $inventorySpace = $this->getInventory();
            $item_check = $item_id->id;
            foreach ($inventorySpace as $value) {
                $invcheck  = json_decode($value->getInventoryItems);
                if($invcheck  == '' || empty($invcheck)) {
                    $result = 'failure';
                } else {
                    foreach ($value->getInventoryItems as $val) {
                        if ($val['item_id'] == $item_check) {
                            $result = 'success';
                            break;
                        } else {
                            $result = 'failure';
                        }
                    }
                }
            }
            if($result == 'success') {
            } else {
                $inv_id = Auth::user()->inventory_id;
                $itemInventory = new inventory_item;
                $itemInventory->inventory_id = $inv_id;
                $itemInventory->item_id = $item_id->id;
                $itemInventory->save();
            }
        }
            return view('item')->with('iteminfo', $item_id);
    }

    public function monstertime($area_id) {
        var_dump('You`re on the monster page with area_id ' . $area_id . ' ');
    }

    public function shops($id) {
        var_dump('You`re on the shop page with shop_id ' . $id . ' ');
    }
}