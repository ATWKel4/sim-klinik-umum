<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Klinik Sehat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--Logo -->
  <link href="assets/img/logo-klinik-sehat.png" rel="icon">

  @include('user.style')

</head>

<body>

    @include('user.header')

  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  @include('user.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('user.script')

</body>

</html>
