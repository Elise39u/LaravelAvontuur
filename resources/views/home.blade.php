@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $location->title or 'geen titel beschikbaar' }}</div>

                <div class="panel-body">
                    <img class='storyimg' src="{{URL::asset($location->foto_url)}}" />
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
