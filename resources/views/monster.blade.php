@extends('layouts.app')
@section('content')
    <div class="col-md-10 card bg-light mb-3">
        <!-- Get the monster and their user there stats -->
        <?php $monster = json_decode(json_encode($monsterinfo[0]->getmonster), true);
        $user = json_decode(json_encode($userinfo), true);
        if ($user['primary_hand'] == null) {
        } else {
            $itemStats = \App\item_type::where('id', $user['primary_hand'])->get();
            if ($itemStats[0]->attack == 0 or $itemStats == [] or $itemStats == '[]') {
            } else {
                $newAttack = $user['attack'] + $user['magical_attack'] + $itemStats[0]->attack;
                $newDefence = $user['defense'] + $user['magical_attack'] + $itemStats[0]->defense;
            }
        }
        ?>
        <div class="card-header">{{$monster[0]['name']}}</div>
        <div class="card-body">
            <img class="monsterimage" src="{{URL::asset($monster[0]['image_url'])}}"> <br>
            <ul class="stats">
                <h1> Monster stats </h1>
                <li> attack: {{$monster[0]['attack']}}</li>
                <li> defense: {{$monster[0]['defense']}}</li>
                <li> Current hp: {{$monster[0]['curhp']}}</li>
            </ul>
            <ul class="stats">
                <h1> Your stats</h1>
                @if(isset($newAttack) && isset($newDefence))
                    <li> attack: {{$newAttack}}</li>
                    <li> defense: {{$newDefence}}</li>
                @else
                    <li> attack: {{$user['attack'] + $user['magical_attack']}}</li>
                    <li> defense: {{$user['defense'] + $user['magical_attack']}}</li>
                @endif
                <li> curhp: {{$user['curhp']}}/{{$user['maxhp']}}</li>
            </ul>
            <br><br><br>
            <?php $cry = Session::get('cry');
            $won = Session::get('won');
            $lose = Session::get('lose');
            $combat = Session::get('combat');
            $monstername = Session::get('monster');
            $monsterexp = Session::get('monster_xp');
            $monstergold = Session::get('monster_gold');
            $area_id = Session::get('area_id');
            $level = Session::get('level');
            $gold = Session::get('doublegold');
            $exp = Session::get('doubleexp');
            ?>
            @if (isset($combat))
                @foreach ($combat as $info)
                    <li><strong>{{$info['attacker']}} attacks {{$info['defender']}} for the amount of
                            {{$info['damage']}}</strong></li>
                @endforeach
            @endif
            @if (isset($won) || isset($lose))
                @if ($won == 1)
                    @if(isset($gold))
                        <p>You defeated <strong>{{$monstername}}</strong>! You gained <strong>{{$gold}}</strong>
                            gold,
                            and <strong>{{$monsterexp}}</strong> experience.</p>
                    @elseif(isset($exp))
                        <p>You defeated <strong>{{$monstername}}</strong>! You gained <strong>{{$monstergold}}</strong>
                            gold,
                            and <strong>{{$exp}}</strong> experience.</p>
                    @else
                        <p>You defeated <strong>{{$monstername}}</strong>! You gained <strong>{{$monstergold}}</strong>
                            gold,
                            and <strong>{{$monsterexp}}</strong> experience.</p>
                    @endif
                    @if(isset($level))
                        @if ($level == 1)
                            <p> You gained a level, current level: <strong>{{$user['level'] + 1}}</strong><br>
                                what stat do you want to increase</p>
                            <form action="{{action('HomeController@upgradeStat')}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label> magic attack</label>
                                <input type="radio" name="magic attack" value="magic_attack"> <br>
                                <label> attack</label>
                                <input type="radio" name="attack" value="attack"> <br>
                                <label> defense</label>
                                <input type="radio" name="defense" value="defense"> <br>
                                <label> current hp</label>
                                <input type="radio" name="current_hp" value="curhp"> <br>
                                <label> max hp</label>
                                <input type="radio" name="max hp" value="maxhp"> <br>
                                <input type="submit" value="submit" name="submit">
                            </form>
                        @endif
                    @endif
                    @if (isset($area_id))
                        @if ($area_id == 1)
                            <button><a href="/location/10">Go on with the sand</a></button>
                            <br>
                            <button><a href="/location/29">Go towards the docks</a></button>
                            <br>
                        @elseif ($area_id == 2)
                            <button><a href="/location/34">Go to the station</a></button>
                            <button><a href="/location/50">Go to the bank</a></button>
                        @elseif ($area_id == 3)
                            <button><a href="/location/32">Go back on the sea</a></button>
                            <button><a href="/location/64">Go on the ship</a></button>
                        @else
                            <p> No locations available for this time</p>
                        @endif
                    @endif
                @elseif ($lose == 1)
                    <p>You have been killed by {{$monstername}}</p>
                    <li><a href="/location/1">Game over</a></li>
                @endif
            @else
                <p> What are we gonna do {{$user['name']}}?</p>
                <form action="{{action('HomeController@checkAttack')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="attack" value="Attack the {{$monster[0]['name']}}"><br>
                    <input type="submit" name="taunt" value="Try to Taunt the {{$monster[0]['name']}}"><br>
                    <input type="submit" name="cry" value="Cry for the {{$monster[0]['name']}}"><br>
                    <input type="submit" name="run" value="Run away"><br>
                    <input type='hidden' name='monster' value="{{$monster[0]['name']}}"/>
                </form>
            @endif
            @if (isset($cry))
                <div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert"
                                                                     aria-label="close">&times;</a><strong>Too
                        bad</strong>
                    <ul>
                        <li>{{$cry}}</li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
