<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title> @yield('title') </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/came_layout.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-4.4.1-dist/css/bootstrap.min.css') }}">
	@yield('css_link')
</head>

<body>

	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a class="navbar-brand logo" href="{{ action('CamecafeController@getTop') }}">camecafe</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{ action('CamecafeController@getAbout') }}">about<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ action('CamecafeController@getPhotos') }}">フォトギャラリー</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							ブログ
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							@foreach ($hoge as $blog_type)
								<a  class="dropdown-item" href="{{ action('CamecafeController@getBlogs') }}/{{$blog_type['id']}}">{{$blog_type['blog_type']}}</a>
							@endforeach
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ action('CamecafeController@getEvents') }}">イベント活動</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ action('CamecafeController@getContact') }}">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ action('CamecafeController@getFaq') }}">FAQ</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
	</header>

	<div class="container-fluid img-hidden">
		<div class="read">
			<div class="hero">
			<h1 class="main-title">camera and cafe</h1><br>
			<div class="main-sub-title">東京初心者向けカメラサークル</div>
		</div>
	</div>






		<div class="content">
			<div class="main">
				@yield('content_main')
			</div>
			<div class="sidebar">dd</div>
		</div>

		<div class="footer">
			<p class="footer-word">footer</p>
		</div>
	</div>

	<script src="{{ asset('assets/jquery/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/bootstrap-4.4.1-dist/js/bootstrap.min.js') }}"></script>
</body>

</html>