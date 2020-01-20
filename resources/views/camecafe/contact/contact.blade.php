@extends('camecafe.came_layout')

@section('title')
Contact
@endsection

@section('content_main')
<h1>contact</h1>
<form class="contact-form" method="post" action="">

	@include('camecafe.components.text_input', [
    'name' => 'request_user',
    'id' => 'request_user',
    'label' => 'お名前'
	])

	@include('camecafe.components.text_input', [
    'name' => 'mail',
    'id' => 'mail',
    'label' => 'メールアドレス'
	])

	@include('camecafe.components.text_input', [
    'name' => 'camera_year',
    'id' => 'camera_year',
    'label' => 'カメラ歴'
	])

	@include('camecafe.components.text_input', [
    'name' => 'use_camera',
    'id' => 'use_camera',
    'label' => 'カメラ'
	])

	@include('camecafe.components.textarea_input', [
    'name' => 'content',
    'id' => 'content',
    'label' => '内容'
	])

	@include('camecafe.components.btn_submit', [
    'name' => 'submit',
    'id' => 'submit',
    'value' => '送信'
	])

</form>
@endsection