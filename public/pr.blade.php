<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Steel Hand </title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="import" href="Policy.html">
    <link rel="import" href="Products.html">
    <link rel="import" href="Price.html">
    <style>
    </style>
  </head>
<body> 
  @extends('layout')
  @section('content')
  @if (count($errors) > 0)
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
@endif
<div class="name" style="position: absolute; top:132px; left: 700px">
<input type="text" name="name" class="form-control"  placeholder="Product Name" style="width: 250px;">
</div>
    <div class="row" style="position: absolute; right: 50px;">
    <form action="http://localhost/lap/public/multiuploads" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
    </div>
    <br />
    <input type="file" style="width: 250px" class="form-control" name="photos[]" multiple />
    <br /><br />
    <input type="submit" style="width: 150px;" class="btn btn-primary" value="Upload" />
    </form>
    </div>
  <div class = "up">
    <img id = "log" src = "logo.png" width = "11%" style="position: absolute; left: 140px">
    <img id = "phone" src = "phone.jpg" width = "5%">
    <p id = "pnum"> +13 996 782 566</p>
    <img id = "email" src = "letter.jpg" width = "5%">
    <p id = "adress">sellingmetal@mail.ru</p>
  </div>
  
    <div class="dropped_menu">
        <button class="menubtn" style="">{{ __('lang.Menu')}}</button>
      <div class="dropped_menu_child">
        <a href="Policy.html">{{ __('lang.Our_policy')}}</a>
        <a href="Products.html">{{ __('lang.Products')}}</a>
        <a href="Price.html">{{ __('lang.Price')}}</a>
    </div>
  </div>
<div class="bn"><button id="knopka" class="btn btn-outline-info" onclick="popup_bar()">Log In</button></div>
<div class="bar">
        <div class="content">
            <img src="logo.png" alt="logo" width="78%">
            <img onclick="close_bar()" class="close" src="close.png" width="11%">
            <input id="username" type="text" name="username" placeholder="Username">
            <input id="password"  type="password"  name="password" placeholder="Password">
            <button onclick = "login(username.value)" class = "btn btn-outline-info" id = "click">Log In</button>
            <button onclick = "login(username.value)" class = "btn btn-outline-info" id = "click2">Sign up</button>
        </div>
    </div>

<div class="bn2"><button id = "knopka2" class = "btn btn-danger" onclick="popup_bar2()">Leave a request</button></div>
<div class="bar2">
        <div class="content2">
          <img onclick="close_bar2()" class="close" src="close.png" width="11%">
            <input id="user_name" type="text" name="user_name" placeholder="Username">
            <input id="user_surname" type="text" name="user_surname" placeholder="Surname">
            <input id="user_phone" type="text" name="user_phone" placeholder="Phone">
            <button onclick = "send()" class = "btn btn-outline-danger" id = "click3">Send</button>
        </div>
    </div>
    <div class="prof">
    <p id="name"></p>
    <img id="img" src="profile.png">
  </div>

  <button id = "sl_left" class="btn btn-info" style="position: absolute; top:580px; right: 50px">{{ __('lang.Swipe')}}</button>
  <div id = "slider">
    <div id = "stripe">
    <img src = "armature.jpg" width = "24%"> 
    <img src = "balka.jpg" width = "24%"> 
    <img src = "pipe.jpg" width = "24%">  
    <img src = "round.jpg" width = "24%">  
  </div>
    </div>

    <p id="pr" style="position: absolute; bottom:-20px"><b>{{ __('lang.Popular_Products')}}</b></p> 

   <div class = kunteynir>

          <div class = "card" style = "width:238px, height:231px">
            <img src = "arm12.jpg" id="card1" style = "width:238px">
          <div class = "card-body">
            <p> {{ __('lang.COMPOSITE_ARMATURE,')}} <br> {{ __('lang.Diameter')}} ______ 12 {{ __('lang.mm')}} <br> {{ __('lang.Length')}} ______ 50-100 {{ __('lang.m')}} <br> {{ __('lang.Surface')}} ______ {{ __('lang.corrugated')}} <br> {{ __('lang.Cost')}} ______  34 {{ __('lang.r/m')}}</p>
        </div>
      </div>

          <div class = "card" style = "width:238px, height:231px">
            <img src = "arm10.jpg" id="card2" style = "width:238px">
          <div class = "card-body">
            <p> {{ __('lang.COMPOSITE_ARMATURE,')}} <br> {{ __('lang.Diameter')}} ______ 10 {{ __('lang.mm')}} <br> {{ __('lang.Length')}} ______ 50-100 {{ __('lang.m')}} <br> {{ __('lang.Surface')}} ______ {{ __('lang.corrugated')}} <br> {{ __('lang.Cost')}} ______  23 {{ __('lang.r/m')}} </p>
        </div>
      </div>
        
          <div class = "card" style = "width:238px, height:231px">
            <img src = "arm8.jpg" id="card3" style = "width:238px">
          <div class = "card-body">
            <p> {{ __('lang.COMPOSITE_ARMATURE,')}} <br> {{ __('lang.Diameter')}} ______ 10 {{ __('lang.mm')}} <br> {{ __('lang.Length')}} ______ 50-100 {{ __('lang.m')}} <br> {{ __('lang.Surface')}} ______ {{ __('lang.corrugated')}} <br> {{ __('lang.Cost')}} ______  14 {{ __('lang.r/m')}} </p>
        </div>
      </div>

          <div class = "card" style = "width:238px, height:231px">
            <img src = "arm6.jpg" id="card4" style = "width:238px">
          <div class = "card-body">
            <p> {{ __('lang.COMPOSITE_ARMATURE,')}} <br> {{ __('lang.Diameter')}} ______ 6 {{ __('lang.mm')}} <br> {{ __('lang.Length')}} ______ 50-100 {{ __('lang.m')}} <br> {{ __('lang.Surface')}} ______ {{ __('lang.corrugated')}} <br> {{ __('lang.Cost')}} ______  13 {{ __('lang.r/m')}} </p>
        </div>
      </div>

          <div class = "card" style = "width:238px, height:231px">
            <img src = "arm14.jpg" id="card5" style = "width:238px">
          <div class = "card-body">
            <p> {{ __('lang.COMPOSITE_ARMATURE,')}} <br> {{ __('lang.Diameter')}} ______ 14 {{ __('lang.mm')}} <br> {{ __('lang.Length')}} ______ 11.7 {{ __('lang.m')}} <br> {{ __('lang.Armatures_rank')}} ______ A-1 <br> {{ __('lang.Cost')}} ______  50 {{ __('lang.r/m')}} </p>
        </div>
      </div>
    </div>

    <div class="polosa">
    <img src = "fon.jpg" id="fon" width="1263px" height="200px"> 
    <img id="gz" src = "gruzovik.png" width="15%">
    <h2> {{ __('lang.Cost_of_delivery')}} </h2>
    <p id="f"> {{ __('lang.We_deliver_daily,_seven_days_a_week_from_8:00_to_20:00.')}} </p>
    <p id="s">{{ __('lang.Our_company_has_a_large_truck_fleet.')}} </p>
    </div>
  
    <div class="list">
    <h1 id="header"><b>{{ __('lang.Rolled_metal_stores')}}</b></h1>

    <p id="intro"> {{ __('lang.SH')}}</p>

    <p id="mid"> {{ __('lang.EX')}} <a href="file:///C:/Users/lenovo/Desktop/Projects/Price.html">{{ __('lang.here')}}</a>.</p>

      <div class="frame">
        <img src="list.png" id="list" width="11%">
        <p id="t1"> {{ __('lang.WA')}} </p>
        <img src="truck.png" id="truck" width="11%">
        <p id="t2"> {{ __('lang.PDO')}} </p>
        <img src="cup.png" id="cup" width="11%">
        <p id="t3"> {{ __('lang.OHQ')}} </p>
      </div>

      <p id="mid2">{{ __('lang.OM')}}</p>

      <p id="mid3">{{ __('lang.MID3')}}</p>

      <p id="end">{{ __('lang.END')}}</p>
  </div>

  <p id="find">{{ __('lang.Find_us_below:')}}</p>


  <div id="googleMap">
  </div>

  <div id = "stores">
  <p id = "storages">{{ __('lang.Addresses_of_our_storages:')}}</p> 
  <div id="adds">
  <p id = "u1"> {{ __('lang.A1')}} </p>
  <p id = "u2"> {{ __('lang.A2')}} </p> 
  <p id = "u3"> {{ __('lang.A3')}}  </p> 
  </div>  
</div>

<div class = "bottom">
  <p id="sh">{{ __('lang.POl')}} </p>
</div>
@endsection
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8PDNDfhYFZHaaNyp6TfjgD_-b2Z7sIbY&callback=myMap" async defer></script>
   <script src="data.js"></script>
</body>
</html>