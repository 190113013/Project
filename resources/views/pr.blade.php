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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
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
    <div class="row" style="position: absolute; right: 50px;">
    <form action="http://localhost/lll/public/multiuploads" method="post" enctype="multipart/form-data">
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
        <img id = "phone" src = "phone.jpg" width = "4%">
        <p id = "pnum"> +13 996 782 566</p>
        <img id = "email" src = "letter.jpg" width = "4%">
        <p id = "adress">sellingmetal@mail.ru</p>
    </div>
  
        <div class="dropped_menu">
            <button class="menubtn" style="">{{ __('lang.Menu')}}</button>
        <div class="dropped_menu_child">
            <a href="http://localhost/lll/public/policy">{{ __('lang.Our_policy')}}</a>
            <a href="http://localhost/lll/public/price">{{ __('lang.Price')}}</a>
      </div>
    </div>
<!-- <div class="bn"><button id="knopka" class="btn btn-outline-info" onclick="popup_bar()">Log In</button></div>
<div class="bar">
        <div class="content">
            <input id="username" type="text" name="username" placeholder="Username">
            <input id="password"  type="password"  name="password" placeholder="Password">
            <button onclick = "login(username.value)" class = "btn btn-outline-info" id = "click">Log In</button>
            <button onclick = "login(username.value)" class = "btn btn-outline-info" id = "click2">Sign up</button>
        </div>
    </div> -->

    <!-- <form action = "http://localhost/lll/public/register" method = "post">
      @csrf
    <div class="but" style="position: absolute; left: 1150px; top: 15px;">
    	<button type="submit" id="kp" class="btn btn-outline-info">Register</button>
    </div>
    </form>
 -->
      <div class="forms" style="position: absolute; left: 1050px; top:15px; background-color: white">
      <a href="http://localhost/lll/public/register" class="btn">{{ __('lang.Register')}}</a>
       <a href="http://localhost/lll/public/login" class="btn">{{ __('lang.Login')}}</a>
     </div>

<div class="bn2">
	<button id = "knopka2" class = "btn btn-danger" onclick="popup_bar2()">Leave a request</button>
</div>
<div class="bar2">
        <div class="content2">
            @if (session('status'))
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  {{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  {{ session('failed') }}
</div>
@endif
<form action = "http://localhost/lll/public/crt" method = "post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
   <input id="user_name" type="text" name="username" placeholder="Username"/>
    <input id="user_surname" type="text" name="surname" placeholder="Surname"/>
    <input id="user_phone" type="text" name="phone" placeholder="Phone"/>
  <input type = 'submit' value = "Send" style="position: absolute; left: 82px;" />   
  </form> 
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

    <p id="mid"> {{ __('lang.EX')}} <a href="http://localhost/lll/public/price">{{ __('lang.here')}}</a>.</p>

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

    <h2 id="find" style="position: absolute; bottom: -1670px;">{{ __('lang.Find_us_below:')}}</h2>


    <div id="googleMap">
    </div>

    <div id = "stores" style="position: absolute; bottom: -2180px;">
    <p id = "storages">{{ __('lang.Addresses_of_our_storages:')}}</p>   
    <div id="adds">
    <p id = "u1"> {{ __('lang.A1')}} </p>
    <p id = "u2"> {{ __('lang.A2')}} </p> 
    <p id = "u3"> {{ __('lang.A3')}}  </p> 
    </div>  
</div>

<div class = "checkout" style="padding-top: 20px;">
	<p style="font-size: 50px;">{{ __('lang.Check')}}</p>
</div>

<div class="CH" style="width: 500px; height: 200px;">
<canvas id="myChart1" width="500" height="300"></canvas>
<script>
   var ctx = document.getElementById("myChart1");
   var myChart = new Chart(ctx, {
      type: 'bar',
         data: {
            labels: ["2017", "2018" , "2019" , "2020", "2021"],
            datasets: [
               { label: 'Продажи(тонны)',
               data: [1000, 1200, 1200, 1500, 1560],
               backgroundColor :['rgba(255, 129, 102, 1)',
               'rgba(234, 162, 235, 1)',
               'rgba(255, 206, 36, 1)',
               'rgba(75, 192, 192, 1)',
               'rgba(153, 102, 255, 1)',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
</script>
<canvas id="myChart2" width="500" height="300" style="position: absolute; right: 10px; top: 2920px;"></canvas>
<script>
   var ctx = document.getElementById("myChart2");
   var myChart = new Chart(ctx, {
      type: 'pie',
         data: {
            labels: ["Школы", "Больницы" , "Жилые дома" , "Спортивные комплексы", "ТРЦ"],
            datasets: [
               { label: 'Строительство',
               data: [30, 12, 40, 10, 8],
               backgroundColor :['rgba(255, 129, 102, 1)',
               'rgba(234, 162, 235, 1)',
               'rgba(255, 206, 36, 1)',
               'rgba(75, 192, 192, 1)',
               'rgba(153, 102, 255, 1)',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
</script>


	<canvas id="myChart3" width="900" height="500" style="position: absolute; top: 3280px;"></canvas>
<script>
   var ctx = document.getElementById("myChart3");
   var myChart = new Chart(ctx, {
      type: 'polarArea',
         data: {
            labels: ["2017", "2018" , "2019" , "2020", "2021"],
            datasets: [
               { label: 'Компании, которые с нами сотрудничают',
               data: [14, 17, 15, 19, 20],
               backgroundColor :['rgba(255, 129, 102, 1)',
               'rgba(234, 162, 235, 1)',
               'rgba(255, 206, 36, 1)',
               'rgba(75, 192, 192, 1)',
               'rgba(153, 102, 255, 1)',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
</script>




	<canvas id="myChart4" style="position: absolute; top: 3300px; right: 10px;"></canvas>
<script>
   var ctx = document.getElementById("myChart4");
   var myChart = new Chart(ctx, {
      type: 'line',
         data: {
            labels: ["2017", "2018" , "2019" , "2020", "2021"],
            datasets: [
               { label: 'Ежегодные поставки(тонны)',
               data: [1000, 1250, 1250, 1500, 1620],
               'fill':false,
               'border-color':'rgb(75, 192, 192)',
               'lineTension':0.3}]},
               'options':{}});
   
</script>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8PDNDfhYFZHaaNyp6TfjgD_-b2Z7sIbY&callback=myMap" async defer></script>
   <script src="data.js"></script>

   <div style="width: 100%; height: 75px; background-color: #858D91; position: absolute; top: 3660px; color: white;
	letter-spacing: 0.5px;
	font-family: sans-serif;
	font-size: 16px;">
	<p style="position: absolute; top: 28px; left: 380px;"> {{ __('lang.POl')}} </p>
	</div>

   @endsection
</body>
</html>