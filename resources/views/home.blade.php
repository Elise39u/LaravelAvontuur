@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" onclick="playAudio()">{{$location->title or 'geen titel beschikbaar' }}
                    <?php if (isset($areaname)) {
                        $areainfo = json_decode(json_encode($areaname), true);
                        $lengtharea = count($areainfo);
                        for ($i = 0; $i < $lengtharea; $i++) {
                            if ($areainfo[$i]['id'] == $location->area_id) {?>
                                <p> You`re in area {{$areainfo[$i]['name']}} and the time is {{$time->hour}}:
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
                    @else
                    <img class='storyimg' src="{{URL::asset($location->foto_url)}}"/>
                    @endif
                    <p>{!!$location->story!!} </p>
                    <nav class="choice">
                        <?php
                        foreach ($location->choices as $choice) {
                            $choiceCondition = json_encode($choice->conditions);
                            if ($choiceCondition == '[]') { ?>
                                <li class="menuchoice"><a class="link" href="/location/{{ $choice->to_location_id }}">{{
                                        $choice->name }}</a></li>
                            <?php } else {
                                $choiceCheck = json_decode($choiceCondition);
                                $ItemCheck = json_decode(json_encode($inventory->get_inventory_items), true);
                                $length = count($ItemCheck);
                                foreach ($choiceCheck as $ChoiceCheck) {
                                    for ($i = 0; $i < $length; $i++) {
                                        if ($ItemCheck[$i]['item_id'] == $ChoiceCheck->action_value) { ?>
                                            <li class="menuchoice"><a class="link"
                                                                      href="/location/{{ $choice->to_location_id }}">{{
                                                    $choice->name }}</a></li>
                                        <?php } else { ?>
                                            <li class="menuchoice" style="display: none;"><a class="link"
                                                                                             href="/location/{{ $choice->to_location_id }}">{{
                                                    $choice->name }}</a></li>
                                        <?php }
                                    } ?>
                                <?php }
                            }
                        } ?>
                    </nav>
                </div>
            </div>

            @if (isset($inventory))
            <div class="panel panel-default">
                <div class="panel-heading"><p>You`re inventory</p></div>
                <div class="panel-body">
                    <nav class="invNav">
                        <li class="inventory">Space left: {{$inventory->capacity}}</li>
                        @foreach ($inventory->get_inventory_items as $invItem)
                        <li class="inventory">item in you`re inventory: {{$invItem->item_id}}</li>
                        @endforeach
                    </nav>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection