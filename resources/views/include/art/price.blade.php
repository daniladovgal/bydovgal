@extends('include.art.layouts.main')

@section('head')
<title>@lang('main.art.price.title') | {{config('app.name')}}</title>
<meta name="description" content="@lang('main.art.index.description')">
<meta name="keywords" content="@lang('main.art.index.keywords')">
<link rel="stylesheet" type="text/css" href="{{asset('/include/art/css/price.css')}}"/>
@endsection

@section('content')
	<div class="container1" style="background-image: url('/img/photo/51.jpg')">
		<h1 class="text">@lang('main.art.price.header')</h1>
		<div class="btn">
			<div class="arrow"></div>
		</div>
	</div>
	<div class="container2">
		<div class="block1 first">
			<h2 class="text1">@lang('main.art.price.pricelist')</h2>
		</div>
		<div class="table">
			<div class="tr">
				<div class="td">@lang('main.art.price.service')</div>
				<div class="td">@lang('main.art.price.cost')</div>
				<div class="td">@lang('main.art.price.desc')</div>
			</div>
			<div class="tr">
				<div class="td">@lang('main.art.price.photo')</div>
				<div class="td">@lang('main.art.price.photocost')</div>
				<div class="td">@lang('main.art.price.photodesc')</div>
			</div>
			<div class="tr">
				<div class="td">@lang('main.art.price.video')</div>
				<div class="td">@lang('main.art.price.videocost')</div>
				<div class="td">@lang('main.art.price.videodesc')</div>
			</div>
			<div class="tr">
				<div class="td">@lang('main.art.price.cut')</div>
				<div class="td">@lang('main.art.price.cutcost')</div>
				<div class="td">@lang('main.art.price.cutdesc')</div>
			</div>
			<div class="tr">
				<div class="td">@lang('main.art.price.full')</div>
				<div class="td">@lang('main.art.price.fullcost')</div>
				<div class="td">@lang('main.art.price.fulldesc')</div>
			</div>
			<div class="tr">
				<div class="td">@lang('main.art.price.design')</div>
				<div class="td">@lang('main.art.price.designcost')</div>
				<div class="td">@lang('main.art.price.designdesc')</div>
			</div>
		</div>
		<div class="block1 last">
			<a class="btn" href="https://t.me/danila_dovgal">@lang('main.art.price.order')</a>
		</div>
	</div>
@endsection