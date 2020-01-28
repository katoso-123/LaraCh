<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <a href="{{ url('/') }}">LaraCh</a>
  </header>
  <div class = "wrap">
    @yield('content')
  </div>
</body>
</html>