<div class="pure-control-group">
	@if ($errors->has($name))
	<div class="errors">
		<p>{{ $errors->first($name) }}</p>
	</div>
	@endif
	<label for="{{ $name }}">{{ $label }}</label>
	<input type="text" id="{{ $id }}" name="{{ $name }}">
</div>