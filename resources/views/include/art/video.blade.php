@extends('include.art.layouts.main')

@section('head')
<title>@lang('main.art.video.title') | {{config('app.name')}}</title>
<meta name="description" content="@lang('main.art.video.description')">
<meta name="keywords" content="@lang('main.art.video.keywords')">
<link rel="stylesheet" type="text/css" href="{{asset('/include/art/css/video.css')}}"/>
@endsection

@section('content')
	<div class="container1" style="background-image: url('/img/photo/27.jpg')">
		<h1 class="text">@lang('main.art.video.header')</h1>
		<div class="btn">
			<div class="arrow"></div>
		</div>
	</div>
	<div class="container2">
		<div class="block1">
			<h2 class="text1">@lang('main.art.video.text1')</h2>
			<h3 class="text2">@lang('main.art.video.text2')</h3>
		</div>
		<div class="block3">
			<div class="video"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/NgNNd4GxoMk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    		<div class="video"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/qDgn1gOlQOg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    		<div class="video"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/CUGM5762G5o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    		<div class="video"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/YiM9wTzLNnU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    		<div class="video"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/JRwlgikxRkQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
		</div>
		<div class="block1">
			<div class="text1">@lang('main.art.video.text3')</div>
			<a class="btn" href="https://t.me/danila_dovgal">@lang('main.art.video.order')</a>
		</div>
	</div>
@endsection