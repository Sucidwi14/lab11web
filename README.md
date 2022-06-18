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
![image](https://user-images.githubusercontent.com/101724604/173069823-85f737c2-4ee3-4ccf-9c3e-6d3a84e2eeea.png)

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu mengaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. Kemudian mengubah nama file env menjadi .env lalu setelah itu buka file tersebut dan ubah nilai variable CI_ENVORNMENT menjadi development. Setelah mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. maka hapus tanda tagar (#) pada awal baris CI_ENVIRONMENT. Dan yang terakhir, ubah kode pada file app/Controller/Home.php kemudian hilangkan titik koma (;) pada akhir kode seperti berikut.

![image](https://user-images.githubusercontent.com/101724604/173071473-730f72a0-a8d6-4e63-bce9-82570006bb9f.png)

Maka hasilnya akan terjadi error seperti berikut.

![image](https://user-images.githubusercontent.com/101724604/173080741-0b385558-d927-4865-b730-e51863539ad6.png)

5. Membuat Route Baru. Menambahkan kode di dalam Routes.php seperti berikut.

![image](https://user-images.githubusercontent.com/101724604/173074122-a22228ed-6970-4dd0-94c6-d0e172bf5558.png)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about seperti berikut. Maka hasilnya akan terjadi error, yang artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

![image](https://user-images.githubusercontent.com/101724604/173075130-26e37c18-f7d9-4c25-aa3b-9a1f4d34dfe8.png)

6. Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut
![image](https://user-images.githubusercontent.com/101724604/173094636-45f15f45-8cd9-42a4-9e56-1da16e39a066.png)

7. Auto Routing
Secara default fitur autoroute pada Codeigniter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variablenya. Untuk menonaktifkan ubah nilai true menjadi false
![image](https://user-images.githubusercontent.com/101724604/173098098-ef8d1c73-4684-4859-b1f9-849e011713b4.png)

8. Membuat View
Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut.
![image](https://user-images.githubusercontent.com/101724604/173098978-82427eaf-0177-4b53-b624-1a8d4d6ebf92.png)

Ubah method about pada class Controller Page menjadi seperti berikut:
![image](https://user-images.githubusercontent.com/101724604/173099867-914ed065-d1f3-493d-ab20-03cbd743b316.png)

Maka hasilnya akan seperti berikut:
![image](https://user-images.githubusercontent.com/101724604/173100145-3668f409-6a48-40ff-8d2b-dff48361beb3.png)

9. . Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplementasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.

Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout) Kita akan gunakan layout yang pernah dibuat pada praktikum 4.
![image](https://user-images.githubusercontent.com/101724604/173111399-79c564da-da5d-4672-8a43-881f3fe69fb8.png)


Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php
![image](https://user-images.githubusercontent.com/101724604/173104474-e40298b5-c421-49e8-a38c-3b2c8df7cef5.png)
![image](https://user-images.githubusercontent.com/101724604/173104634-60f0318a-b560-41f4-8164-c916d69fd7c8.png)

Maka hasilnya seperti berikut:
![image](https://user-images.githubusercontent.com/101724604/173109848-d8e5e997-cc7f-4981-9d44-b2b43c73e26b.png)

PERTANYAAN DAN TUGAS

Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.
![image](https://user-images.githubusercontent.com/101724604/173110959-6a19666f-ea29-444e-9a05-6ea6cf4d9132.png)

![image](https://user-images.githubusercontent.com/101724604/173111894-85b48e7d-2b87-4d46-8dbf-03e7445fecb5.png)








