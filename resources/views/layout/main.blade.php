<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>E-Transkip | {{$title}} </title>
    <!-- CSS files -->
    <link href="/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="/css/tabler.css" rel="stylesheet"/>
    <link href="/css/tabler.min.css" rel="stylesheet"/>
    <link href="/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="/css/demo.min.css" rel="stylesheet"/>

    {{-- Date Picker CSS --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  </head>
  <body class="antialiased">

    <div class="wrapper">
      @include('layout.navbar')
      @yield('content')
      @include('layout.footer')
    </div>
  </body>

  {{-- Date Picker JS --}}
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <script>
  $(function() {
    $('input[name="birthday"]').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 1901,
      maxYear: parseInt(moment().format('YYYY'),10)
    }, function(start, end, label) {
      var years = moment().diff(start, 'years');
      alert("You are " + years + " years old!");
    });
  });
  </script>
</html>
