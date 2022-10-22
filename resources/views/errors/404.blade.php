@extends('layouts.main')

@section('head')
<title>@lang('main.err.title') | {{config('app.name')}}</title>
<meta name="description" content="@lang('main.404.description')">
<link rel="stylesheet" type="text/css" href="{{asset('css/err.css')}}"/>
@endsection

@section('content')
<div class="container1">
		<div class="block">
			<h1 class="text">@lang('main.err.header')</h1>
			<div class="items">
				<a href="/" class="btn">@lang('main.err.text1')</a>
			</div>
		</div>
	</div>
@endsection