<html>
<head>
	<title>Antrian Klinik Sehat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		center {
			line-height: 1%;
			padding-top: 300;
  			text-align: center;
		}
		center p {
  			font-size: 12px		
		}
		.nama-klinik{
			font-size: 14px;
		}
		.nomor-antrian{
			font-size: 48px;
			padding-top: 25px;
		}
	</style>
</head>
<body>
	<center>
		<p class="nama-klinik"><b>Klinik Sehat</b></p>
		<p>Jl. Raya ITS Sukolilo Surabaya</p>
		<p>Telp : +62 812 3456 7890</p>
		<!-- batas -->
		<p><b>ANTRIAN KONSULTASI</b></p>
		<p class="nomor-antrian">{{ $nomor->count() }}</p>
		<p><b>D8C47</b></p>
		<p><b>3578024401550002</b></h5>
		<p><b>MUZDALIFA</b></p>
		<p>Hadir Pada : </p>
		<p><b>1 Jan 2021 jam 07:45:00 - 08:00:00</b></p>
		<p>Kode Pasien : <b>000247</b></p>
	</center>
 
</body>
</html>