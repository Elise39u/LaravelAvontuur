@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$iteminfo->name}}</div>

                <div class="panel-body">
                    <p>You picked up the item {{$iteminfo->name}} <br>
                    This item has been added to you`re inventory <br>
                    Use the link to return to the page </p>
                    <li class="menuchoice"><a class="link" href="/location/{{ $iteminfo->location_id }}">Go back</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
