@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Sand everywhere</div>

                    <div class="panel-body">
                        <img class='storyimg' src="{{URL::asset('/img/sandroad.png')}}" />
                        <p> A sandroaad..... while should i go on <br>
                        The road can lead to something new <br>
                        Or perhaps to hell</p>
                        <nav class="choice">
                            <li class="menuchoice"><a class="link" href="/outside">Go back</a></li>
                            <li class="menuchoice"><a class="link" href="/monster">Go on</a></li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
