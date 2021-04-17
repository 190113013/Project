<!DOCTYPE html>
<html>
<head>
	<title> Our policy </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style>
		* {
			margin: 0;
		}

		#header1 {
			text-align: center;
			letter-spacing: 1px;
			font-size: 50px;
			margin: 20px 0 0 0;
			color: #333E49;
			font-family: sans-serif;
		}

		#img {
			width: 744px;
			height: 366px;
			margin-top: 60px;
			margin-left: 270px;
			border-radius: 5%;
		}

		.c1 {
			text-align: left;
			margin-top: 60px;
			margin-left: 20px;
		}
		#header2 {
			letter-spacing: 1px;
			font-size: 35px;
			color: #333E49;
			font-family: sans-serif;
			margin-bottom: 15px;
		}

		#p1 {
			font-size: 20px;
			letter-spacing: 0.5px;
			margin-bottom: 15px;
		}

		
		#p2 {
			font-size: 20px;
			letter-spacing: 0.5px;
			margin-bottom: 15px;
		}

		#l1 {
			font-size: 20px;
			margin-bottom: 60px;
			letter-spacing: 0.5px;
		}

		.c2 {
			text-align: left;
			margin-left: 20px;
		}

		#header3 {
			letter-spacing: 1px;
			font-size: 35px;
			color: #333E49;
			font-family: sans-serif;
			margin-bottom: 15px;
		}

		#p3 {
			font-size: 20px;
			letter-spacing: 0.5px;
			margin-bottom: 60px;
		}

		.c3 {
			text-align: left;
			margin-left: 20px;
		}

		#header4 {
			letter-spacing: 1px;
			font-size: 35px;
			color: #333E49;
			font-family: sans-serif;
			margin-bottom: 15px;
		}

		#l2 {
			font-size: 20px;
			margin-bottom: 60px;
			letter-spacing: 0.5px;
		}

		.c4 {
			text-align: left;
			margin-left: 20px;
		}

		#header5 {
			letter-spacing: 1px;
			font-size: 35px;
			color: #333E49;
			font-family: sans-serif;
			margin-bottom: 15px;
		}

		#l3 {
			font-size: 20px;
			margin-bottom: 20px;
			letter-spacing: 0.5px;
		}

		#p4 {
			font-size: 20px;
			letter-spacing: 0.5px;
			margin-bottom: 60px;
		}

		.Disclaimer {
			margin-top: 60px;
			width: 660px;
			height: 335px;
			color: #333E49;
			border: 10px double black;
			padding: 16px;
			margin-left: 250px;
			margin-bottom: 50px;
		}

		#dis {
			font-size: 25px;
			letter-spacing: 0.5px;
			font-family: sans-serif;
		}

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
	<h1 id="header1"> {{ __('lang.Policy')}} </h1>
	<img src="pol.png" id="img">
	<div class="c1">
	<h2 id="header2">{{ __('lang.PBP')}}</h2>
	<p id="p1">{{ __('lang.PART1')}}</</p>
	<p id="p2"> {{ __('lang.PART2')}} </p>
	<ul id="l1">
		<li> {{ __('lang.PART3')}}  </li>
		<li> {{ __('lang.PART4')}}  </li>
	</ul>
</div>
<div class="c2">
	<h3 id="header3">{{ __('lang.Scope')}}</h3>
	<p id="p3"> {{ __('lang.PART5')}}  </p>
</div>
<div class="c3">
	<h4 id="header4">{{ __('lang.PART6')}}</h4>
	<ul id="l2">
		<li> {{ __('lang.PART7')}} </li>
		<li> {{ __('lang.PART8')}} </li>
		<li> {{ __('lang.PART9')}} </li>
		<li>  {{ __('lang.PART10')}} </li>
		<li> {{ __('lang.PART11')}} </li>
	</ul>
</div>
<div class="c4">
	<h5 id="header5">{{ __('lang.PART12')}}</h5>
	<ul id="l3">
		<li> {{ __('lang.PART13')}} </li>
		<li> {{ __('lang.PART14')}} </li>
		<li> {{ __('lang.PART15')}} </li>
	</ul>
	<p id="p4"> {{ __('lang.PART16')}} </p>
</div>
<div class="Disclaimer">
	<p id="dis"><b>{{ __('lang.PART17')}}</b></p>
</div>
 @endsection
</body>
</html>