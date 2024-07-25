<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <nav class="navbar navbar-light bg-light" style=" border-bottom-style: solid;
  border-bottom-color: #C9B79C;">
<div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
     
        
    
        <img src="{{ asset('img/ML-06.1.svg') }}" width="150" height="70" alt="">
        

    </a>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Ideas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Pattern Blocks</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/skirt">Skirt</a></li>
          <li><a class="dropdown-item" href="/bodice">Bodice</a></li>
          <li><a class="dropdown-item" href="#">Dress</a></li>
          <li><a class="dropdown-item" href="#">Pant</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="/skirtPattern"> Pattern</a></li>
        </ul>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/client">Client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://instagram.com/xmaica">
          <i class="bi bi-instagram" style="font-size: 1rem; color: #C9B79C;"></i>
        </a>
      </li>
    </ul>
    
    
</nav>



</div>


<br>
<br>


    @yield('content')
    
</body>
</html>