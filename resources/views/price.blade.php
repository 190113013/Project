<!DOCTYPE html>
<html>
<head>
	<title> Price list </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style>
		* {
			margin: 0;
		}
		body {
			background-color: rgb(50, 25, 150);
		}
	.table_dark {
		  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
		  font-size: 14px;
		  width: 640px;
		  text-align: center;
		  background: #252F48;
		}
.table_dark th {
		  color: #EDB749;
		  border-bottom: 1px solid #37B5A5;
		  padding: 12px 17px;
		}
.table_dark td {
		  color: #CAD4D6;
		  border-bottom: 1px solid #37B5A5;
		  border-right:1px solid #37B5A5;
		  padding: 7px 17px;
		}
.table_dark tr:last-child td {
		  border-bottom: none;
		}
.table_dark td:last-child {
		  border-right: none;
		}
.table_dark tr:hover td {
		  text-decoration: underline;
		} 

h1 {
	position: absolute;
	left: 730px;
	bottom: 300px;
	font-size: 30px;
	color: #EDB749;
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
<table class="table_dark">
  <tr>
    <th> {{ __('lang.Product')}}</th>
    <th>{{ __('lang.Size')}}</th>
    <th>{{ __('lang.Price(roubles)')}}</th>
    <th>{{ __('lang.Amount')}}</th>
    </tr>
  <tr>
    <td>{{ __('lang.AA3#6')}}</td>
    <td>6 {{ __('lang.metres')}}</td>
    <td>11.5 {{ __('lang.r')}}</td>
    <td>2 {{ __('lang.tons')}}</td>
    </tr>
  <tr>
    <td>{{ __('lang.1')}}</td>
    <td>11.7 {{ __('lang.metres')}}</td>
    <td>37 {{ __('lang.r')}}</td>
    <td>1.5 {{ __('lang.tons')}}</td>
    </tr>
  <tr>
    <td>{{ __('lang.2')}}</td>
    <td>11.7 {{ __('lang.metres')}}</td>
    <td>82 {{ __('lang.r')}}</td>
    <td>4 {{ __('lang.tons')}}</td>
    </tr>
  <tr>
    <td>{{ __('lang.3')}}</td>
    <td>11.7 {{ __('lang.metres')}}</td>
    <td>195 {{ __('lang.r')}}</td>
    <td>5 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.composite_6')}} </td>
    <td>50-100 {{ __('lang.metres')}}</td>
    <td>13 {{ __('lang.r')}}</td>
    <td>10 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.composite_10')}}</td>
    <td>50-100 {{ __('lang.metres')}}</td>
    <td>23 {{ __('lang.r')}}</td>
    <td>4 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.15x15x15x1')}}</td>
    <td>6 {{ __('lang.metres')}}</td>
    <td>36 {{ __('lang.r')}}</td>
    <td>0,5 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.25x25x1')}}</td>
    <td>6 {{ __('lang.metres')}}</td>
    <td>60 {{ __('lang.r')}}</td>
    <td>2 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.40x40x2')}}<</td>
    <td>6 {{ __('lang.metres')}}</td>
    <td>125 {{ __('lang.r')}}</td>
    <td>5 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.50x50x2')}}</td>
    <td>6 {{ __('lang.metres')}}</td>
    <td>155 {{ __('lang.r')}}</td>
    <td>2 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.60x60x2')}}</td>
    <td>6 {{ __('lang.metres')}}</td>
    <td>140 {{ __('lang.r')}}</td>
    <td>3 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.80x40x2')}}</td>
    <td>6 {{ __('lang.metres')}}</td>
    <td>185 {{ __('lang.r')}}</td>
    <td>8 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.80x60x2')}}</td>
    <td>6-12 {{ __('lang.metres')}}</td>
    <td>250 {{ __('lang.r')}}</td>
    <td>2,5 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.100x100x4')}}</td>
    <td>12 {{ __('lang.metres')}}</td>
    <td>560 {{ __('lang.r')}}</td>
    <td>5 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.120x120x4')}}</td>
    <td>12 {{ __('lang.metres')}}</td>
    <td>625 {{ __('lang.r')}}</td>
    <td>5 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.160x160x4')}}</td>
    <td>12 {{ __('lang.metres')}}</td>
    <td>1100 {{ __('lang.r')}}</td>
    <td>8 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.8')}}</td>
    <td>6-12 {{ __('lang.metres')}}</td>
    <td>330 {{ __('lang.r')}}</td>
    <td>2 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.10')}}</td>
    <td>6-12 {{ __('lang.metres')}}</td>
    <td>420 {{ __('lang.r')}}</td>
    <td>2 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.12')}}</td>
    <td>6-12 {{ __('lang.metres')}}</td>
    <td>560 {{ __('lang.r')}}</td>
    <td>6 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.14')}}</td>
    <td>6-12 {{ __('lang.metres')}}</td>
    <td>1100 {{ __('lang.r')}}</td>
    <td>0,7 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.40x40x3')}}</td>
    <td>-</td>
    <td>97 {{ __('lang.r')}}</td>
    <td>0,5 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.45x45x4')}}</td>
    <td>-</td>
    <td>135 {{ __('lang.r')}}</td>
    <td>0,3 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.50x50x4')}}</td>
    <td>-</td>
    <td>140 {{ __('lang.r')}}</td>
    <td>2 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.50x50x5')}}</td>
    <td>-</td>
    <td>175 {{ __('lang.r')}}</td>
    <td>0,4 {{ __('lang.tons')}}</td>
    </tr>
    <tr>
    <td>{{ __('lang.63x63')}}</td>
    <td>-</td>
    <td>235 {{ __('lang.r')}}</td>
    <td>0,2 {{ __('lang.tons')}}</td>
    </tr>
  </table>

  <h1>{{ __('lang.PART18')}}</h1>
  @endsection
</body>
</html>