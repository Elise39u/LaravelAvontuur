@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">You have encounterd a <strong><!-- Monster name --></strong></div>

                    <div class="panel-body">
                        <!-- Need to get img from database that fits the monster -->
                        <img class='storyimg' src="{{URL::asset('/img/Monster.png')}}"/>
                        <div class="cloum">
                            <ul class="playerstats">
                                <h1> Your stats </h1>
                                <li class="stats">Attack: 800</li> <!-- With stats of items -->
                                <li class="stats">Defense: 1800</li> <!-- With stats of items -->
                                <li class="stats">Magic power: 600</li> <!-- With stats of items -->
                                <li class="stats">CurHP: 276</li> <!-- With stats of items -->
                                <li class="stats">MaxhP: 346</li> <!-- With stats of items -->
                            </ul>
                        </div>
                        <div class="cloum">
                            <ul class="monsterstats">
                                <h1> Monster stats</h1>
                                <li class="stats">Attack: 50</li>
                                <li class="stats">Defense: 20</li>
                                <li class="stats">Magic Defense: 120</li>
                                <li class="stats">Curhp: 249</li>
                                <li class="stats">MaxHP: 250</li>
                                <li class="stats">Reward on win: Key</li>
                            </ul>
                        </div>
                        <nav class="choice">
                            <!-- Make back choice on last known location -->
                            <li class="menuchoice"><a class="link" href="/sandpath">Go back</a></li>
                            <li class="menuchoice"><a class="link" href="/#">Go attack</a></li>
                            <li class="menuchoice"><a class="link" href="/#">Use a item</a></li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
