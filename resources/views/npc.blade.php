@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$npcinfo->name}}</div>

                <div class="panel-body">
                    <img class="storyimg" src="{{URL::asset($npcinfo->foto_url)}}">
                    <p>{!! $npcinfo->story !!}</p>

                    <li class="menuchoice"><a class="link" href="/location/{{ $npcinfo->location_id }}">Go back</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection