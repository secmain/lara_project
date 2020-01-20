@extends('camecafe.came_layout')

@section('title')
Blogs
@endsection

@section('css_link')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/blogs.css') }}">
<style type="text/css">
	.page-zone ul {
		margin: auto 0;
	}
	.page-zone li {
		list-style-type: none;
		float: left;
	}
</style>
@endsection

@section('content_main')
<h2 class="content-title">新着記事</h2>
@foreach ($blogs as $blog)
<a href="{{ action('CamecafeController@getBlog', $blog->id) }}">
<div class="section">
	<div class="image">
		<img src="夜景東京駅.jpg" class="blog-image">
	</div>
	<div class="desc">
		<h3 class="blog-title">{{ $blog->title }}</h3>
		{{ $blog->body }}
	</div>					
</div>
</a>
@endforeach


<div class="page-zone">
	{!! $blogs->render() !!}
</div>
@endsection