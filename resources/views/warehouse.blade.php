@extends('layouts.app')
@section('content')
    <div class="col-md-10 card bg-light mb-3">
        <div class="card-header">{{$warehouse->name}}</div>
        <div class="card-body">
            <p>Oh the item use 0.0</p>
            @foreach ($items as $item)
                <?php $check = \App\item_type::with('getItemName')->where('id', $item->item_id)->get();
                ?>
                <form action="{{action('HomeController@checkUse')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>Item: {{$check[0]->name}} &nbsp;</label>Quantity: {{$item->quantity}} x <br>
                    <input name="id" value="{{$item->item_id}}" type="hidden">
                    <input type="number" name="quantity"> <input type="submit" name="submit" value="use"> <br>
                </form>
            @endforeach
            <?php $location = Session::get('last_known_location');?>
            @if (isset($location))
                <li><a href="/location/{{$location}}">Go back</a></li>
            @else
                <p>Something went wrong please contact the admin <br>
                    Email: JNLHelper@outlook.com</p>
                <li><a href="/location/12">Go back</a></li>
            @endif
            <?php $toomuch = Session::get('toomuch');
            $gold = Session::get('gold');?>
            @if (isset($toomuch))
                <div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert"
                                                                     aria-label="close">&times;</a><strong>Problem?</strong>
                    <ul>
                        <li>{{$toomuch}}</li>
                    </ul>
                </div>
            @endif @if (isset($gold))
                <div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert"
                                                                     aria-label="close">&times;</a><strong>Item
                        used</strong>
                    <ul>
                        <li>{{$gold}}</li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
    </div>
@endsection
