@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" onclick="playAudio()">{{$location->title or 'geen titel beschikbaar' }}
                @foreach($areaname as $name)
                    <p>You`re in the area {{$name->name}} and the time is {{$time->hour}}: {{$time->minute}}: {{$time->second}} </p>
                @endforeach
                </div>

                <div class="panel-body">
                    @if ($location->id === 6)
                    @if ($currenttime == true)
                        <img class="storyimg" src="{{URL::asset('img/NewYorkDAY.png')}}">
                     @else
                        <img class="storyimg" src="{{URL::asset('img/NewYorkEVE.png')}}">
                    @endif
                    @else
                        <img class='storyimg' src="{{URL::asset($location->foto_url)}}" />
                    @endif
                    <p>{!!$location->story!!} </p>
                    <nav class="choice">

                        @foreach($location->choices as $choice)
                        <li class="menuchoice"><a class="link" href="/location/{{ $choice->to_location_id }}">{{ $choice->name }}</a></li>
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
