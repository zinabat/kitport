<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Zina Ramirez">
    <title>{{ config('app.name') }} Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @yield('head')
  </head>
  <body>

<div class="container-fluid no-gutter">
  <div class="row">
    <nav class="col-md-3 col-lg-2 bg-light sidebar">
      <div class="sidebar-sticky">
        <button class="btn">
          {{ Auth::user()->name }}
        </button>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'admin.home') active @endif" href="{{ route('admin.home') }}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'pages.index') active @endif" href="#">
              <span data-feather="file"></span>
              Pages
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'posts.index') active @endif" href="{{ route('posts.index') }}">
              <span data-feather="shopping-cart"></span>
              Posts
            </a>
            <ul class="nav">
              <li class="nav-item">
                <a href="{{ route('posts.create') }}" class="nav-link @if(Route::currentRouteName() == 'posts.create') active @endif">Create Post</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Image Library
            </a>
          </li>
        </ul>

       </div>
     </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('title')</h1>
      </div>
      @yield('content')
    </main>
  </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@yield('footer')
</body>
</html>
