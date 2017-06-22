@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Mine Kichten</div>

                    <div class="panel-body">
                        <img class='storyimg' src="{{URL::asset('/img/kitchen.png')}}" />
                        <p>Well what happend to the kitchen <br>
                        I cant remember that is that groose <br>
                        Or did i gave the party at my house here</p>
                        <nav class="choice">
                            <li class="menuchoice"><a class="link" href="/home">Go to the living room</a></li>
                            <li class="menuchoice"><a class="link" href="/bedroom">Go to the bedroom</a></li>
                            <li class="menuchoice"><a class="link" href="/garden">Go to the garden</a></li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
