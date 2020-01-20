@extends('camecafe.came_layout')

@section('title')
Blog Detail
@endsection

@section('content_main')
<p class="blog-date">{{ $blog->created_at }}</p>
<div class="blog-author">{{ $blog->user_id }}</div>
<h3 class="blog-title">{{ $blog->title }}</h3>
<div class="blog-body">
	{{ $blog->body }}
</div>
@endsection