@extends('came_layout')

@section('title')
Contact
@endsection

@section('content')
<h1>contact</h1>
<form class="contact-form" method="post">
	@component('components.text_input')
		@slot('id', 'namea')
		@slot('name', 'namea')
	@endcomponent

	@component('components.text_input')
		@slot('id', 'name2')
		@slot('name', 'name')
	@endcomponent
</form>
@endsection