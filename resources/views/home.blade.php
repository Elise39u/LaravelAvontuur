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
                        {{$location->from_location_id}}
                        <li class="menuchoice"><a class="link" href="/outside">Go outside</a></li>
                        <li class="menuchoice"><a class="link" href="/kitchen">Go to you`re kitchen</a></li>
                        <li class="menuchoice"><a class="link" href="/garden">Go to the garden</a></li>
                        <li class="menuchoice"><a class="link" href="/bedroom">Go to the bedroom</a></li>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
