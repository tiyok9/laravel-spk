<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dash.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark  p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
  @auth
  <div class="container d-flex flex-row-reverse">
    <ul class="navbar-nav ">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{auth()->user()->name}}
        </a>
        <ul class="dropdown-menu">
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </li>
          <li><a class="dropdown-item" href="/">Dashboard</a></li>
          
        </ul>
      </li>
    
    </ul>
  </div>
 @endauth
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link  " aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          @can('admin')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pegawai') ? 'active' : ''}} " href="/pegawai">
              <span data-feather="file" class="align-text-bottom"></span>
              Anggota
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('category') ? 'active' : ''}}" href="/category">
              <span data-feather="shopping-cart" class="align-text-bottom" ></span>
              Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('nilai') ? 'active' : ''}}" href="/nilai">
              <span data-feather="users" class="align-text-bottom"></span>
              Nilai
            </a>
          </li>
          @endcan
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('normalisasi') ? 'active' : ''}}" href="/normalisasi">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Normalisasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('saw') ? 'active' : ''}}" href="/saw">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Saw
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('rangking') ? 'active' : ''}}" href="/rangking">
              <span data-feather="layers" class="align-text-bottom"></span>
              Rangking
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       @yield('content')
      </div>
    </main>
  </div>
</div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
  </body>
</html>
