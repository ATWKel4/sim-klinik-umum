<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Klinik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  @include('user.style')

</head>

<body>

    @include('user.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Selamat datang di Klinik<h1>
      <h2>Kami melayani dengan sepenuh hati</h2>
      <a href="#about" class="btn-get-started scrollto"><b>Login</b></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  @include('user.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('user.script')

</body>

</html>