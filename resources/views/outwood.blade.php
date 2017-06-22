@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Well the......</div>

                    <div class="panel-body">
                        <img class='storyimg' src="{{URL::asset('/img/outsidewood.png')}}" />
                        <p> As you approche you see that the door is slight been lifted up <br>
                        Climbing would be a problem and do you have a stairs <br>
                        So what now....</p>
                        <nav class="choice">
                            <li class="menuchoice"><a class="link" href="#">Go inside</a></li>
                            <li class="menuchoice"><a class="link" href="/outside">Go back</a></li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
