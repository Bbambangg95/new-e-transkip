<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>E-Transkip</title>
    <!-- CSS files -->
    <link href="{{HTML::style('css/tabler-flags.min.css')}}" rel="stylesheet"/>
    <link href="css/tabler.css" rel="stylesheet"/>
    <link href="css/tabler.min.css" rel="stylesheet"/>
    <link href="css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="css/demo.min.css" rel="stylesheet"/>
  </head>
  <body class="antialiased">

    <div class="wrapper">
      @include('layout.navbar')
      @yield('content')
      @include('layout.footer')
    </div>
  </body>
</html>
