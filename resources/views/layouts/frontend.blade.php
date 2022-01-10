<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title') | Trouble Watch Store</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('assets/img/mdb-favicon.ico') }}" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  </head>
  <body>

    @include('layouts.inc.front-navbar')

    <main>
        @yield('content')
    </main>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset ('assets/js/mdb.min.js')"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
