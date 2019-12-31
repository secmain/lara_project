@extends('came_layout')

@section('title')
Contact
@endsection

@section('content')
<h1>contact</h1>
<form class="contact-form" method="post" action="">
	<!--
	@i
	@omponent('components.text_input')
		@slot('id')
			namea
		@endslot
		@slot('name')
			namea
		@endslot
	@endcomponent
	-->

	@include('camecafe.components.text_input', [
    'name' => 'name',
    'id' => 'name',
    'label' => 'お名前'
	])

	@include('camecafe.components.text_input', [
    'name' => 'email',
    'id' => 'email',
    'label' => 'メールアドレス'
	])

	@include('camecafe.components.text_input', [
    'name' => 'camera_reki',
    'id' => 'camera_reki',
    'label' => 'カメラ歴'
	])

	@include('camecafe.components.text_input', [
    'name' => 'camera',
    'id' => 'camera',
    'label' => 'カメラ'
	])

	@include('camecafe.components.textarea_input', [
    'name' => 'text',
    'id' => 'text',
    'label' => '内容'
	])

	@include('camecafe.components.btn_submit', [
    'name' => 'submit',
    'id' => 'submit',
    'value' => '送信'
	])

</form>
@endsection