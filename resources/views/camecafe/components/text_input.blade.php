<div class="form-group">
	@if ($errors->has($name))
	<div class="errors">
		<p>{{ $errors->first($name) }}</p>
	</div>
	@endif
	<label for="{{ $name }}">{{ $label }}</label>
	<input class="form-controll" type="text" id="{{ $id }}" name="{{ $name }}">
</div>