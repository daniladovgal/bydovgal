@extends('include.art.layouts.main')

@section('head')
<title>@lang('main.art.tfp.title') | {{config('app.name')}}</title>
<meta name="description" content="@lang('main.art.tfp.description')">
<meta name="keywords" content="@lang('main.art.tfp.keywords')">
<link rel="stylesheet" type="text/css" href="{{asset('/include/art/css/tfp.css')}}"/>
@endsection

@section('content')
	<div class="container1" style="background-image: url('/img/photo/7.jpg')">
		<h1 class="text">@lang('main.art.tfp.header')</h1>
		<div class="btn"><div class="arrow"></div></div>
	</div>
	<div class="container2">
		<div class="block1">
			<h2 class="text1">@lang('main.art.tfp.text1')</h2>
			<h3 class="text2">@lang('main.art.tfp.text2')</h3>
		</div>
		<div class="block3">
			<img src="/img/photo/2.jpg" alt="Airfield">
			<img src="/img/photo/6.jpg" alt="Euphoria">
			<img src="/img/photo/8.jpg" alt="Friends">
			<img src="/img/photo/17.jpg" alt="Burn money">
			<img src="/img/photo/28.jpg" alt="Prison">
			<img src="/img/photo/32.jpg" alt="Blue red">
			<img src="/img/photo/36.jpg" alt="Brands">
			<img src="/img/photo/37.jpg" alt="Cleopatra">
			<img src="/img/photo/38.jpg" alt="Girl">
			<img src="/img/photo/42.jpg" alt="Rainbow">
			<img src="/img/photo/45.jpg" alt="Man">
			<img src="/img/photo/11.jpg" alt="Rap">
		</div>
		<div class="block1">
			<div class="text1">@lang('main.art.tfp.text3')</div>
			<a class="btn" href="https://t.me/danila_dovgal">@lang('main.art.tfp.order')</a>
		</div>
	</div>
@endsection