@extends('layouts.app')
@section('content')
<?php
    $changeStory = false;
    if (strpos($npcinfo->story, "username")) {
        $newStory = str_replace("username", $Username, $npcinfo->story);
        $changeStory = true;
    }
?>
    <div class="container">
    <div class="row">
        <div id="dialog-2" title="dialoge">
            <p id="Story"></p>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$npcinfo->name}}</div>

                <div class="panel-body">
                    <img class="npcimg" src="{{URL::asset($npcinfo->foto_url)}}">
                    @if ($changeStory == true)
                    <p>{!! $newStory !!}</p>
                    @else
                    <p>{!! $npcinfo->story !!}</p>
                    @endif
                    <li class="menuchoice"><a class="link" href="/location/{{ $npcinfo->location_id }}">Go back</a></li>
                    <button id="opener-2" class="npcbutton">{{$npcinfo->Talk}}</button>
                    <?php $npcActions = App\DialogAnswer::with('Actions')->get(); ?>
                    <script type="text/javascript">
                        @foreach ($npcActions as $items)
                            @foreach ($items->Actions as $actions)
                                    dialogactions.push({!! json_encode($actions->toArray()) !!});
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