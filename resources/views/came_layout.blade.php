<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title> @yield('title') </title>
	<link rel="stylesheet" type="text/css" href="/home/mob/hon_laravel/resources/views/douga.css">
</head>

<body>
	<div class="container">
		
		<div class="header">
			<div class="navi-bar">
				<div class="logo">
					<img src="IMGP9293.JPG" class="top-baner">	
				</div>
				<div class="menu">
					<ul>
						<li class="menu-3"><a href="#">TOP</a></li>
						<li class="menu-3"><a href="blog">ブログ</a></li>
						<li class="menu-3"><a href="photo">フォトギャラリー</a></li>
						<li class="menu-3"><a href="event">イベント活動</a></li>
						<li class="menu-3"><a href="contact/contact">Contact</a></li>
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
			@yield('content')
		</div>

		<div class="footer">
			<p class="footer-word">footer</p>
		</div>
	</div>
</body>

</html>