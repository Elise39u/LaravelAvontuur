@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">The edge</div>

                    <div class="panel-body">
                        <img class='storyimg' src="{{URL::asset('/img/edege.png')}}" />
                        <p> As you standig there you see a city in the distance <br>
                        But to get across to other side you need a boat with paddles <br>
                        What to the do do</p>
                        <nav class="choice">
                            <li class="menuchoice"><a class="link" href="/outside">Go back</a></li>
                            <!-- Check first if player has item boat and paddle to get on the river -->
                            <li class="menuchoice"><a class="link" href="#">Go on the river</a></li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
