<!DOCTYPE html>
<html lang="@lang('main.commons.lang')">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="icon" type="image/png" sizes="96x96" href="/img/icon/96.png">
	<link rel="icon" type="image/png" sizes="64x64" href="/img/icon/64.png">
	<link rel="icon" type="image/png" sizes="48x48" href="/img/icon/48.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/icon/32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/img/icon/16.png">
	<link rel="apple-touch-icon" href="/img/icon/512.png">
	<link rel="stylesheet" type="text/css" href="{{asset('/include/art/css/const.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('/include/art/css/main.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('/include/art/css/arrow.css')}}"/>
	@yield('head')
</head>
<body>
	<div class="header" id="header">
		<a class="text" href="/">Dovgal</a>
		<div class="items">
			<a class="btn" href="/art">@lang('main.art.commons.main')</a>
			<a class="btn" href="/art/about">@lang('main.art.commons.about')</a>
			<a class="btn" href="/art/price">@lang('main.art.commons.price')</a>
		</div>
		<div class="text"></div>
	</div>

	@yield('content')

	<div class="footer">
			<div class="items desc">
				<div class="text">@lang('main.art.commons.desc')</div>
			</div>
			<div class="items">
				<div class="text bold">@lang('main.art.commons.title') <br> {{config('app.name')}}</div>
				<a href="/art">@lang('main.art.commons.main')</a>
				<a href="/art/about">@lang('main.art.commons.about')</a>
				<a href="/art/prices">@lang('main.art.commons.price')</a>
			</div>
			<div class="items">
				<div class="text bold">@lang('main.art.commons.sn')</div>
				<a href="https://t.me/danila_dovgal" target="_blank">@lang('main.art.commons.telegram')</a>
				<a href="https://instagram.com/danila_dovgal" target="_blank">@lang('main.art.commons.instagram')</a>
				<a href="https://vk.com/danila_dovgal" target="_blank">@lang('main.art.commons.vkontakte')</a>
			</div>
			<div class="items">
				<div class="text bold">@lang('main.art.commons.language')</div>
				<a href="/locale/en">@lang('main.art.commons.english')</a>
				<a href="/locale/ru">@lang('main.art.commons.russian')</a>
			</div>
		</div>
		<script async src="{{asset('/include/art/js/main.js')}}"></script>
</body>
</html>