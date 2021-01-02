@extends('user.layout')
@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Selamat datang di Klinik Sehat<h1>
      <h2>Silahkan mengambil nomor Antrian dengan <b>Klik Tombol</b> di bawah ini :</h2>
      <a href="{{ URL::to('/antrian/cetak') }}" class="btn-get-started scrollto"><b>Ambil Nomor Antrian</b></a>
    </div>
  </section><!-- End Hero -->
<!-- ======= Why Us Section ======= -->
<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
<div class="container">

    <div class="row">
    <div class="col-lg-4 d-flex align-items-stretch">
        <div class="content">
        <h3>Nomor Antrian Sekarang</h3>
        <p style="margin: 0; padding: 0;">Nomor :  </p>
        <p style="margin: 0; padding: 0; font-size: 80px; text-align: center;">{{ $nomor->count() }}</p>
        </div>
    </div>
    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="icon-boxes d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-xl-4 d-flex align-items-stretch">
            <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-receipt"></i>
                <h4>Sistem antrian online</h4>
                <p>Anda dapat mengambil nomor antrian secara online di hari yang anda inginkan.</p>
            </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
            <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Rekam medis pasien</h4>
                <p>Riwayat medis anda akan disimpan di sistem kami dengan keamanan yang sudah terjamin.</p>
            </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
            <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-images"></i>
                <h4>Banyak promo diskon</h4>
                <p>Kami mengadakan promo harga konsultasi di hari-hari tertentu.<br> S&K Berlaku.</p>
            </div>
            </div>
        </div>
        </div><!-- End .content-->
    </div>
    </div>

</div>
</section><!-- End Why Us Section -->

<!-- ======= Dokter Section ======= -->
<section id="Dokter" class="Dokter">
<div class="container">

    <div class="section-title">
    <h2>Dokter</h2>
    <p>Percayakan kesehatan anda kepada Dokter kami yang sudah bersertifikasi internasional</p>
    </div>
        <div class="member d-flex align-items-start">
        <div class="pic"><img src="assets/img/dokter/dokter.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
            <h4>dr. Bramantyo Subagyo</h4>
            <span>Dokter umum </span>
            <p>Alumni Universitas Indonesia '80</p>
            <div class="social">
            <a href=""><i class="ri-twitter-fill"></i></a>
            <a href=""><i class="ri-facebook-fill"></i></a>
            <a href=""><i class="ri-instagram-fill"></i></a>
            <a href=""> <i class="ri-linkedin-box-fill"></i></a>
            </div>
        </div>
        </div>
    </div>
</div>
</section><!-- End Dokter Section -->
@endsection
