<?php

namespace App\Http\Controllers;

use App\AreaMonsters;
use App\Areas;
use App\inventories;
use App\inventory_item;
use App\item_type;
use App\Items;
use App\monster_type;
use App\Quest;
use App\Monsters;
use App\PlayerQuest;
use App\shops;
use App\User;
use Illuminate\Http\Request;
use App\Location;
use App\Npcs;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    public function getInventory($inventory_id) {
        $inventory = inventories::with('inventoryCheck')->where('id', $inventory_id)->get();
        foreach ($inventory as $item) {
            if(empty($item->id)) {
                $Inventory = new inventories;
                $Inventory->capacity = 30;
                $Inventory->save();
                $user_inv = User::find(Auth::user()->id);
                $user_inv->inventory_id = $Inventory->id;
                $user_inv->save();
            } else{
                $userid = Auth::user()->inventory_id;
                $inventorySpace = inventories::with('getInventoryItems')->where('id', $userid)->get();
                return $inventorySpace;
            }
        }
    }

    public function checkInventory($item_id, $inventory_id) {
        if($inventory_id == NULL || !isset($inventory_id)) {
            $inventory_id = Auth::user()->inventory_id;
            $inventorySpace = $this->getInventory($inventory_id);
        } else {
            $inventorySpace = $this->getInventory($inventory_id);
        }
        if(is_int($item_id)) {
            $item_check = $item_id->id;
        } else {
            $item_check = $item_id;
        }
        foreach ($inventorySpace as $value) {
            $invcheck  = json_decode($value->getInventoryItems);
            if($invcheck  == '' || empty($invcheck)) {
                $result = 'failure';
            } else {
                foreach ($value->getInventoryItems as $val) {
                    $item = json_decode($val['item_id']);
                    if(is_int($item_check)) {
                        $item_checkInt = $item_check;
                    } elseif(is_string($item_check)) {
                        $item_checkInt = $item_check;
                    }
                    else {
                        $item_checkInt = $item_check->id;
                    }
                    if ($item == $item_checkInt) {
                        $result = 'success';
                        break;
                    } else {
                        $result = 'failure';
                    }
                }
            }
            return $result;
        }
    }

    public function open($id) {
        $area_name = Areas::with('Location')->get();
        $currenttime = Carbon::now()->timezone('America/Nassau');
        $time = $currenttime->hour > 6 && $currenttime->hour < 19;
        $inventory_id = Auth::user()->inventory_id;
        $inventory = json_decode($this->getInventory($inventory_id)[0]);
        $location = Location::findOrFail($id);
        $user = User::find(Auth::user()->id);
        if($user->curhp <= 0) {
            $user->attack = 50;
            $user->magical_attack = 10;
            $user->defense = 80;
            $user->gold = 250;
            $user->curhp = 200;
            $user->maxhp = 250;
            $user->current_exp = 0;
            $user->exp_needed_to_next_level = 250;
            $user->level = 1;
            $user->save();
        }
        if (!$location->exists()) {
            return view('error');
        } elseif($location->id == '' or $location->id == NULL or !$location->id){
            $location = Location::find(1);
            $user_currentLocation = User::find(Auth::user()->id);
            $user_currentLocation->current_location_id = $location->id;
            $user_currentLocation->save();
            return view('home')->with('location', $location)->with('currenttime', $time)->with('areaname', $area_name)
                ->with('time', $currenttime)->with('inventory', $inventory);
        }
        else {
            $user_currentLocation = User::find(Auth::user()->id);
            $user_currentLocation->current_location_id = $location->id;
            $user_currentLocation->save();
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
            $inventory_id = NULL;
            $result = $this->checkInventory($item_id, $inventory_id);
            if($result == 'success') {
                $rows = inventory_item::whereitem_id($item_id->id)->get();
                $rows[0]->quantity = $rows[0]->quantity + 1;
                $rows[0]->save();
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

    public function monstertime($area_id)
    {
        $user_currentLocation = User::find(Auth::user()->id);
        $user = json_decode(json_encode($user_currentLocation), true);
        Session::put('location_id', $user['current_location_id']);
        $area = Areas::findOrFail($area_id);
        $areainfo = json_decode(json_encode($area), true);
        Session::put('area_id', $areainfo['id']);
        if (!$area->exists()) {
            return view('error');
        } elseif ($area->id == '' or $area->id == NULL or !$area->id) {
            return abort(404, 'area not found');
        } else {
            $areamonsters = AreaMonsters::where('area_id', $area_id)
                ->inRandomOrder()->first();
            $Monstercheck = json_decode($areamonsters);
            if (empty($Monstercheck) || !isset($Monstercheck)) {
                return abort(404, 'No monster Has been found');
            } else {
                $id = $Monstercheck->monster_id;
                $monsterinfo = Monsters::with('getMonster')->where('id', $id)
                    ->get();
                if($monsterinfo[0]->inventory_id == NULL) {} else {
                    Session::put('monster_inventory', $monsterinfo[0]->inventory_id);
                }
                if (empty($monsterinfo) || !$monsterinfo) {
                    return abort(404, 'No info about the monster has been found');
                } else {
                    $user = Auth::user();
                    Session::put('monsterinfo', $monsterinfo);
                    return view('monster')->with('monsterinfo', $monsterinfo)->with('userinfo', $user);
                }
            }
        }
    }

    public function checkAttack()
    {
        $playerinfo = Auth::user();
        $player = json_decode(json_encode($playerinfo), true);
        $monsterinfo = Session::get('monsterinfo');
        $monster = json_decode(json_encode($monsterinfo[0]->getmonster), true);
        if(isset($_POST['attack'])) {
            $combat = array();
            $turns = 0;
            while ($player['curhp'] > 0 && $monster[0]['curhp'] > 0) {
                if ($turns % 2 != 0) {
                    $attacker = &$monster[0];
                    $defender = &$player;
                } else {
                    $attacker = &$player;
                    $defender = &$monster[0];
                }
                $damage = 0;
                if ($attacker['attack'] > $defender['defense']) {
                    $damage = $attacker['attack'] - $defender['defense'];
                }
                if ($attacker['attack'] < $defender['defense']) {
                    $damage = $attacker['attack'] = 15;
                }
                $defender['curhp'] -= $damage;
                $combat[$turns] = array(
                    'attacker' => $attacker['name'],
                    'defender' => $defender['name'],
                    'damage' => $damage
                );
                $turns++;
            }
            $user_curhp = User::find(Auth::user()->id);
            $user_curhp->curhp = $player['curhp'];
            $user_curhp->save();
            $area_id = Session::get('area_id');
            $monsters = $_POST['monster'];
            if($player['curhp'] > 0) {
                $won = 1;
                $random = rand(0, 100);
                $chance = $monster[0]['chance'];
                if ($chance > $random) {
                    $user_curhp = User::find(Auth::user()->id);
                    $user_curhp->curhp = $player['curhp'];
                    $user_curhp->current_exp = $player['current_exp'] + $monster[0]['xp'];
                    $user_curhp->gold = $player['gold'] + $monster[0]['gold'];
                    $user_curhp->save();
                    return redirect()->to('/location/15/' . $area_id)->with('won', $won)->with('combat', $combat)->with('monster', $monsters);
                } else {
                    $monster_inventory = Session::get('monster_inventory');
                    $inventory = inventories::with('getInventoryItems')->where('id', $monster_inventory)->get();
                    $items = json_decode(json_encode($inventory), true);
                    if(empty($items) || !isset($items)) {} else {
                        foreach ($items[0]['get_inventory_items'] as $info) {
                            $item_id = $info['item_id'];
                        }
                    }
                    if (isset($monster_inventory)) {
                        $result = $this->checkInventory($item_id, $monster_inventory);
                        if ($result == 'success') {
                            $rows = inventory_item::whereitem_id($item_id)->get();
                            $rows[0]->quantity = $rows[0]->quantity + 1;
                            $rows[0]->save();
                        } else {
                            $inv_id = Auth::user()->inventory_id;
                            $itemInventory = new inventory_item;
                            $itemInventory->inventory_id = $inv_id;
                            $itemInventory->item_id = $item_id;
                            $itemInventory->save();
                        }
                        $user_curhp = User::find(Auth::user()->id);
                        $user_curhp->curhp = $player['curhp'];
                        $user_curhp->current_exp = $player['current_exp'] + $monster[0]['xp'];
                        $user_curhp->gold = $player['gold'] + $monster[0]['gold'];
                        $user_curhp->save();
                        return redirect()->to('/location/15/' . $area_id)->with('won', $won)->with('combat', $combat)->with('monster', $monsters);
                    } else {
                        $user_curhp = User::find(Auth::user()->id);
                        $user_curhp->curhp = $player['curhp'];
                        $user_curhp->current_exp = $player['current_exp'] + $monster[0]['xp'];
                        $user_curhp->gold = $player['gold'] + $monster[0]['gold'];
                        $user_curhp->save();
                        return redirect()->to('/location/15/' . $area_id)->with('won', $won)->with('combat', $combat)->with('monster', $monsters);
                    }
                }
            }else {
                $lose = 1;
                return redirect()->to('/location/15/' . $area_id)->with('lose', $lose)->with('combat', $combat)->with('monster', $monsters);
            }
        } elseif(isset($_POST['taunt'])) {
            $area_id = Session::get('area_id');
            $chance = rand(0, 100);
            if($chance < 16) {
                $won = 1;
                $user_curhp = User::find(Auth::user()->id);
                $user_curhp->current_exp = $player['current_exp'] + $monster[0]['xp'];
                $user_curhp->gold  = $player['gold'] + $monster[0]['gold'];
                $user_curhp->save();
                return redirect()->to('/location/15/' . $area_id)->with('won', $won);
            } else {
                $backing = Session::get('location_id');
                redirect()->to('location/'. $backing)->send();
            }
        } elseif(isset($_POST['cry'])) {
            $area_id = Session::get('area_id');
            $chance = rand(0, 100);
            if($chance < 6) {
                $won = 1;
                $user_curhp = User::find(Auth::user()->id);
                $user_curhp->current_exp = $player['current_exp'] + $monster[0]['xp'];
                $gold = $monster[0]['gold'] * 2;
                $user_curhp->gold  = $player['gold'] + $gold;
                $user_curhp->save();
                return redirect()->to('/location/15/' . $area_id)->with('won', $won);
            } else {
                return redirect('/location/15/' . $area_id)->with('cry', 'cry action failed and lol that you did that');
            }
        } elseif(isset($_POST['run'])) {
            $backing = Session::get('location_id');
            redirect()->to('location/'. $backing)->send();
        }
    }

    public function shops($id) {
        $info = shops::findOrFail($id);
        Session::put('shop_id', $info->id);
        if(!$info->exists()) {
            return view('error');
        } elseif ($info->id == '' or $info->id === NULL or !$info->id) {
            return abort(404);
        } else {
            return view('shop')->with('shopinfo', $info);
        }
    }

    public function checkBuy()
    {
        $user_gold = User::find(Auth::user()->id);
        $gold = json_decode(json_encode($user_gold), true);
        $shopid = Session::get('shop_id');
        if (isset($_POST['buy'])) {
            if ($_POST['quantity'] == '' || empty($_POST['quantity']) || $_POST['quantity'] <= 0) {
                $item_id = $_POST['id'];
                $quantity = 1;
                $price = $_POST['price'];
            } else {
                $price = $_POST['price'];
                $item_id = $_POST['id'];
                $quantity = $_POST['quantity'];
            }
            $cost = $price * $quantity;
            if ($cost <= 0) {
                return redirect('/location/27/' . $shopid)->with('cost', 'Dont fill in a negative number');
            }
            $totalprice = $gold['gold'] - $cost;
            if ($totalprice < 0) {
                return redirect('/location/27/' . $shopid)->with('toomuch', 'You can not spend more gold than you have');
            } else {
                $inventory_id = NULL;
                $result = $this->checkInventory($item_id, $inventory_id);
                if ($result == 'success') {
                    $user_gold->gold = $totalprice;
                    $user_gold->save();
                    $inv_id = Auth::user()->inventory_id;
                    $itemInventory = inventory_item::where('inventory_id', $inv_id)->get();
                    $inventory = json_decode(json_encode($itemInventory), true);
                    foreach ($inventory as $info) {
                        if ($info['item_id'] == $item_id AND $info['quantity'] >= 1) {
                            $time = 'add';
                            break;
                        }else {
                            $time = 'false';
                        }
                    }
                        if($time == 'add') {
                            $rows = inventory_item::whereitem_id($item_id)->get();
                            $rows[0]->quantity = $rows[0]->quantity + $quantity;
                            $rows[0]->save();
                        } else {
                            $itemInventory = new inventory_item;
                            $itemInventory->inventory_id = $inv_id;
                            $itemInventory->item_id = $item_id;
                            $itemInventory->quantity = $quantity;
                            $itemInventory->save();
                        }
                    return redirect('/location/27/' . $shopid);
                } else {
                    $user_gold->gold = $totalprice;
                    $user_gold->save();
                    $inv_id = Auth::user()->inventory_id;
                    $itemInventory = new inventory_item;
                    $itemInventory->inventory_id = $inv_id;
                    $itemInventory->item_id = $item_id;
                    $itemInventory->save();
                    return redirect('/location/27/' . $shopid);
                }
            }
        }

        if(isset($_POST['healit'])) {
            if($_POST['heal'] == '' OR $_POST['heal'] == NULL OR $_POST['heal'] <= 0) {
                $healing = 1;
            } else {
                $healing = $_POST['heal'];
            }
            $cost = $healing;
            if($cost > $gold['gold']) {
                return redirect('/location/27/' . $shopid)->with('toomuch', 'You can not spend more gold than you have');
            } else {
                $health = $healing + $gold['curhp'];
                if($health > $gold['maxhp']) {
                    return redirect('/location/27/' . $shopid)->with('toomuch', 'You can heal more than you`re max hp');
                } else {
                    $goldprice = $gold['gold'] - $cost;
                    $user_gold->gold = $goldprice;
                    $user_gold->curhp = $health;
                    $user_gold->save();
                    return redirect('/location/27/' . $shopid);
                }
            }
         }
    }

    public function checkQuest()
    {
        $npc_id = $_GET['npc_id'];
        $status = 1;
        //$status = json_encode(Quest::with('checkQuest')->where('id', $npc_id)->get());
        if($status == '' or empty($status) or !$status) {
            $test = false;
        } else {
            $test = true;
        }
        echo json_encode(array("test"=>$npc_id, "status"=>$test));
    }

    public function activateQuest($npc_id, $quest_id)
    {

    }

    public function deactivateQuest($npc_id, $quest_id) {

    }
}