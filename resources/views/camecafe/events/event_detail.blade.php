@extends('camecafe.came_layout')

@section('title')
Event Detail
@endsection

@section('content_main')
<p class="event-date">{{ $event->event_date }}</p>
<h3 class="event-title">{{ $event->title }}</h3>
<div class="event-body">
	{{ $event->body }}
</div>
@endsection