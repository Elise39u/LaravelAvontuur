@extends('layouts.app')
@section('content')
<?php $shop  = json_decode(json_encode($shopinfo), true);
      $userinfo = Auth::user();
      $user     = json_decode(json_encode($userinfo), true);
      $itemsinfo = App\item_type::with('getShopitems')->where('shop_category', $shop['category'])->get();
      $shopitems = json_decode(json_encode($itemsinfo), true);
      $length = count($shopitems)
?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$shop['name']}}</div>
                        <div class="panel-body">
                            <form action="" method="post">
                            @if ($shop['extra'] == 'healer')
                            <p> For how much gold do you want to heal <strong>1 gold = 1 hp</strong></p> <br>
                            <p> current hp: <strong>{{$user['curhp']}}</strong>/<strong>{{$user['maxhp']}}</strong></p>
                            <label>Healer:</label>
                            <input type="number" value="" name="heal"><br>
                            <input type="submit" value="heal me" name="healit">
                            @endif <br><br>
                            <p>Below are the items for sale</p>
                            @for ($i = 0; $i < $length; $i++)
                                <label>{{$shopitems[$i]['name']}} for <strong>{{$shopitems[$i]['price']}}</strong> gold</label> <br>
                                <input type="hidden" value="{{$shopitems[$i]['id']}}">
                                <input type="number" value="" name="quantity">x<br>
                            @endfor
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" value="Buy" name="submit">
                            </form>
                            <li class="menuchoice"><a  class="link" href="/location/{{$shop['location_id']}}"> Go back</a></li>
                        </div>
                </div>
             </div>
        </div>
</div>
@endsection
