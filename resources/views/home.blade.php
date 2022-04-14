@extends('layouts.app')
@section('content')
<?php
$User = Auth::user()->name;
$changeStory = false;
$locationConditions = \App\LocationConditions::with('conditions')->where('location_id', $location->id)->get();
if($locationConditions == [] || $locationConditions == '[]') {} else {
    if (strpos($locationConditions[0]->reward, "username")) {
        $newStory = str_replace("username", $User, $locationConditions[0]->reward);
        $changeStory = true;
    }
}
$changeNames = false;
if (strpos($location->story, "username") === 0) {
} else {
    $newStory = str_replace("username", $User, $location->story);
    $changeNames = true;
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" onclick="playAudio()"> {{$location->title ?? 'No title found for this location' }}
                    <?php if (isset($areaname)) {
                        $areainfo = json_decode(json_encode($areaname), true);
                        $lengtharea = count($areainfo);
                        for ($i = 0; $i < $lengtharea; $i++) {
                            if ($areainfo[$i]['id'] == $location->area_id) {?>
                                <p> Your in area {{$areainfo[$i]['name']}} and the time is {{$time->hour}}:
                                    {{$time->minute}}: {{$time->second}} </p>
                            <?php } elseif($location->area_id == 0 || $location->area_id == '0') { ?>
                               <p> You`re in A unkown Area and the time is {{$time->hour}}:
                                {{$time->minute}}: {{$time->second}} </p>
                            <?php break; } } }?>
                </div>

                <div class="panel-body">
                    @if ($location->id === 6)
                    @if ($currenttime == true)
                    <img class="storyimg" src="{{URL::asset('img/NewYorkDAY.png')}}">
                    @else
                    <img class="storyimg" src="{{URL::asset('img/NewYorkEVE.png')}}">
                    @endif
                    @elseif($location->foto_url != null)
                    <img class='storyimg' src="{{URL::asset($location->foto_url)}}"/>
                    @endif
                    @if($changeNames = true)
                    <p>{!!$newStory!!}</p>
                    @else
                    <p>{!!$location->story!!} </p>
                    @endif
                    <?php
                    if ($locationConditions == [] || $locationConditions == '[]') {} else {
                        if ($locationConditions[0]->action == [] || $locationConditions[0]->action == "[]") { ?>
                            <p Class="NpcStory"></p>
                        <?php } else {
                            $party = \App\Party::where('player_id', \Illuminate\Support\Facades\Auth::user()->id)->get();
                            if ($party == [] || $party == '[]') {
                            } else {
                                $party_id = $party[0]->id;
                                $player_party = \App\player_parties::where('party_id', $party_id)->get();
                                $npc_count = count($player_party);
                                $npc_found = false;
                                if ($npc_count == 1) {
                                    if ($player_party[0]->npc_id == $locationConditions[0]->action_value) {
                                        $npc_found = true;
                                    }
                                } else {
                                    foreach ($player_party as $npc) {
                                        if ($npc->npc_id == $locationConditions[0]->action_value) {
                                            $npc_found = true;
                                            break;
                                        }
                                    }
                                }
                                if ($npc_found == true) {
                                    if ($changeStory == true) {
                                        ?>
                                        <p Class="NpcStory">{!! $newStory !!}</p>
                                    <?php } else { ?>
                                        <p Class="NpcStory">{!! $locationConditions[0]->reward !!}</p>
                                    <?php }
                                } else { ?>
                                    <p Class="NpcStory"></p>
                                    <?php
                                }
                            }
                        }
                    }?>
                    <nav class="choice">
                        <?php
                        foreach ($location->choices as $choice) {
                            $choiceCondition = json_encode($choice->conditions);
                            $conditionCheck = $choice->conditions->first();
                            if ($choiceCondition == '[]') { ?>
                                <li class="menuchoice"><a class="link" href="/location/{{ $choice->to_location_id }}">{{$choice->name }}</a></li>
                            <?php } elseif($conditionCheck["action"] != "" || !empty($conditionCheck["action"])) {
                                $choiceCheck = json_decode($choiceCondition);
                                $ItemCheck = json_decode(json_encode($inventory->get_inventory_items), true);
                                $length = count($ItemCheck);
                                foreach ($choiceCheck as $ChoiceCheck) {
                                    for ($i = 0; $i < $length; $i++) {
                                        if ($ItemCheck[$i]['item_id'] == $ChoiceCheck->action_value) { ?>
                                            <li class="menuchoice"><a class="link" href="/location/{{ $choice->to_location_id }}">{{$choice->name }}</a></li>
                                        <?php } else { ?>
                                            <li class="menuchoice" style="display: none;"><a class="link" href="/location/{{ $choice->to_location_id }}">{{$choice->name }}</a></li>
                                        <?php }
                                    } ?>
                                <?php }
                            } else { ?>
                                <script type="text/javascript">
                                function warnUser() {
                                    var Link = document.getElementById("ChoiceBendy");
                                    var choice;
                                    if(confirm("Warining: There is no point back onces you enter the world of joey drew until you completed it " +
                                        "DO you want to go on or not?")) {
                                        Link.setAttribute("href", "/location/" + 92)
                                    } else {
                                        Link.setAttribute("href", "/location/" + 90)
                                    }
                                }
                             </script>
                                <li onclick="warnUser()" class="menuchoice"><a id="ChoiceBendy" class="link" >{{$choice->name }}</a></li>
                            <?php }
                        } ?>
                    </nav>
                </div>
                <!--iframe width="0" height="0" src="https://www.youtube.com/embed/videoseries?list=PLNc-vlTat7vgD_irLluPc_oUlZBLnJRMw&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
            </div>

            @if (isset($inventory))
            <div class="panel panel-default">
                <div class="panel-heading"><p>You`re inventory</p></div>
                <div class="panel-body">
                    <nav class="invNav">
                        <li class="inventory">Space left: {{$inventory->capacity}}</li>
                        @foreach ($inventory->get_inventory_items as $invItem)
                        <?php $check = \App\item_type::with('getItemName')->where('id', $invItem->item_id)->get();?>
                        <li class="inventory">{{$check[0]->name}} Quantity {{$invItem->quantity}}</li>
                        @endforeach
                    </nav>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection