@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div id = "dialog-2" title = "dialoge">
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
                    <script type="text/javascript">
                        @foreach ($npcinfo->Dialogs->first()->Answers->all() as $answer)
                            @foreach($answer->Actions as $action)
                                    dialogactions.push({!! json_encode($action->toArray()) !!});
                            @endforeach
                        @endforeach
                    </script>
                </div>
            </div>
        </div>
        <?php
        //dd(App\Npcs::with(['Dialogs', 'Answers'])->get());
        $npcAnswers = App\DialogAnswer::with('Actions')->get();
        ?>
        <script type="text/javascript">
            var dialoginfo = {!! json_encode($npcinfo->Dialogs->toArray()) !!}
            var dialoganswers =  {!! json_encode($npcAnswers->toArray()) !!}
        </script>
    </div>
</div>
@endsection