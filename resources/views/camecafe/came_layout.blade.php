<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title> @yield('title') </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/came_layout.css') }}">
	@yield('css_link')
</head>

<body>
	<div class="container">
		
		<div class="header">
			<div class="navi-bar">
				<div class="logo">
					<img src="{{ asset('assets/image/IMGP9293.JPG') }}" class="top-baner">	
				</div>
				<div class="menu">
					<ul>
						<li class="menu-3"><a href="{{ action('CamecafeController@getTop') }}">TOP</a></li>
						<li class="menu-3"><a href="{{ action('CamecafeController@getBlogs') }}">ブログ</a></li>
						<li class="menu-3"><a href="{{ action('CamecafeController@getPhotos') }}">フォトギャラリー</a></li>
						<li class="menu-3"><a href="{{ action('CamecafeController@getEvents') }}">イベント活動</a></li>
						<li class="menu-3"><a href="{{ action('CamecafeController@getContact') }}">Contact</a></li>
						<li class="menu-3"><a href="{{ action('CamecafeController@getFaq') }}">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="hero">
			<div class="read">
				<h1 class="main-title">camera and cafe</h1>
				<p class="main-sub-title">東京初心者向けカメラサークル</p>
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
</body>

</html>