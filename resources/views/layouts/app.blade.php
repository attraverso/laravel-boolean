<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>I believe I can Boolean</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;1,400&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  
</head>
<body>
  @include('partials.header')
  @yield('content')
  @include('partials.footer')
</body>
</html>