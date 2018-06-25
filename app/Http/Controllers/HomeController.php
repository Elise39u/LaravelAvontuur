<?php

namespace App\Http\Controllers;

use App\AreaMonsters;
use App\Areas;
use App\Dialog;
use App\inventories;
use App\inventory_item;
use App\item_type;
use App\Items;
use App\monster_type;
use App\player_parties;
use App\Quest;
use App\Monsters;
use App\Token;
use App\UserQuest;
use App\shops;
use App\User;
use App\Warehouse;
use Illuminate\Http\Request;
use App\Location;
use App\Npcs;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Party;

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
        $inventory_id = Auth::user()->inventory_id;
        $inventory = json_decode($this->getInventory($inventory_id)[0]);
        $location_id = Auth::user()->current_location_id;
        if ($location_id == Null || $location_id == 0 || $location_id == '0') {
            $location_id = 1;
            $location = Location::find($location_id);
        } else {
            $location = Location::find($location_id);
        }
        return view('home')->with('location', $location)->with('inventory', $inventory);
    }

    public function patchnotes() {
        return view('patchnotes');
    }

    public function getInventory($inventory_id)
    {
        $inventory = inventories::with('inventoryCheck')->where('id', $inventory_id)->get();
        foreach ($inventory as $item) {
            if (empty($item->id)) {
                $Inventory = new inventories;
                $Inventory->capacity = 30;
                $Inventory->save();
                $user_inv = User::find(Auth::user()->id);
                $user_inv->inventory_id = $Inventory->id;
                $user_inv->save();
            } else {
                $userid = Auth::user()->inventory_id;
                $inventorySpace = inventories::with('getInventoryItems')->where('id', $userid)->get();
                return $inventorySpace;
            }
        }
    }

    public function checkInventory($item_id, $inventory_id)
    {
        if ($inventory_id == NULL || !isset($inventory_id)) {
            $inventory_id = Auth::user()->inventory_id;
            $inventorySpace = $this->getInventory($inventory_id);
        } else {
            $inventorySpace = $this->getInventory($inventory_id);
        }
        if (is_int($item_id)) {
            $item_check = $item_id;
        } else {
            $item_check = $item_id;
        }
        foreach ($inventorySpace as $value) {
            $invcheck = json_decode($value->getInventoryItems);
            if ($invcheck == '' || empty($invcheck)) {
                $result = 'failure';
            } else {
                foreach ($value->getInventoryItems as $val) {
                    $item = json_decode($val['item_id']);
                    if (is_int($item_check)) {
                        $item_checkInt = $item_check;
                    } elseif (is_string($item_check)) {
                        $item_checkInt = $item_check;
                    } else {
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

    public function open($id)
    {
        $area_name = Areas::with('Location')->get();
        $currenttime = Carbon::now()->timezone('America/Nassau');
        $time = $currenttime->hour > 6 && $currenttime->hour < 19;
        $inventory_id = Auth::user()->inventory_id;
        $inventory = json_decode($this->getInventory($inventory_id)[0]);
        $location = Location::findOrFail($id);
        $user = User::find(Auth::user()->id);
        if ($user->curhp <= 0) {
            $user->attack = 50;
            $user->magical_attack = 10;
            $user->defense = 80;
            $user->gold = 250;
            $user->inbank = 1500;
            $user->curhp = 200;
            $user->maxhp = 250;
            $user->current_exp = 0;
            $user->exp_needed_to_next_level = 250;
            $user->level = 1;
            $user->save();
        }
        if (!$location->exists()) {
            return view('error');
        } elseif ($location->id == '' or $location->id == NULL or !$location->id) {
            $location = Location::find(1);
            $user_currentLocation = User::find(Auth::user()->id);
            $user_currentLocation->current_location_id = $location->id;
            $user_currentLocation->save();
            return view('home')->with('location', $location)->with('currenttime', $time)->with('areaname', $area_name)
                ->with('time', $currenttime)->with('inventory', $inventory);
        } else {
            $user_currentLocation = User::find(Auth::user()->id);
            $user_currentLocation->current_location_id = $location->id;
            $user_currentLocation->save();
            return view('home')->with('location', $location)->with('currenttime', $time)->with('areaname', $area_name)
                ->with('time', $currenttime)->with('inventory', $inventory);
        }
    }

    public function npc($id = null)
    {
        $npc_id = Npcs::findOrFail($id);
        $User = Auth::user();
        $Username = $User->name;
        if (!$npc_id->exists()) {
            return view('error');
        } elseif ($npc_id->id == '' or $npc_id->id === NULL or !$npc_id->id) {
            $npc_id = Npcs::find(1);
            return view('npc')->with('npcinfo', $npc_id)->with('Username', $Username);
        } else {
            return view('npc')->with('npcinfo', $npc_id)->with('Username', $Username);
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
            if ($result == 'success') {
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
                if ($monsterinfo[0]->inventory_id == NULL) {
                } else {
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
        Session::put('monster_gold', $monster[0]['gold']);
        Session::put('monster_xp', $monster[0]['xp']);
        if (isset($_POST['attack'])) {
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
            if ($player['curhp'] > 0) {
                $won = 1;
                $random = rand(0, 100);
                $chance = $monster[0]['chance'];
                $exp = $player['current_exp'] + $monster[0]['xp'];
                if($exp > $player['exp_needed_to_next_level']) {
                    $user_curhp = User::find(Auth::user()->id);
                    $user_curhp->curhp = $player['curhp'];
                    $user_curhp->current_exp = $exp;
                    $user_curhp->gold = $player['gold'] + $monster[0]['gold'];
                    $user_curhp->level = $user_curhp->level + 1;
                    $user_curhp->save();
                    $level_up = 1;
                    Session::flash('level', $level_up);
                    return redirect()->to('/location/15/' . $area_id)->with('won', $won)->with('combat', $combat)->with('monster', $monsters);
                }
                if ($chance <= $random) {
                    $user_curhp = User::find(Auth::user()->id);
                    $user_curhp->curhp = $player['curhp'];
                    $user_curhp->current_exp = $exp;
                    $user_curhp->gold = $player['gold'] + $monster[0]['gold'];
                    $user_curhp->save();
                    return redirect()->to('/location/15/' . $area_id)->with('won', $won)->with('combat', $combat)->with('monster', $monsters);
                } else {
                    $monster_inventory = Session::get('monster_inventory');
                    $inventory = inventories::with('getInventoryItems')->where('id', $monster_inventory)->get();
                    $items = json_decode(json_encode($inventory), true);
                    if (empty($items) || !isset($items)) {
                    } else {
                        foreach ($items[0]['get_inventory_items'] as $info) {
                            $item_id = $info['item_id'];
                        }
                    }
                    if (isset($monster_inventory)) {
                        $inventory_id = NULL;
                        $result = $this->checkInventory($item_id, $inventory_id);
                        if ($result == 'success') {
                            $inv_id = Auth::user()->inventory_id;
                            $itemInventory = inventory_item::where('inventory_id', $inv_id)->where('item_id', $item_id)->get();
                            $itemInventory[0]->quantity = $itemInventory[0]->quantity + 1;
                            $itemInventory[0]->save();
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
            } else {
                $lose = 1;
                return redirect()->to('/location/15/' . $area_id)->with('lose', $lose)->with('combat', $combat)->with('monster', $monsters);
            }
        } elseif (isset($_POST['taunt'])) {
            $monsters = $_POST['monster'];
            $area_id = Session::get('area_id');
            $chance = rand(0, 100);
            if ($chance < 16) {
                $won = 1;
                $user_curhp = User::find(Auth::user()->id);
                $exp =  $monster[0]['xp'] * 2;
                $user_curhp->current_exp = $player['current_exp'] + $exp;
                $user_curhp->gold = $player['gold'] + $monster[0]['gold'];
                $user_curhp->save();
                return redirect()->to('/location/15/' . $area_id)->with('won', $won)->with('monster', $monsters);
            } else {
                $backing = Session::get('location_id');
                redirect()->to('location/' . $backing)->send();
            }
        } elseif (isset($_POST['cry'])) {
            $monsters = $_POST['monster'];
            $area_id = Session::get('area_id');
            $chance = rand(0, 100);
            if ($chance < 6) {
                $won = 1;
                $user_curhp = User::find(Auth::user()->id);
                $user_curhp->current_exp = $player['current_exp'] + $monster[0]['xp'];
                $gold = $monster[0]['gold'] * 2;
                $user_curhp->gold = $player['gold'] + $gold;
                $user_curhp->save();
                return redirect()->to('/location/15/' . $area_id)->with('won', $won)->with('monster', $monsters);
            } else {
                return redirect('/location/15/' . $area_id)->with('cry', 'cry action failed and lol that you did that');
            }
        } elseif (isset($_POST['run'])) {
            $backing = Session::get('location_id');
            redirect()->to('location/' . $backing)->send();
        }
    }

    public function shops($id)
    {
        $inventory_id = Auth::user()->inventory_id;
        $inventory = json_decode($this->getInventory($inventory_id)[0]);
        $info = shops::findOrFail($id);
        Session::put('shop_id', $info->id);
        if (!$info->exists()) {
            return view('error');
        } elseif ($info->id == '' or $info->id === NULL or !$info->id) {
            return abort(404);
        } else {
            return view('shop')->with('shopinfo', $info)->with('inventory', $inventory);
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
                        } else {
                            $time = 'false';
                        }
                    }
                    if ($time == 'add') {
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
                    $itemInventory->quantity = $quantity;
                    $itemInventory->save();
                    return redirect('/location/27/' . $shopid);
                }
            }
        }

        if(isset($_POST['sell'])) {
            if ($_POST['Quantity'] == '' || empty($_POST['Quantity']) || $_POST['Quantity'] <= 0) {
                $item_id = $_POST['id'];
                $quantity = 1;
                $price = $_POST['price'];
            } else {
                $price = $_POST['price'];
                $item_id = $_POST['id'];
                $quantity = $_POST['Quantity'];
            }
            $cost = $price * $quantity;
            if ($cost <= 0) {
                return redirect('/location/27/' . $shopid)->with('cost', 'Dont fill in a negative number');
            }
            $totalprice = $gold['gold'] + $cost;
            if ($totalprice < 0) {
                return redirect('/location/27/' . $shopid)->with('toomuch', 'You can not spend more gold than you have');
            } else {
                $inventory_id = NULL;
                $result = $this->checkInventory($item_id, $inventory_id);
                if ($result == 'success') {
                        $user_gold->gold = $totalprice;
                        $user_gold->save();
                        $inventroy_id = Auth::user()->inventory_id;
                        $rows = inventory_item::whereitem_id($item_id)->where('inventory_id', $inventroy_id)->get();
                        if ($rows[0]->quantity == '1' || $rows[0]->quantity <= 0 || $rows[0]->quantity == $quantity) {
                            $rows[0]->delete();
                        } elseif ($quantity > $rows[0]->quantity) {
                            return redirect('/location/27/' . $shopid)->with('toomuch', 'You cant use more items than you have');
                        } else {
                            $rows[0]->quantity = $rows[0]->quantity - $quantity;
                            $rows[0]->save();
                        }
                    }
                }
            return redirect('/location/27/' . $shopid);
        }

        if (isset($_POST['healit'])) {
            $user_stat = Auth::user();
            $needed = $user_stat['maxhp'] - $user_stat['curhp'];
            if ($_POST['heal'] > $needed OR $_POST['heal'] == '' OR $_POST['heal'] == NULL) {
                $healing = $needed;
            }
            else {
                $healing = $_POST['heal'];
            }
            $cost = $healing;
            if ($cost > $gold['gold']) {
                return redirect('/location/27/' . $shopid)->with('toomuch', 'You can not spend more gold than you have');
            } else {
                $health = $healing + $gold['curhp'];
                if ($health > $gold['maxhp']) {
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

    public function weaponBuy() {
        $user_gold = User::find(Auth::user()->id);
        $gold = json_decode(json_encode($user_gold), true);
        $shopid = Session::get('shop_id');
        if (isset($_POST['buy'])) {
            $cost = $_POST['price'];
            $totalprice = $gold['gold'] - $cost;
            if ($totalprice < 0) {
                return redirect('/location/27/' . $shopid)->with('toomuch', 'You can not spend more gold than you have');
            }
            if($user_gold->primary_hand == ''){
                $user_gold->gold =  $totalprice;
                $user_gold->primary_hand = $_POST['id'];
                $user_gold->save();
            }
            elseif($user_gold->secondary_hand == '') {
                $user_gold->gold = $totalprice;
                $user_gold->secondary_hand = $_POST['id'];
                $user_gold->save();
            } else {
                return redirect('/location/27/' . $shopid)->with('Error', 'You have weapons in both hands sell one before buying');
            }
        } elseif (isset($_POST['sell'])) {
            $id = $_POST['id'];
            $item_info = item_type::where('id', $id)->get();
            $price = $item_info[0]->price;
            if(isset($_POST['phand'])) {
                $user_gold->gold = $user_gold->gold + $price;
                $user_gold->primary_hand = '';
                $user_gold->save();
            } elseif (isset($_POST['shand'])) {
                $user_gold->gold = $user_gold->gold + $price;
                $user_gold->secondary_hand = '';
                $user_gold->save();
            }
        } elseif(isset($_POST['weapon'])) {
            $temp = $user_gold->primary_hand;
            $user_gold->primary_hand = $user_gold->secondary_hand;
            $user_gold->secondary_hand = $temp;
            $user_gold->save();
        } elseif(isset($_POST['amount'])) {
            $amount = $_POST['amount'];
            $gold = $user_gold->gold;
            if($_POST['action'] == 'deposit') {
                if($amount > $user_gold->gold) {
                    return redirect('/location/27/' . $shopid)->with('toomuch', $amount. ' Is a bit more then ' . $user_gold->gold);
                }
                if($amount > $gold || $amount == '' || $amount == $gold) {
                    $amount = $gold;
                } else {
                    if($amount < 0) {
                        return redirect('/location/27/' . $shopid)->with('toomuch', 'Don`t fill in a negative number');
                    }
                }
                $user_gold->gold = $user_gold->gold - $amount;
                $user_gold->inbank = $user_gold->inbank + $amount;
                $user_gold->save();
            } else {
                if($amount > $user_gold->inbank) {
                    return redirect('/location/27/' . $shopid)->with('toomuch', $amount. ' Is a bit more then ' . $user_gold->inbank);
                }
                if($amount > $gold || $amount == '' || $amount == $gold) {
                    $amount = $gold;
                } else {
                    if($amount < 0) {
                        return redirect('/location/27/' . $shopid)->with('toomuch', 'Don`t fill in a negative number');
                    }
                }
                $user_gold->gold = $user_gold->gold + $amount;
                $user_gold->inbank = $user_gold->inbank - $amount;
                $user_gold->save();
            }
        }
        return redirect('/location/27/' . $shopid);
    }

    public function checkQuest()
    {
        $npc_id = $_GET['npc_id'];
        if (isset($_GET['Token'])) {
            $token = $_GET['Token'];
        } else {
            $token = NULL;
        }
        $user_id = Auth::user()->id;
        $status = json_encode(UserQuest::with('checkQuest')->where('npc_id', $npc_id)->where('player_id', $user_id)->get());
        if ($status == '[]') {
            echo json_encode(array("trick" => 'No quest detected', "Status" => "Unknown"));
        } else {
            $test = json_decode($status);
            if ($test[0]->status == 'unknown' && $token == 'Start Quest') {
                $user_status = UserQuest::wherenpc_id($npc_id)->whereplayer_id($user_id)->get();
                $quest_state = json_decode($user_status);
                $user_status[0]->status = 'Active';
                $user_status[0]->save();

                if ($test[0]->check_quest[0]->condition == "INSERT NPC INTO PARTY") {
                    $party_id = Party::where('player_id', Auth::user()->id)->get();
                    $user_party = player_parties::with("partyCheck")->where("party_id", $party_id[0]->id)->get();
                    $party_array = json_decode($user_party);
                    if ($party_array == '[]' || $party_array == []) {
                        $party = player_parties::whereparty_id($party_id)->get();
                        $data = [
                            "party_id" => $party_id[0]->id,
                            "npc_id" => $test[0]->check_quest[0]->condition_value
                        ];
                        player_parties::insert($data);
                    } else {
                        $party = player_parties::whereparty_id($party_id)->get();
                        $data = [
                            "npc_id" => $test[0]->check_quest[0]->condition_value
                        ];
                        player_parties::insert($data);
                    }

                    echo json_encode(array("trick" => 'Quest ' . $test[0]->check_quest[0]->name . ' Activated', "Status" => "Activated"));
                } elseif ($test[0]->status == 'unknown') {
                    echo json_encode(array("trick" => 'Quest discovered ' . $test[0]->check_quest[0]->name, 'Status' => 'Unknown'));
                } elseif ($test[0]->status == 'Active') {
                    $quest_id = UserQuest::wherenpc_id($npc_id)->where('player_id', $user_id)->get();
                    $quest_check = $this->updateQuest($npc_id, $quest_id[0]->id);
                    if ($quest_check == true) {
                        $user_status = UserQuest::wherenpc_id($npc_id)->whereplayer_id($user_id)->get();
                        $quest_item = Quest::where("id", $quest_id[0]->id)->get();
                        if ($quest_item[0]->item_reward == null) {
                        } else {
                            $item_id = $quest_item[0]->item_reward;
                            $inventory_id = Auth::user()->inventory_id;
                            $itemInventory = new inventory_item;
                            $itemInventory->inventory_id = $inventory_id;
                            $itemInventory->item_id = $item_id;
                            $itemInventory->save();
                        }
                        $user_status[0]->status = 'Completed';
                        $user_stat = User::find(Auth::user()->id);
                        $user_stat->gold = $user_stat->gold + $quest_item[0]->gold;
                        $user_stat->current_exp = $user_stat->current_exp + $quest_item[0]->experience;
                        $user_status[0]->save();
                        $user_stat->save();
                        echo json_encode(array("trick" => "You completed it", "Status" => "Completed"));
                    } else {
                        echo json_encode(array("trick" => "Still need to complete it", "Status" => "Active"));
                    }
                } elseif ($test[0]->status == 'Completed') {
                    echo json_encode(array("trick" => "You already completed " . $test[0]->check_quest[0]->name, "Status" => "Completed"));
                } else {
                    echo json_encode(array("trick" => 'Quest is already active', "Status" => "Active"));
                }
            }
        }
    }

    public function updateQuest($npc_id, $quest_id)
    {
        //echo json_encode(array("Npc" => $npc_id, 'Quest' => $quest_id));
        switch ($quest_id) {
            case $quest_id == 1;
                $inventory_id = NULL;
                $item_id = 11;
                $result = $this->checkInventory($item_id, $inventory_id);
                if ($result == 'success') {
                    $rows = inventory_item::whereitem_id($item_id)->get();
                    if ($rows[0]->quantity == '1' || $rows[0]->quantity <= 1) {
                        $rows[0]->delete();
                    } else {
                        $rows[0]->quantity = $rows[0]->quantity - 1;
                        $rows[0]->save();
                    }
                    return true;
                } else {
                   return false;
                }
                break;
            case $quest_id == 2;
                echo json_encode('Bring me to the docks');
                break;
            default;
                echo json_encode('Error encountered');
        }
    }

    public function warehouses($warehouse_id)
    {
        $user_currentLocation = User::find(Auth::user()->id);
        $user = json_decode(json_encode($user_currentLocation), true);
        Session::put('last_known_location', $user['current_location_id']);
        $warehouse_info = Warehouse::findOrFail($warehouse_id);
        Session::put('warehouse_id', $warehouse_info->id);
        $inventory_id = Auth::user()->inventory_id;
        $user_inv = json_decode($this->getInventory($inventory_id[0]));
        if (empty($warehouse_info) || $warehouse_info == NULL) {
            return abort(404, 'warehouse not found');
        } else {
            return view('warehouse')->with('warehouse', $warehouse_info)->with('items', $user_inv[0]->get_inventory_items);
        }
    }

    public function checkUse()
    {
        $warehouse_id = Session::get('warehouse_id');
        if (isset($_POST['submit'])) {
            $item_id = $_POST['id'];
            $quantity = $_POST['quantity'];
            if ($quantity == '' || $quantity <= 0) {
                $quantity = '1';
            }
            $storage = [];
            $inventroy_id = Auth::user()->inventory_id;
            $test = $this->getInventory($inventroy_id);
            $inv_info = json_decode(json_encode($test[0]), true);
            foreach ($inv_info['get_inventory_items'] as $item) {
                if ($item['item_id'] === $item_id) {
                    array_push($storage, $item);
                }
            }
            if ($quantity > $storage[0]['quantity']) {
                return redirect('/location/46/' . $warehouse_id)->with('toomuch', 'Quantity is less than the number that has been filled in');
            }
            $category_item = item_type::where('id', $item_id)->get();
            if ($category_item[0]->shop_category == 'potion') {
                $item_name = $category_item[0]->name;
                $potion = $this->usePotion($item_name, $quantity);
                $test = $this->checkInventory($item_id, $inventroy_id);
                if ($test == 'success') {
                    $rows = inventory_item::whereitem_id($item_id)->where('inventory_id', $inventroy_id)->get();
                    if($rows[0]->quantity == '1'){
                        $rows[0]->delete();
                    }
                    elseif ($quantity == $rows[0]->quantity) {
                        $rows[0]->delete();
                    }
                    elseif($quantity > $rows[0]->quantity) {
                        return redirect('/location/46/' . $warehouse_id)->with('toomuch', 'You cant use more items than you have');
                    } else {
                        $rows[0]->quantity = $rows[0]->quantity - $quantity;
                        $rows[0]->save();
                    }
                }
                return redirect('/location/46/' . $warehouse_id)->with('gold', 'Stat has ben influenced ' . $potion);
            } else {
                $gold = $this->useItem($quantity);
                $test = $this->checkInventory($item_id, $inventroy_id);
                if ($test == 'success') {
                    $rows = inventory_item::whereitem_id($item_id)->where('inventory_id', $inventroy_id)->get();
                    if ($rows[0]->quantity == '1') {
                        $rows[0]->delete();
                    } elseif ($quantity == $rows[0]->quantity) {
                        $rows[0]->delete();
                    } elseif ($quantity > $rows[0]->quantity) {
                        return redirect('/location/46/' . $warehouse_id)->with('toomuch', 'You cant use more items than you have');
                    }
                    else {
                        $rows[0]->quantity = $rows[0]->quantity - $quantity;
                        $rows[0]->save();
                    }
                }
                return redirect('/location/46/' . $warehouse_id)->with('gold', 'Gold has been added amount ' . $gold);
            }
        }
    }

    public function usePotion($item_name, $quantity) {
        $tokenArray = ['Black_Potion' => 'Black Potion', 'Green_Potion' => 'Green potion', 'Red_Potion' => 'Red potion', 'L_Red_Potion' => 'Light Red Potion', 'D_Red_Potion' => 'Maroon potion',
            'L_Green_Potion' => 'Light Green potion', 'D_Green_Potion' => 'Dark Green potion', 'Aqua_Potion' => 'Aqua potion', 'L_Aqua_Potion' => 'Light Aqua Potion', 'D_Aqua_Potion' => 'Dark Aqua potion',
            'Orange_Potion' => 'Orange potion', 'L_Orange_Potion' => 'Light Orange Potion', 'D_Orange_Potion' => 'Dark Orange Potion', 'Yellow_Potion' => 'Yellow Potion', 'Rainbow_Potion' => 'Rainbow potion',
            'Purple_Potion' => 'Purple potion', 'L_Purple_Potion' => 'Light Purple potion', 'D_Purple_Potion' => 'Dark Purple potion', 'Pink_Potion' => 'Pink potion', 'D_Pink_Potion' => 'Dark Pink potion',
            'L_Pink_Potion' => 'Light Pink potion', 'L_Yellow_Potion' => 'Light Yellow potion', 'D_Yellow_Potion' => 'Dark Yellow potion', 'Secret_Potion' => 'Secret Potion'];
        $check = array_search($item_name, $tokenArray);
        $Tokeninfo = Token::where('name', $check)->get();
        $effect = $Tokeninfo[0]->effect;
        $stat = $Tokeninfo[0]->stat_influence;
        if(strpos($effect, '+') !== false) {
            $multi_effect = $effect * $quantity;
            $new_effect = str_replace('+' , '', $multi_effect);
            $user_stat = User::find(Auth::user()->id);
            $user_stat->$stat = $user_stat->$stat + $new_effect;
            $user_stat->save();
        } elseif(strpos($effect, '-') !== false ) {
            $multi_effect = $effect * $quantity;
            $new_effect = str_replace('-' , '', $multi_effect);
            $user_stat = User::find(Auth::user()->id);
            $user_stat->$stat = $user_stat->$stat - $new_effect;
            $user_stat->save();
        } elseif(strpos($effect, '/') !== false) {
            $new_effect = str_replace('/' , '', $effect);
            $update = $new_effect * $quantity;
            $user_stat = User::find(Auth::user()->id);
            $user_stat->$stat = $user_stat->$stat / $update;
            $user_stat->save();
        } elseif(strpos($effect, '*') !== false) {
            $new_effect = str_replace('*' , '', $effect);
            $multi_effect = $new_effect * $quantity;
            $user_stat = User::find(Auth::user()->id);
            $user_stat->$stat = $user_stat->$stat * $multi_effect;
            $user_stat->save();
        } else {
            switch ($check) {
                case 'Black_Potion';
                    $user = User::find(Auth::user()->id);
                    $user->attack = 50;
                    $user->magical_attack = 10;
                    $user->defense = 80;
                    $user->gold = 250;
                    $user->inbank = 1500;
                    $user->curhp = 200;
                    $user->maxhp = 250;
                    $user->current_exp = 0;
                    $user->exp_needed_to_next_level = 250;
                    $user->level = 1;
                    $user->save();
                    break;
                 case 'L_Green_Potion';
                    $user_stat = User::find(Auth::user()->id);
                    $user_stat->curhp = $user_stat->curhp = 1;
                    $user_stat->save();
                    break;
                case 'Green_Potion';
                    $user_stat = User::find(Auth::user()->id);
                    $user_stat->curhp = $user_stat->curhp = 200;
                    $user_stat->save();
                    break;
                case 'D_Green_Potion';
                    $user_stat = User::find(Auth::user()->id);
                    $user_stat->curhp = $user_stat->curhp = $user_stat->maxhp;
                    $user_stat->save();
                    break;
                case 'Rainbow_Potion';
                    $attack_effect = 100 * $quantity;
                    $defense_effect = 75 * $quantity;
                    $mag_attack_effect = 25 * $quantity;
                    $gold_effect = 500 * $quantity;
                    $curhp_effect = 100 * $quantity;
                    $maxhp_effect = 150 * $quantity;

                    $user = User::find(Auth::user()->id);
                    $user->attack = $user->attack + $attack_effect;
                    $user->magical_attack = $user->magical_attack + $mag_attack_effect;
                    $user->defense = $user->defense + $defense_effect;
                    $user->gold = $user->gold + $gold_effect;
                    $user->inbank = $user->inbank + $gold_effect;
                    $user->curhp = $user->curhp + $curhp_effect;
                    $user->maxhp = $user->maxhp + $maxhp_effect;
                    $user->save();
                    break;
                case 'Secret_Potion';
                    $random_number = rand(0, 10);
                    $user = User::find(Auth::user()->id);
                    if($random_number == 0) {
                        $inc_attk = 150  * $quantity;
                        $user->attack = $user->attack + $inc_attk;
                        $user->save();
                    } elseif($random_number == 1) {
                        $inc_def = 100 * $quantity;
                        $user->defense = $user->defense + $inc_def;
                        $user->save();
                    } elseif($random_number == 2) {
                        $less_def = 100 * $quantity;
                        $user->defense = $user->defense - $less_def;
                        $user->save();
                    } elseif($random_number == 3) {
                        $user->inbank = $user->inbank / 5;
                        $user->save();
                    } elseif ($random_number == 4) {
                        $user->curhp = 1;
                        $user->save();
                    } elseif($random_number == 5) {
                        $user->gold = $user->gold / 3;
                        $user->save();
                    } elseif($random_number == 6) {
                        $inc_gold = 50 * $quantity;
                        $user->gold = $user->gold + $inc_gold;
                        $user->save();
                    } elseif ($random_number == 7) {
                        $user->curhp = 500;
                        $user->save();
                    } elseif($random_number == 8) {
                        $dec_attk = 50 * $quantity;
                        $user->attack = $user->attack - $dec_attk;
                        $user->save();
                    } elseif($random_number == 9) {
                        $inc_bank = 500 * $quantity;
                        $user->inbank = $user->inbank + $inc_bank;
                        $user->save();
                    } elseif($random_number == 10) {
                        $user->maxhp = 1000;
                        $user->save();
                    }
                    break;
            }
        }
        return $stat;
    }

    public function useItem($quantity) {
        $gold = 50 * $quantity;
        $user_stat = User::find(Auth::user()->id);
        $user_stat->gold = $user_stat->gold + $gold;
        $user_stat->save();
        return $gold;
    }

    public function upgradeStat() {
        $area_id = Session::get('area_id');
        $user_stat = User::find(Auth::user()->id);
        if(isset($_POST['submit']))
        {
            if(isset($_POST['magic_attack'])) {
                if($user_stat->level > 1 || $user_stat->level <= 14) {
                    $user_stat->magical_attack = $user_stat->magical_attack + 15;
                } elseif($user_stat->level >= 15 || $user_stat->level <= 25) {
                    $user_stat->magical_attack = $user_stat->magical_attack + 60;
                } elseif ($user_stat->level >= 26 || $user_stat->level <= 44) {
                    $user_stat->magical_attack = $user_stat->magical_attack + 175;
                } else {
                    $user_stat->magical_attack = $user_stat->magical_attack + 350;
                }
            } elseif(isset($_POST['attack'])) {
                if($user_stat->level > 1 || $user_stat->level <= 14) {
                    $user_stat->attack = $user_stat->attack + 50;
                } elseif($user_stat->level >= 15 || $user_stat->level <= 25) {
                    $user_stat->attack = $user_stat->attack + 250;
                } elseif ($user_stat->level >= 26 || $user_stat->level <= 44) {
                    $user_stat->attack = $user_stat->attack + 750;
                }  else {
                    $user_stat->attack = $user_stat->attack + 2000;
                }
            } elseif(isset($_POST['defense'])) {
                if($user_stat->level > 1 || $user_stat->level <= 14) {
                    $user_stat->defense = $user_stat->defense + 50;
                } elseif($user_stat->level >= 15 || $user_stat->level <= 25) {
                    $user_stat->defense = $user_stat->defense + 250;
                } elseif ($user_stat->level >= 26 || $user_stat->level <= 44) {
                    $user_stat->defense = $user_stat->defense + 750;
                } else {
                    $user_stat->defense = $user_stat->defense + 2000;
                }
            } elseif(isset($_POST['curhp'])) {
                if($user_stat->level > 1 || $user_stat->level <= 14) {
                    $user_stat->curhp = $user_stat->curhp + 100;
                } elseif($user_stat->level >= 15 || $user_stat->level <= 25) {
                    $user_stat->curhp = $user_stat->curhp + 200;
                } elseif ($user_stat->level >= 26 || $user_stat->level <= 44) {
                    $user_stat->curhp = $user_stat->curhp + 800;
                } else {
                    $user_stat->curhp = $user_stat->curhp + 2500;
                }
            } else {
                if($user_stat->level > 1 || $user_stat->level <= 14) {
                    $user_stat->maxhp = $user_stat->maxhp + 150;
                } elseif($user_stat->level >= 15 || $user_stat->level <= 25) {
                    $user_stat->maxhp = $user_stat->maxhp + 250;
                } elseif ($user_stat->level >= 26 || $user_stat->level <= 44) {
                    $user_stat->maxhp = $user_stat->maxhp + 900;
                } else {
                    $user_stat->maxhp = $user_stat->maxhp + 2800;
                }
            }
            $user_stat->save();
            return redirect()->to('/location/15/' . $area_id);
        }
    }
}