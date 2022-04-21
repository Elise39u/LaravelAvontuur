@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class=" col-md-10 card bg-light mb-3">
            <div class="card-header">{{$iteminfo->name}}</div>
                <div class="card-body">
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
