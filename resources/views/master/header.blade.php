<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand light text-white">Teresa Ribeiro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <ul class="navbar-nav mr-auto">
    <li class="nav-item {{ Request::routeIs('home') ? 'active' : ''}}">
      <a class="nav-link {{ Request::routeIs('home') ? 'text-white' : 'text-white-50'}}" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item {{ Request::routeIs('gallery') ? 'active' : ''}}">
      <a class="nav-link {{ Request::routeIs('gallery') ? 'text-white' : 'text-white-50'}}" href=" {{ route('gallery') }}">Gallery</a>
    </li>
    <li class="nav-item {{ Request::routeIs('blog') ? 'active' : ''}}">
      <a class="nav-link {{ Request::routeIs('blog') ? 'text-white' : 'text-white-50'}}" href="{{ route('blog') }}">Blog</a>
    </li>
    <li class="nav-item {{ Request::routeIs('contacts') ? 'active' : ''}}">
      <a class="nav-link {{ Request::routeIs('contacts') ? 'text-white' : 'text-white-50'}}" href="{{ route('contacts') }}">Contact Us</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
  </form>
  </div>
</nav>