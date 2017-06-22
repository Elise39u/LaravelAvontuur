@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nice a bedroom</div>

                    <div class="panel-body">
                        <img class='storyimg' src="{{URL::asset('/img/bedroom.png')}}" />
                        <p> Well mine bedroom looks like a gabrage belt <br>
                            Should i cleant it well no <br>
                            I should go on
                        <nav class="choice">
                            <li class="menuchoice"><a class="link" href="/home">Go to the living room</a></li>
                            <li class="menuchoice"><a class="link" href="/kitchen">Go to the kitchen</a></li>
                            <li class="menuchoice"><a class="link" href="/garden">Go to the garden</a></li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
