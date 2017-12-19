@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$warehouse->name}}</div>
                <div class="panel-body">
                    <?php $location =  Session::get('last_known_location');?>
                    @if (isset($location))
                            <li><a href="/location/{{$location}}">Go back</a></li>
                    @endif
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
