<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
  <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
  <div class="row g-0">
    <!-- sidebar -->
    <div class="p-3 col fixed text-white bg-dark">
      <a class="text-white text-decoration-none" href="{{ route('admin.home.index') }}">
        <span class="fs-4">Admin Panel</span>
      </a>
      <hr />
      <ul class="nav flex-column">
        <li><a class="nav-link text-white" href="{{ route('admin.home.index') }}">Home</a></li>
        <li><a class="nav-link text-white" href="{{ route('admin.product.index') }}">Products</a></li>
        <li>
          <a class="mt-2 btn bg-primary text-white" href="{{ route('home.index') }}">Go back to the home page</a>
        </li>
      </ul>
    </div>
    <!-- sidebar -->
    <div class="col content-grey">
      <nav class="p-3 shadow text-end">
        <span class="profile-font">Admin</span>
        <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
      </nav>
      <div class="g-0 m-5">
        @yield('content')
      </div>
    </div>
  </div>
  <footer class="copyright py-4 text-center text-white">
    <div class="container">
      <small>
        Copyright - <a class="text-reset fw-bold text-decoration-none" href="https://x.com" target="_blank">
          Jack Sparrow </a>
      </small>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>

</html>
