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
                            @elseif ($shop['extra'] == 'hand')
                            <p>Equip weapons here </p>
                                <ul>
                                    <li>
                                        Primary hand:
                                        @if ($user['primary_hand'] == '')
                                            none
                                        @else
                                            <form action="{{action('HomeController@weaponBuy')}}" method="post">
                                                <?php $check = \App\item_type::with('getItemName')->where('id', $user['primary_hand'])->get();?>
                                                <p> {{$check[0]->name}}</p>
                                                <input type="hidden" name="id" value="{{$check[0]['id']}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="phand">
                                                <input type="submit" value="Sell" name="sell">
                                            </form>
                                        @endif
                                    </li>
                                    <li>
                                        Secondary hand:
                                        @if ($user['secondary_hand'] == '')
                                            none
                                        @else
                                            <form action="{{action('HomeController@weaponBuy')}}" method="post">
                                                <?php $check = \App\item_type::with('getItemName')->where('id', $user['secondary_hand'])->get();?>
                                                <p> {{$check[0]->name}}</p>
                                                <input type="hidden" name="id" value="{{$check[0]['id']}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="shand">
                                                <input type="submit" value="Sell" name="sell">
                                            </form>
                                        @endif
                                    </li>
                                </ul>
                            <p>
                                <form action="{{action('HomeController@weaponBuy')}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" value="Swap" name="weapon">
                                </form>
                            </p>
                            @elseif ($shop['extra'] == 'sell')
                                @foreach ($inventory->get_inventory_items as $invItem)
                                    <?php $check = \App\item_type::with('getItemName')->where('id', $invItem->item_id)->get();?>
                                    <p><strong>Item:</strong> {{$check[0]->name}} <strong>Quantity:</strong> {{$invItem->quantity}}x</p>
                                    <form action="{{action('HomeController@checkBuy')}}" method="post">
                                        <input type="hidden" name="id" value="{{$check[0]['id']}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="price" value="{{$check[0]->price}}">
                                        <input type='submit' value='Sell' name="sell"/>
                                        <input type="number" name="Quantity">
                                    </form>
                                @endforeach
                            @elseif($shop['extra'] == 'Counter') <br>
                            <form action="{{action('HomeController@weaponBuy')}}" method="post">
                            <input type="number" name="amount"><br>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" name="action" value="withdraw"> or
                            <input type="submit" name="action" value="deposit"> <br>
                            </form>
                            <p> You currently have <strong>{{$user['inbank']}}</strong> in bank and <strong>{{$user['gold']}}</strong> gold in hand</p>
                            @endif <br>
                            <img class="shopimg" src="{{URL::asset($shop['foto_url'])}}">
                            <p>Below are the items for sale</p>
                            @for ($i = 0; $i < $length; $i++)
                                @if($shop['extra'] == 'hand')
                                <form class="shop" action="{{action('HomeController@weaponBuy')}}" method="post">
                                    <strong>{{$shopitems[$i]['name']}} </strong> <em>{{$shopitems[$i]['price']}}gold</em> <br>
                                    <input type="hidden" name="id" value="{{$shopitems[$i]['id']}}">
                                    <input type="hidden" name="price" value="{{$shopitems[$i]['price']}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" value="buy" name="buy">
                                @else
                                <form class="shop" action="{{action('HomeController@checkBuy')}}" method="post">
                                    <strong>{{$shopitems[$i]['name']}} </strong> <em>{{$shopitems[$i]['price']}}gold</em> <br>
                                    <input type="hidden" name="id" value="{{$shopitems[$i]['id']}}">
                                    <input type="hidden" name="price" value="{{$shopitems[$i]['price']}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" value="buy" name="buy">
                                    <input type="number" value="" name="quantity">
                                @endif
                            </form>
                            @endfor
                            <?php $toomuch = Session::get('toomuch');
                                  $cost = Session::get('cost');
                                  $error = Session::get('Error');?>
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
                            @if (isset($error))
                            <div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Errors</strong>
                                <ul>
                                    <li>{{$error}}</li>
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
