<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand logo" href="#"><img src="{{ asset('assets/image/IMGP9293.JPG') }}" class="d-inline-block top-baner">camecafe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="{{ action('CamecafeController@getPhotos') }}">フォトギャラリー</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ブログ
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="{{ action('CamecafeController@getBlogs') }}">Action</a>
          <a href="{{ action('CamecafeController@getBlogs') }}">Another action</a>
          <a href="{{ action('CamecafeController@getBlogs') }}">Something else here</a>
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
