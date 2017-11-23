@extends('layouts.app')
@section('content')
<?php $shop  = json_decode(json_encode($shopinfo), true);
      $userinfo = Auth::user();
      $user     = json_decode(json_encode($userinfo), true);
      $itemsinfo = App\item_type::with('getShopitems')->inRandomOrder()->take(10)->where('shop_category', $shop['category'])->get();
      $shopitems = json_decode(json_encode($itemsinfo), true);
      $length = count($shopitems);
?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$shop['name']}}</div>
                        <div class="panel-body">
                            <strong>Current gold: {{$user['gold']}}</strong>
                            @if ($shop['extra'] == 'healer')
                            <p> For how much gold do you want to heal <strong>1 gold = 1 hp</strong></p> <br>
                            <p> current hp: <strong>{{$user['curhp']}}</strong>/<strong>{{$user['maxhp']}}</strong></p>
                            <form action="{{action('HomeController@checkBuy')}}" method="post">
                            <label>Healer:</label>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="number" value="" name="heal"><br>
                            <input type="submit" value="heal me" name="healit">
                            </form>
                            @endif <br>
                            <img class="shopimg" src="{{URL::asset($shop['foto_url'])}}">
                            <p>Below are the items for sale</p>
                            @for ($i = 0; $i < $length; $i++)
                            <form class="shop" action="{{action('HomeController@checkBuy')}}" method="post">
                                <strong>{{$shopitems[$i]['name']}} </strong> <em>{{$shopitems[$i]['price']}}gold</em> <br>
                                <input type="hidden" name="id" value="{{$shopitems[$i]['id']}}">
                                <input type="hidden" name="price" value="{{$shopitems[$i]['price']}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="buy" name="buy">
                                <input type="number" value="" name="quantity">
                            </form>
                            @endfor
                            <?php $toomuch = Session::get('toomuch');
                                  $cost = Session::get('cost');?>
                            @if (isset($toomuch))
                            <div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Gold Problems</strong>
                                <ul>
                                    <li>{{$toomuch}}</li>
                                </ul>
                            </div>
                            @endif
                            @if (isset($cost))
                            <div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Negatives numbers</strong>
                                <ul>
                                    <li>{{$cost}}</li>
                                </ul>
                            </div>
                            @endif
                            <li class="menuchoice"><a  class="link" href="/location/{{$shop['location_id']}}"> Go back</a></li>
                        </div>
                </div>
             </div>
        </div>
</div>
@endsection
