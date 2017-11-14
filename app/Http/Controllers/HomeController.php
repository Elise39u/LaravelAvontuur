<?php

namespace App\Http\Controllers;

use App\AreaMonsters;
use App\Areas;
use App\inventories;
use App\inventory_item;
use App\item_type;
use App\Items;
use App\monster_type;
use App\Monsters;
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

    public function getInventory() {
        $inventory_id = Auth::user()->inventory_id;
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
        $user_currentLocation = User::find(Auth::user()->id);
        $user  = json_decode(json_encode($user_currentLocation), true);
        Session::put('location_id', $user['current_location_id']);
        $area = Areas::findOrFail($area_id);
        if (!$area->exists()) {
            return view('error');
        } elseif ($area->id == '' or $area->id == NULL or !$area->id) {
            return abort(404, 'area not found');
        } else {
            $areamonsters = AreaMonsters::where('area_id', $area_id)
                ->inRandomOrder()->first();
            $Monstercheck = json_decode($areamonsters);
            if(empty($Monstercheck) || !isset($Monstercheck)) {
                return abort(404, 'No monster Has been found');
            } else {
                $id = $Monstercheck->monster_id;
                $monsterinfo = Monsters::with('getMonster')->where('id', $id)
               ->get();
               if(empty($monsterinfo) || !$monsterinfo) {
                   return abort(404, 'No info about the monster has been found');
               } else {
                   $user = Auth::user();
                    return view('monster')->with('monsterinfo', $monsterinfo)->with('userinfo', $user);
               }
            }
        }
        /*
        In case of attacking
        $combat = array();
        $turns = 0;
        while ($player['curhp'] > 0 && $monster['curhp'] > 0) {
            if ($turns % 2 != 0) {
                $attacker = &$monster;
                $defender = &$player;
            } else {
                $attacker = &$player;
                $defender = &$monster;
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
         */
       /*
        3. Kijken wat de player drukt
        .Run away = Player wordt terug gestuurd naar de laatste locatie
        .Cry ga naar php en kijk of de player met een kans van 5% het monster wegjaagt en door te gaan
        .Taunt Probeer het monster met een kans van 15% vriendelijke te maken en door te gaan
        .Attack Val het monster aan
        4. Kijk wat er is gedrukt en voer het uit met code
        4.1 Attack moet eerst gaan kijken of wat de player attack kracht is en E.V.T magische kracht
        . Dit moet bij eklaar worden opgeteld en afgetrokken van het monster zijn defense VB: attack = 150 + 10(Fireball) - 260 defense
        . Als er een negatief getal kom print dan het volgende: Het monster->name heeft een te krachtig verdediging 0 damage gedaan
        . Een Posetief getal moet dan het volgende printen: Het monster->name heeft zoveel (wat er overblijft van de attack kracht) opgelopen
       4.1.2 Monster attack de player altijd
        . Een monster heeft dezelfde dingen als bij 4.1 maar dan i.p.v monster is het player
        . Eem monster heeft verschillende aanvallen
       4.1.3
        .Na een Attack van of de player of het monster moet het current hp worden geupdate min de attack kracht
        4.1.3.1
        .Als het current hp van de monster lager is dan 0 en de player heeft nog hp print het volgende: Congrats you defeated monster->naam and gain
            (gold drop for player) and exp (exp dropped for player) and the item(random item dropped from a table)
        .En er worden de 2 locaties geladen waar de player naar toe kan VB: area 1 -> Sandpath of naar de Docks
        4.1.3.2
        .Als het current hp van de player lager is dan 0 en de monster heeft nog health print het volgende: You have been defeated by monster->name and become infteced
        .Reset de player stats, Clear de inventory, Clear de party, En de stuur de player teurg naar de begin pagina
        4.2
         .Taunt is simpel een radom getal functie die kijkt of het getal lager is dan 16
        4.2.1
         .Als het zo is print het volgende: You have taunted the monster->name congrats you can pass
         .Ga nnu door net als bij 4.1.3.1
        4.2.2
         .Als het niet zo is print het volgende Taunt failed
         .Het monster doet nu een tegen aanval en ga verder als bij 4.1.2
         .Voer ook nog uit als 4.1.3
        4.3
        Als de player de kmp cry drukt ga met een random getal function kijken of ie de 5% kirjgt dus < 6%
          4.3.1
           Als de Player het lukt het monster weg te jagen print het volgende: You scared the monter->name away nice one
            Ga nu door als bij 4.1.3.1
          4.3.2
          .Anders Print: Cry You thought that wil help? LOL
          .Het monster doet nu een tegen aanval en ga verder als bij 4.1.2
          .Voer ook nog uit als 4.1.3
       4.4
        Run away pressed is simpel send the player back to last known location
        */
    }

    public function checkAttack()
    {
        if(isset($_POST['attack'])) {
            var_dump('You pressed attack');
        } elseif(isset($_POST['taunt'])) {
            var_dump('You pressed taunt');
        } elseif(isset($_POST['cry'])) {
            var_dump('You pressed cry');
        } elseif(isset($_POST['run'])) {
            $backing = Session::get('location_id');
            redirect()->to('location/'. $backing)->send();
        }
    }

    public function shops($id) {
        var_dump('You`re on the shop page with shop_id ' . $id . ' ');
    }
}