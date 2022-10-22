@extends('include.art.layouts.main')

@section('head')
<title>@lang('main.art.commerce.title') | {{config('app.name')}}</title>
<meta name="description" content="@lang('main.art.commerce.description')">
<meta name="keywords" content="@lang('main.art.commerce.keywords')">
<link rel="stylesheet" type="text/css" href="{{asset('/include/art/css/commerce.css')}}"/>
@endsection

@section('content')
	<div class="container1" style="background-image: url('/img/photo/14.jpg')">
		<h1 class="text">@lang('main.art.commerce.header')</h1>
		<div class="btn"><div class="arrow"></div></div>
	</div>
	<div class="container2">
		<div class="block1">
			<h2 class="text1">@lang('main.art.commerce.text1')</h2>
			<div class="text2">@lang('main.art.commerce.concert')</div>
		</div>
		<div class="block3">
			<img src="/img/photo/23.jpg" alt="Piano">
			<img src="/img/photo/33.jpg" alt="Saypink">
		</div>
		<div class="block1">
			<div class="text2">@lang('main.art.commerce.wedding')</div>
		</div>
		<div class="block3">
			<img src="/img/photo/18.jpg" alt="Pair">
			<img src="/img/photo/19.jpg" alt="Signature">
		</div>
		<div class="block1">
			<div class="text2">@lang('main.art.commerce.subject')</div>
		</div>
		<div class="block3">
			<img src="/img/photo/40.jpg" alt="Bottles">
			<img src="/img/photo/41.jpg" alt="Turkish Delight">
		</div>
		<div class="block1">
			<div class="text2">@lang('main.art.commerce.studio')</div>
		</div>
		<div class="block3">
			<img src="/img/photo/25.jpg" alt="Salvado">
			<img src="/img/photo/9.jpg" alt="Black and white">
		</div>
		<div class="block1">
			<div class="text2">@lang('main.art.commerce.art')</div>
		</div>
		<div class="block3">
			<img src="/img/photo/6.jpg" alt="Euphoria">
			<img src="/img/photo/28.jpg" alt="Prison">
			<img src="/img/photo/34.jpg" alt="Lift">
		</div>
		<div class="block1">
			<div class="text1">@lang('main.art.commerce.text2')</div>
			<a class="btn" href="https://t.me/danila_dovgal">@lang('main.art.commerce.order')</a>
		</div>
	</div>
@endsection