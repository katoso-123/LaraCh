<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
</head>
<body class="text-center text-monospace font-weight-bold"> 
  <header>
    <nav class="navbar navbar-light bg-light justify-content-center">
      <a class="navbar-brand " href="{{ url('/') }}">LaraCh</a>
    </nav>
  </header>
  <div class = "wrap">
    @yield('content')
  </div>
</body>
</html>