@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Well outside</div>

                    <div class="panel-body">
                        <img class='storyimg' src="{{URL::asset('/img/outside.png')}}" />
                        <p> Well there are we standing outside <br>
                        There is a way left and right but also a few shops <br>
                        And the roads goes on to unkown places <br>
                        Which way do you wil go</p>
                        <nav class="choice">
                            <li class="menuchoice"><a class="link" href="/home">Go inside</a></li>
                            <li class="menuchoice"><a class="link" href="/sandpath">Go on the sandpath</a></li>
                            <li class="menuchoice"><a class="link" href="/edge">Go to the edge</a></li>
                            <li class="menuchoice"><a class="link" href="#">Go on</a></li>
                            <li class="menuchoice"><a class="link" href="/outwood">Go to the wood store</a></li>
                            <li class="menuchoice"><a class="link" href="#">Go to the electro store</a></li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
