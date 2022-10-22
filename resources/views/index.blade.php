@extends('layouts.main')

@section('head')
<title>@lang('main.index.title') | {{config('app.name')}}</title>
<meta name="description" content="@lang('main.index.description')">
<meta name="keywords" content="@lang('main.index.keywords')">
<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}"/>
@endsection

@section('content')
<div class="img" alt="Danila Dovgal"></div>
<div class="block">
	<h1 class="text">@lang('main.index.header')</h1>
	<div class="items">
		<a href="https://keyspot.me/about" class="btn">@lang('main.index.text1')</a>
		<a href="/art" class="btn">@lang('main.index.text2')</a>
		<a href="/locale/@lang('main.commons.lang')" class="btn">@lang('main.index.text3')</a>
	</div>
</div>
@endsection