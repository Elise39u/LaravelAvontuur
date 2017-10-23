@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div id = "dialog-2" title = "Dialouge">
            <p id="Story"></p>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$npcinfo->name}}</div>

                <div class="panel-body">
                    <img class="storyimg" src="{{URL::asset($npcinfo->foto_url)}}">
                    <p>{!! $npcinfo->story !!}</p>
                    <li class="menuchoice"><a class="link" href="/location/{{ $npcinfo->location_id }}">Go back</a></li>
                    <button id="opener-2" class="npcbutton">{{$npcinfo->Talk}}</button>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var dialouginfo = {!! json_encode($npcinfo->dialougAnswers->toArray()) !!}
        </script>
    </div>
</div>
@endsection