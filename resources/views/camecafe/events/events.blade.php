@extends('camecafe.came_layout')

@section('title')
events
@endsection

@section('css_link')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/events.css') }}">
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
@foreach ($events as $event)
<a href="{{ action('CamecafeController@getEvent', $event->id) }}">
<div class="section">
	<div class="image">
		<img src="夜景東京駅.jpg" class="event-image">
	</div>
	<div class="desc">
		<h3 class="event-title">{{ $event->title }}</h3>
		{{ $event->body }}
	</div>					
</div>
</a>
@endforeach


<div class="page-zone">
	{!! $events->render() !!}
</div>
@endsection