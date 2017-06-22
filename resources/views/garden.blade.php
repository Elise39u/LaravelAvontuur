@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Well Jungel Garden</div>

                    <div class="panel-body">
                        <img class='storyimg' src="{{URL::asset('/img/garden.png')}}" />
                        <p>Well what happend tpo my garden for god sake <br>
                        Its all growed and looks like a jungel <br>
                        Or did i forgot to keep it under control</p>
                        <nav class="choice">
                            <li class="menuchoice"><a class="link" href="/home">Go inside</a></li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
