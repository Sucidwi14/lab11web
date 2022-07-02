# lab11web

### Nama  : SUCI DWI FRATIWI
### Kelas : TI.20.D1
### NIM   : 312010143

### Praktikum 11: PHP Framework (Codeigniter)
### Langkah-langkah
1. Mengaktifkan Ekstensi
- Aktifkan ekstensi tersebut melalui XAMPP Control Panel pada bagian Apache dengan cara klik Config -> PHP.ini seperti berikut.
![Screenshot (305)](https://user-images.githubusercontent.com/101787968/174429021-75e0a8f6-05ad-4e6a-879d-249a21ce13b0.png)

- Lalu pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan seperti berikut. Kemudian simpan kembali filenya dan restart Apache web server.

![Screenshot (306)](https://user-images.githubusercontent.com/101787968/174429090-20ae8c50-880e-4841-b7a5-cdff8ffdeb6c.png)
2. Instalasi CodeIgniter 4
- Codeigniter dapat didownload dari website https://codeigniter.com/download

- Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.

- Ubah nama directory framework-4.x.xx menjadi ci4.

- Buka browser dengan alamat http://localhost/lab11web_ci/ci4/public/ Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual seperti berikut.

![Screenshot (307)](https://user-images.githubusercontent.com/101787968/174429120-3832949c-3b63-4198-b068-3227019d9da5.png)

3. Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt, lalu arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (C:\xampp\htdocs\Lab11web_ci\ci4). Kemudian setelah itu jalankan perintah untuk memanggil CLI Codeigniter

![Screenshot (309)](https://user-images.githubusercontent.com/101787968/174429158-779a2cde-5d5f-4e8d-af7d-0923566d5e96.png)

4.Mengaktifkan Mode Debugging Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.
![Screenshot (311)](https://user-images.githubusercontent.com/101787968/174429817-d67afe52-ef35-4005-88f1-57f2ad738a57.png)

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu mengaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. Kemudian mengubah nama file env menjadi .env lalu setelah itu buka file tersebut dan ubah nilai variable CI_ENVORNMENT menjadi development. Setelah mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. maka hapus tanda tagar (#) pada awal baris CI_ENVIRONMENT. Dan yang terakhir, ubah kode pada file app/Controller/Home.php kemudian hilangkan titik koma (;) pada akhir kode seperti berikut.

![Screenshot (312)](https://user-images.githubusercontent.com/101787968/174461279-3bfacf28-7463-489e-a151-b519ba3d69c1.png)

Maka hasilnya akan terjadi error seperti berikut.

![Screenshot (313)](https://user-images.githubusercontent.com/101787968/174461283-d0f89f22-59af-4721-8a3f-422b1fb2e12b.png)

5. Membuat Route Baru. Menambahkan kode di dalam Routes.php seperti berikut.


Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about seperti berikut. Maka hasilnya akan terjadi error, yang artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

![Screenshot (314)](https://user-images.githubusercontent.com/101787968/174461310-99b97e36-e574-42ac-a861-223940e6f312.png)

6. Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut
![Screenshot (315)](https://user-images.githubusercontent.com/101787968/174461318-c1aae4e6-b185-4f33-9933-6ae98f009b0e.png)

7. Auto Routing
Secara default fitur autoroute pada Codeigniter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variablenya. Untuk menonaktifkan ubah nilai true menjadi false
![Screenshot (317)](https://user-images.githubusercontent.com/101787968/174461331-0e850516-c6a1-43ae-a971-aa00c921bf6d.png)

8. Membuat View
Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut.
![image](https://user-images.githubusercontent.com/101787968/174806219-7bfe2114-c2d6-43c6-a261-19876185f848.png)

Ubah method about pada class Controller Page menjadi seperti berikut:
![image](https://user-images.githubusercontent.com/101787968/174806585-5e886593-b0fc-485f-abd9-4a595dd4a26c.png)

Maka hasilnya akan seperti berikut:
![image](https://user-images.githubusercontent.com/101787968/174806831-b9cd00f8-7508-4884-889c-e2d18d95ec2a.png)

9. . Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplementasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.

Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout) Kita akan gunakan layout yang pernah dibuat pada praktikum 4.
![image](https://user-images.githubusercontent.com/101787968/174806918-bf376b83-c69c-4e23-9c73-fd23ffe76670.png)


Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php
![Screenshot (339)](https://user-images.githubusercontent.com/101787968/174807168-a664e60f-13a1-4190-89c1-866efe8b6439.png)
![image](https://user-images.githubusercontent.com/101787968/174807248-769a2d6a-51db-4355-8daa-ddcab2db0c76.png)

Maka hasilnya seperti berikut:
![image](https://user-images.githubusercontent.com/101787968/174807345-a71d4c82-022b-4c42-a9f1-8c04103acb2b.png)

PERTANYAAN DAN TUGAS

Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.
![image](https://user-images.githubusercontent.com/101787968/174808319-474f7a45-27b7-4491-9a6a-56c952d2edec.png)

![image](https://user-images.githubusercontent.com/101787968/174809334-07bf8513-dc5e-4c0c-9867-8ac8acf72b8e.png)

#Praktikum 12: Framework Lanjutan (CRUD) Langkah-langkah Praktikum

Persiapan

Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP seperti berikut. #Praktikum 12: Framework Lanjutan (CRUD) Langkah-langkah Praktikum

Persiapan

Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/176345501-550efb72-9576-4e46-beb3-0adb08c41ed5.png)

1. Membuat database kemudian membuat Tabel dan masukkan kode pada database query seperti berikut.
2. Konfigurasi koneksi database Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Kemudian melakukan konfigurasi dengan cara mengubah beberapa kode pada file htdocs\lab11_php_ci\ci4.env. Lalu cari pada line DATABASE dan hilangkan tanda pagar (#) didepan seperti berikut ini.

![image](https://user-images.githubusercontent.com/101787968/176348140-b8acd57a-3255-4eab-8bd3-9420d069a5aa.png)

3. Membuat Model Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php lalu masukkan kode seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/176348345-dbaa2edd-86ad-4df5-94d2-d6307291c68e.png)

4. Membuat Controller Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers lalu masukkan kode seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/176345856-e535003d-b62e-4180-b7a6-d8cc231793f9.png)

5. Membuat View Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru
dengan nama index.php. image

![image](https://user-images.githubusercontent.com/101787968/176345819-ef68db30-48a4-4459-9cb6-583adf4b07ec.png)

selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel maka hasilnya akan seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/176345742-30caec5e-242c-460a-bcba-084fcdb6a907.png)

terlihat belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database query agar dapat ditampilkan datanya seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/176346080-1fe20508-4284-49e0-85f2-e8c487c655d2.png)

lalu refresh kembali browser, sehingga akan ditampilkan hasilnya seperti berikut.

![Screenshot (370)](https://user-images.githubusercontent.com/101787968/177013858-82f65bff-88f8-4e95-877e-08e7f90208f4.png)

6. Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![image](https://user-images.githubusercontent.com/101787968/177013898-51860690-2ad6-43b9-b6a1-dd439d3b7825.png)

7. Membuat View Detail Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/177013910-a35246ce-123c-45be-a433-64f89b8971cf.png)

8. Membuat Routing untuk artikel detail Buka kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail maka hasilnya akan seperti berikut.

![Screenshot (372)](https://user-images.githubusercontent.com/101787968/177013922-c7f1f51a-f4ff-488b-b807-61dd54d15594.png)

9. Membuat Menu Admin Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index() seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/177013948-85fe2b40-d3f1-454e-b1dc-30f68d2bcc44.png)

selanjutnya buat view untuk tampilan admin dengan nama admin_index.php seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/177013959-06134013-5643-4b34-b7e2-29b4e6734870.png)

setelah itu tambahkan routing untuk menu admin seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/177013988-12d9cf3b-6039-48db-aeb4-3eb02cca2007.png)

Kemudian akses menu admin dengan url http://localhost:8080/admin/artikel seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/177014049-52d2f879-5884-485c-a3bf-aa236f384d7b.png)

10. Menambah Data Artikel

![Screenshot (385)](https://user-images.githubusercontent.com/101787968/177014082-c8e1ff89-11cc-4dda-90b6-a58c1e2031d8.png)

Tambahkan fungsi/method baru pada Controller Artikel dengan nama add() seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/176346652-53d082db-db2d-4db6-8f42-443a2d4db585.png)

Kemudian buat view untuk form tambah dengan nama form_add.php seperti berikut.

![image](https://user-images.githubusercontent.com/101787968/177014101-3a4703f8-841a-4903-a0a1-f619d8de2f8d.png)
![Screenshot (377)](https://user-images.githubusercontent.com/101787968/177014130-6bed77dd-15f3-404b-91db-71e28570c6fa.png)

Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![image](https://user-images.githubusercontent.com/101787968/177014165-0185d06d-4271-4a08-ad7a-6c0c1073988c.png)

Kemudian buat view untuk form tambah dengan nama form_edit.php

![image](https://user-images.githubusercontent.com/101787968/177014211-8ec24df1-601f-413c-85c4-0382f1142548.png)
