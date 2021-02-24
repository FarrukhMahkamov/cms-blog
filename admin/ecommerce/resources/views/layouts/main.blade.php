<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <link rel="stylesheet" href="{{asset ('test/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset ('test/css/bootstrap.css')}}">

</head>
<body>

  <!-- Start your project here-->
       @include('layouts.navbar')
       @yield('content')
       @include('layouts.footer')

  <!-- End your project here-->

  <script type="text/javascript" src="{{ asset ('test/js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ asset ('test/js/bootstrap.bundle.js') }}"></script>

  <script type="text/javascript" src="{{ asset ('test/js/bootstrap.min.js') }}"></script>

  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
