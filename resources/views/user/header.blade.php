<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
<div class="container d-flex">
    <div class="contact-info mr-auto">
    <i class="icofont-envelope"></i> <a href="mailto:dr.bramatyo@klinik.com">klinik.sehat@mail.com</a>
    <i class="icofont-phone"></i> +62 812 3456 7890
    <i class="icofont-google-map"></i> Jl. Raya ITS Sukolilo Surabaya
    </div>
    <div class="social-links">
    <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
    <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
    <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
    <a href="#" class="skype"><i class="icofont-skype"></i></a>
    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
    </div>
</div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
<div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.html">Klinik Sehat</a></h1>
   
    <nav class="nav-menu d-none d-lg-block">
    <ul style="list-style-type: none;">
        <li class="active"><a href="{{ URL::to('/beranda') }}">Beranda</a></li>
        @if (Auth::guard('user')->check())
            <li><a href="#Dokter">Dokter</a></li>
            <li style="padding-left: 15px"><a href="{{ URL::to('/profile') }}" style="margin: 0; padding: 10px; color: white" class="appointment-btn scrollto"><i class="bx bx-user"></i> <b>Hi, {{ Auth::guard('user')->user()->nama }}</b></a></li>
        @else
            <li><a href="#about">Tentang klinik</a></li>
            <li><a href="#pelayanan">Pelayanan</a></li>
            <li><a href="#Dokter">Dokter</a></li>
            <li><a href="#contact">Kontak kami</a></li>
        @endif

    </ul>
    </nav><!-- .nav-menu -->
        
    @if (Auth::guard('user')->check())
        <a href="{{ URL::to('/keluar') }}" style="background-color: red;" class="appointment-btn scrollto"><b>Logout</b></a>
    @else
        <a href="{{ URL::to('/masuk') }}" class="appointment-btn scrollto"><b>Login</b></a>    
    @endif
</div>
</header><!-- End Header -->
