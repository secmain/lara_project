<div class="pure-control-group">
	@if ($errors->has($name))
	<div class="errors">
		<p>{{ $errors->first($name) }}</p>
	</div>
	@endif
	<label for="{{ $name }}">{{ $label }}</label>
	<textarea name="{{ $name }}"></textarea>
</div>