<div class="form-group">
	@if ($errors->has($name))
	<div class="errors">
		<p>{{ $errors->first($name) }}</p>
	</div>
	@endif
	<label for="{{ $name }}">{{ $label }}</label>
	<textarea class="form-controll" name="{{ $name }}"></textarea>
</div>