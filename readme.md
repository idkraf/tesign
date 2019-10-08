# TES IGN
 By Moh Baswan de Gorie

- Anda diharuskan menggunakan native PHP dalam mengerjakan tugas ini
- Anda Tidak Diperbolehkan menggunakan framework ataupun External Library
- Anda diharuskan menyimpan data yang diterima dari response kedalam database
- Aplikasi anda dapat meng-update informasi tanpa adanya duplikasi data
- Anda diharuskan menggunakan repository (git) dalam mengerjakan tugas ini dan jangan lupa untuk 
- menyetel git proyek anda menjadi public

- Kesesuaian pada peraturan diatas, berjalannya program tersebut dengan benar dan sesuai harapan
- Menggunakan konsep OOP (Object Oriented Programming) dalam pengerjaan
- Desain dan struktur dari sistem anda
- Menggunakan konsep DRY ataupun clean code dalam pengerjaan
- Git commit

# Dokumentasi
- General Basic: url untuk semua request adalah:
- https://api-test.internationalglobalnetwork.com/api/

- Request (header)
- GET awmun/ HTTP/1.1
- Content-Type: application/x-www-form-urlencoded
- Authorization: none

# Struktur folder
 ### config
 ### -- database.php
 ### controllers
 ### -- getData.php
 ### -- requestData.php
 ### instaldb
 ### -- users.sql
 ### model
 ### --modelUser.php
 ### getApplicant.php
 ### instal.php

# Tutorial instalasi 
  (example with xampp - biasa digunakan untuk VPS server dengan remote desktop)
1. Cloning git repository dengan cara buka command prompt (cmd) dan ke folder yang anda buat sendiri 
   (example: pada folder htdocs dari folder xampp.) 
2. ketik di cmd: git clone https://github.com/idkraf/tesign.git
3. kemudian ke phpmyadmin dan buat database anda dengan nama: igntes 
5. Masuk ke folder config (example: pada kasus xampp: xampp/htdocs/nama_file_yang_dibuat/config/), 
6. Edit file database.php untuk mengatur hostname, username dan password Mysql
7. Masuk ke root/folder utama (example: folder htdocs/nama_file_yang_dibuat/) dan lakukan instal tabel users dengan perintah : php instal.php
8. Masih tetap di Root utama (example: folder htdocs/nama_file_yang_dibuat/) dan Lakukan request api dengan perintah : php getApplicant.php