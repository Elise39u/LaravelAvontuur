@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <?php $monster = json_decode(json_encode($monsterinfo[0]->getmonster), true);
                  $user  = json_decode(json_encode($userinfo), true); ?>
                <div class="panel-heading">{{$monster[0]['name']}}</div>

                <div class="panel-body">
                    <img class="monsterimage" src="{{URL::asset($monster[0]['image_url'])}}"> <br>
                    <ul class="stats">
                        <h1> Monster stats </h1>
                        <li> attack: {{$monster[0]['attack']}}</li>
                        <li> defense: {{$monster[0]['defense']}}</li>
                        <li> Current hp: {{$monster[0]['curhp']}}</li>
                    </ul>
                    <ul class="stats">
                        <h1> You`re stats</h1>
                        <li> attack: {{$user['attack'] + $user['magical_attack']}}</li>
                        <li> defense: {{$user['defense']}}</li>
                        <li> curhp: {{$user['curhp']}}/{{$user['maxhp']}} </li>
                    </ul> <br><br><br>
                    <p> What are we gonna do {{$user['name']}}?</p>
                    <form action="{{action('HomeController@checkAttack')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="attack" value="Attack the {{$monster[0]['name']}}"><br>
                    <input type="submit" name="taunt" value="Try to Taunt the {{$monster[0]['name']}}"><br>
                    <input type="submit" name="cry" value="Cry for the {{$monster[0]['name']}}"><br>
                    <input type="submit" name="run" value="Run away"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
