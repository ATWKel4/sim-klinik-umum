Nama : Sistem Informasi Manajemen Klinik Umum

Deskripsi : Untuk satu dokter saja, ada sisi user dan sisi klink

Sisi user (web) : Bisa login, pilih keluhan, booking, dan antri

Sisi Klinik (web) : Bisa registrasi user/member/pasien baru, bisa nampilkan antrian terkini, bisa memasukkan resep obat apa saja dari dokter ke bagian farmasi, bisa cetak report hari ini, set jadwal, cetak invoice buat bayar obat 

Fitur Klinik :
Registrasi pasien (users)
Jadwal Klinik (jadwal)
Antrian (users_id, antrian, jadwal_id)
Rekam Medis (users_id, penyakit_id, resep_id, tindakan_id, jadwal_id, rekam)
Resep pasien (obat_id, rekam_id, resep)
Invoice (resep_id, invoice)

Fitur User :
Register/Login (users)
Booking (users_id, antrian_id, booking)
Antrian (users_id, antrian, jadwal_id)

Users { id, nama, tanggal_lahir, alamat, jenis_kelamin }
Jadwal { id, hari, tanggal, waktu }
Antrian { id, jadwal_id, users_id }
Rekam { id, users_id, penyakit_id, tindakan_id, resep_id, jadwal_id }
Resep { id, obat_id, rekam_id, catatan }
Obat { id, nama, kegunaan, dosis, kategori, harga, stock, aturan_pakai, tanggal_kadaluarsa }
Invoice { id, resep_id, harga_total, catatan, status, tanggal_pembayaran }
Booking { id, users_id, antrian_id }
Penyakit { id, nama }
Tindakan { id, diagnosis, deskripsi }

# Petunjuk Set-up
## Awal Clone/pull
- Masuk ke folder project
- Gunakan perintah "composer install"
- "npm install" (opsional kalau ndak ada ketergantungan dengan javascript)
- Buat copy dari file yang namanya .env.example lalu ganti namanya menjadi .env
- lalu jalankan "php artisan key:generate" untuk membuat kode (untuk encoding)
- coba run dengan "php artisan serve"

## Proses Pengerjaan dengan Backend DB
- "git pull origin <nama_branch>" diusahakan setiap kali sebelum mengerjakan sesuatu agar mengikuti update terbaru dahulu
- isilah variabel konstanta DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, dan DB_PASSWORD sesuai keterangan database
- untuk menyamakan database run "php artisan migrate"
- lalu jalankan kembali dengan "php artisan serve"

## Proses Pengerjaan dengan Backend DB yang Telah Ada Isi Default (Seeder)
- Gunakan perintah "php artisan migrate:refresh --seed"
- cek db (seperti localhost/phpmyadmin) apakah sudah ada isi defaultnya?
- lalu jalankan kembali dengan "php artisan serve"

## Mengatasi Conflict Saat Ingin Push ke Branch
- simpan dulu aktivitas perubahan Anda yang terakhir dengan "git add .", "git commit -m <pesan>"
- pull lagi branchnya untuk mendapatkan perubahan terbaru
- pilih perubahan mana yang ingin disimpan dengan menggunaka bantuan dari editor vscode atau "git mergetool"
- lalu push kembali ke branch dengan "git push -u origin <nama_branch>"
    
## Mengatasi Apabila Tidak Muncul Gambar Setalah Pull (21/11/2020)
- jalankan php artisan storage:link (untuk membuat shortcut/symbolic link ke folder storage yang awalnya tidak ada)
