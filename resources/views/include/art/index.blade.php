@extends('include.art.layouts.main')

@section('head')
<title>@lang('main.art.index.title') | {{config('app.name')}}</title>
<link rel="stylesheet" type="text/css" href="{{asset('/include/art/css/index.css')}}"/>
@endsection

@section('content')
	<div class="container1" style="background-image: url('/img/photo/10.jpg')">
		<h1 class="text">@lang('main.art.index.header')</h1>
		<div class="btn"><div class="arrow"></div></div>
	</div>
	<div class="container2">
		<div class="block1">
			<h2 class="text1">@lang('main.art.index.text1')</h2>
			<div class="text2">@lang('main.art.index.text2')</div>
			<a class="btn" href="https://t.me/danila_dovgal">@lang('main.art.index.call')</a>
		</div>
		<div class="block2">
			<div class="img" style="background-image: url('/img/photo/3.jpg')"></div>
			<div class="items">
				<h3 class="text1">@lang('main.art.index.text3')</h3>
				<div class="text2">@lang('main.art.index.text4')</div>
				<a class="btn" href="/art/commerce">@lang('main.art.index.commerce')</a>
				<a class="btn" href="/art/video">@lang('main.art.index.video')</a>
				<a class="btn" href="/art/tfp">@lang('main.art.index.tfp')</a>
			</div>
		</div>
		<div class="block2 reverse">
			<div class="items">
				<h4 class="text1">@lang('main.art.index.text5')</h4>
				<a class="a" href="https://t.me/danila_dovgal" target="_blank">@lang('main.art.commons.telegram')</a>
				<a class="a" href="https://instagram.com/danila_dovgal" target="_blank">@lang('main.art.commons.instagram')</a>
				<a class="a" href="https://vk.com/danila_dovgal" target="_blank">@lang('main.art.commons.vkontakte')</a>
			</div>
			<div class="img" style="background-image: url('/img/photo/4.jpg')"></div>
		</div>
	</div>
@endsection