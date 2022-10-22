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
	<link rel="stylesheet" type="text/css" href="{{asset('/css/const.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>

	@yield('head')
</head>
<body>
	<div class="container1">
		@yield('content')
	</div>
	<div class="container2">
		<div class="block">
			<a class="btn" target="_blank" href="https://t.me/danila_dovgal">@lang('main.commons.telegram')</a>
			<a class="btn" target="_blank" href="https://instagram.com/danila_dovgal">@lang('main.commons.instagram')</a>
			<a class="btn" target="_blank" href="https://vk.com/danila_dovgal">@lang('main.commons.vkontakte')</a>
		</div>
	</div>
</body>
</html>