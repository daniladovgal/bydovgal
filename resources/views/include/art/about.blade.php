@extends('include.art.layouts.main')

@section('head')
<title>@lang('main.art.about.title') | {{config('app.name')}}</title>
<meta name="description" content="@lang('main.art.about.description')">
<meta name="keywords" content="@lang('main.art.about.keywords')">
<link rel="stylesheet" type="text/css" href="{{asset('/include/art/css/about.css')}}"/>
@endsection

@section('content')
	<div class="container1" style="background-image: url('/img/photo/49.jpg')">
		<h1 class="text">@lang('main.art.about.header')</h1>
		<div class="btn">
			<div class="arrow"></div>
		</div>
	</div>
	<div class="container2">
		<div class="block1">
			<h2 class="text1">@lang('main.art.about.text1')</h2>
			<div class="text2">@lang('main.art.about.text2')</div>
		</div>
		<div class="block2 reverse">
			<!--<div class="items">
				<div class="text2">
					<p>@lang('main.art.about.p1')</p>
					<p>@lang('main.art.about.p2')</p>
					<p>@lang('main.art.about.p3')</p>
				</div>
			</div>-->
			<div class="img" style="background-image: url('/img/photo/50.jpg')"></div>
		</div>
		<div class="block1">
			<a class="btn" href="https://t.me/danila_dovgal" target="_blank">@lang('main.art.commons.telegram')</a>
			<a class="btn" href="https://instagram.com/danila_dovgal" target="_blank">@lang('main.art.commons.instagram')</a>
			<a class="btn" href="https://vk.com/danila_dovgal" target="_blank">@lang('main.art.commons.vkontakte')</a>
		</div>
	</div>
@endsection