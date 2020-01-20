@extends('camecafe.came_layout')

@section('title')
FAQ
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
@foreach ($faqs as $faq)
<div class="section">
	<div class="question">
		{{ $faq->question }}
	</div>
	<div class="answer">
		{{ $faq->answer }}
	</div>					
</div>
@endforeach


<div class="page-zone">
	{!! $faqs->render() !!}
</div>
@endsection