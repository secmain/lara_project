@extends('camecafe.came_layout')

@section('title')
toppage
@endsection

@section('content_main')	
	<div class="container container-m">	
		<div class="row">
			<div class="col-md-6">
				<img class="img-fluid" src="{{ asset('assets/image/コスモス.jpg') }}">
			</div>
			<div class="col-md-6">
				<h1>sampletext</h1>
				<p class="top-desc">ccccccccc</p>			
			</div>
		</div>
	</div>

	<br><br>

	<div class="container container-m">
		<div class="row">
			@foreach($new_blogs as $new_blog)
			<div class="col-md-{{ $col_count }}">
				<div class="card" style="width: 18rem;">
				  <img class="img-fluid" src="{{ asset('assets/image/コスモス.jpg') }}">
				  <div class="card-body">
				    <h5 class="card-title">{{ $new_blog->title }}</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	<div class="container container-m"></div>
	  <div class="row">
	    <div class="col-md-4  img-hidden">
	      <img src="image/d.jpg" alt="img" class="img-fulied">
	    </div>
	    <div class="col-md-4  img-hidden">
	      <img src="image/d.jpg" alt="img" class="img-fulied">
	    </div>
	    <div class="col-md-4  img-hidden">
	      <img src="image/d.jpg" alt="img" class="img-fulied">
	    </div>
	  </div>
	</div>
@endsection