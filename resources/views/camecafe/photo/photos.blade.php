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
<div class="sections">
	@foreach ($photos as $photo)	
	<div class="section">
		<h3 class="photo-id">{{ $photo->id }}</h3>
		<div class="image">
			<img src="{{ $photo->image_path }}" class="photo">	
		</div>
		<p class="event-name">{{ $photo->event_id }}event name</p>
		<div class="settei">{{ $photo->settei }}1 2 dovv</div>
		<div class="desc">
			{{ $photo->description }}aaaaaaaaaaaaaa
		</div>
	</div>
	@endforeach
</div>

<div class="page-zone">
{!! $photos->render() !!}
</div>
@endsection