# Analisis dan Desain Sistem - Sistem-E-Learning 👋🏻</h1>

## 📖 Pendahuluan
Dibuat untuk memenuhi tugas mata kuliah Analisis dan Desain Sistem

Rizky Farras Abdullah<br>

12030122140223<br>

Analisis dan Desain Sistem<br>

Kelas C (S1 Akuntansi)<br>

<p></p>

<h2 id="tentang">👨🏻‍🏫 Tentang Learnify</h2>

Website edukasi yang dibuat dalam rangka mengatasi solusi pembelajaran kala pandemi, learnify dibuat agar para siswa dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja.

<p></p>

<h2 id="fitur">✨ Fitur Tersedia</h2>

- Autentikasi
  - Login siswa, guru dan admin
  - Daftar sebagai siswa dan guru
- Data Management
  - Pengguna [akses video pembelajaran dan memberi comment juga reaksi]
  - Guru [upload materi berdasarkan kelas dan mata pelajaran]
  - Admin [mengatur data siswa, guru sekaligus materi]
- Diskusi dan Reaksi Dengan Integrasi Disqus
- Ujian Online [segera hadir]

<p></p>

<h2 id="akun">🔑 Daftar Akun Tersedia</h2>

Berikut adalah daftar akun untuk keperluan testing saat anda mencoba aplikasi pertama kali, namun anda juga bisa membuat akun dengan daftar di halaman pendaftaran

| Role  | Email                  | Password | URL                                     																		|
| ----- | ---------------------- | -------- | ----------------------------------------------------------------------------|
| Admin | admin@gmail.com        | admin    | http://localhost/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/welcome/admin |
| Siswa | rizky@gmail.com        | 123456   | http://localhost/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/welcome   		|
| Guru  | rizky@gmail.com        | 123456   | http://localhost/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/welcome/guru	|

<p></p>

<h2 id="syarat">💾 Prasyarat yang Diperlukan</h2>

Berikut adalah daftar layanan dan aplikasi yang wajib dan diperlukan selama anda menjalankan aplikasi learnify jika anda belum menginstall nya maka disarankan untuk menginstall nya terlebih dahulu

- PHP 7, 8 & Web Server [XAMPP, LAMPP, MAMP]
- Web Browser [Chrome, Firefox, Safari & Opera]
- Internet [Karena menggunakan banyak CDN]
- Setting lanjutan PHP [max_upload & post_max di php.ini]

<p></p>

<h2 id="download">🐱‍💻 Panduan Menjalankan & Install Aplikasi</h2>

Untuk menjalankan aplikasi atau web ini kamu harus install XAMPP dan mempunyai setidaknya satu web browser yang terinstall di komputer anda.

```bash
# Clone repository ini atau download di
$ git clone https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning.git

# Buat database
Buat database dengan nama "learnify" di DMBS [phpmyadmin, dll]

# Upload database
Arahkan folder ke learnify/database/learnify.sql & upload ke dbms [phpmyadmin]

# Buka browser
http://localhost/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/welcome 

# Enjoy, jika ingin login maka liat panduan akun diatas
```

<p></p>

## ⌗ Data Flow Diagram dan Entity Relationship Diagram

* **Diagram Konteks**<br>

![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/de96109e-d7a9-4bb7-8104-b3a54fe671b1)



* **Data Flow Diagram Level 1**<br>

![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/b969beee-28b7-43b3-a171-ca63ad8f62bf)



* **Data FLow Diagram Level 2 Proses 1 Login**<br>

![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/f2b63c8f-3c6c-44d7-9223-cf2809b91fe2)



* **Data FLow Diagram Level 2 Proses 2 Pengelolaan User**<br>

![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/e5c3b991-a4fe-4676-85ac-d4e0469cb7df)



* **Data FLow Diagram Level 2 Proses 3 Pengelolaan Kelas**<br>

![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/a5bcf8d5-1cc9-454a-9da5-8fb0a11c69f4)


* **Entity Relationship Diagram**<br>

![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/e59972e3-38de-4701-a158-b60a3e52868e)


## 💾 Database MySQL (phpMyAdmin)

* **Alur Primary Key**<br>

![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/e55dfa5c-4df8-47a2-91dc-ac0fc06c6dc8)

## 🔎 Tampilan Sistem E-Learning Secara Lengkap

![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/58a09dda-9c35-4cd4-bacd-26da2c786606)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/a4b31b48-3843-4bc0-973c-48f643b5a28d)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/f09efe02-b75f-4640-b608-ae9b77c1f923)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/5e32cd53-a3d7-4c01-9a48-5cbc651dc1b9)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/876c053a-a619-48fd-9260-128f397ae0ef)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/227536bf-a67b-4c73-b90b-a9a802d9ea39)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/d1559512-1f09-4018-99a6-30dd11e39b43)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/227b8ba9-9768-409f-8602-249ddd798982)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/da8dd622-dc1d-4849-a070-96d7145cb3a5)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/bee8d169-bd13-4791-baf9-4394db0d43b8)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/47a2d94b-bfb6-4c9b-84dd-c50736d915c1)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/b40a9243-d432-4a14-89cc-522077a87235)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/d54082fb-8c08-40ae-918e-e51ed0d33643)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/93defe2d-e098-4451-a8b9-0c4a7fd17cef)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/d5299d4a-f337-4502-92b9-43e52fd94d6a)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/dbd954a4-88d3-479f-8877-8f744af8759d)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/c3593754-52d0-4fc8-9757-90444010035c)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/f083b1df-f877-4bc8-902e-2ac25f8fbeb3)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/3e9f99c1-251b-4ff0-b9a9-591e0d3cf64e)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/c93ac4b5-da15-4153-abce-9ece7d7462ab)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/d072b6a4-caa7-4e69-b83b-a331fadd5b90)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/ce9aee79-36c3-4505-920b-cd51578fd50c)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/23845e22-6900-478f-9298-a9e642463d89)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/c3ca1998-168a-4781-8ad1-285b7121abbd)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/4c75ac73-9249-47f9-9fc5-b8bca06e7a0b)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/22abd8cd-96bf-454e-b0ff-b6b4d926f87b)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/131e81ac-e765-4670-86eb-738e86fb7509)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/7b021384-8a65-42d4-ad13-ce842a4517a5)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/113993c1-4770-478b-83bc-acb552bb8a37)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/a3fb5a72-2365-4e37-94be-6ed3f5b5e95b)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/ea72e1cb-b07b-400e-98ae-216a56c984e9)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/98f8a9b6-a0f7-40ba-b095-c5e20b720843)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/90174940-07e3-41f1-9eb9-8843852b26ac)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/53a05ca8-ad1c-416d-bedb-ad235cd116ab)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/ece76343-adbb-4ccf-a2f0-a388385d0f32)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/bcdc944a-7925-479f-b416-d70bcc55dd8d)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/a65e0365-39b2-4f94-abec-5a13a265cf65)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/625f822b-99c1-4d26-b0f1-6e14ed844c91)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/19c31a6b-335e-4f61-8a35-44f5ca3f3498)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/bbf66031-20e3-480a-89f8-4666defe9849)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/7274b5c3-2216-4352-a4cd-478bdea37415)


![image](https://github.com/RizkyFarrasAbdullah/Analisis-Dan-Desain-Sistem-Sistem-E-Learning/assets/152374263/443f0773-6a6b-4c78-bc73-3f6bab9eeecd


