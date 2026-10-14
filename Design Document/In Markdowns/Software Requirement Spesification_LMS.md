SPESIFIKASI KEBUTUHAN PERANGKAT LUNAK
LEARNING MANAGEMENT SYSTEM (LMS) CELOE TELKOM
UNIVERSITY
untuk:
Pengguna Aplikasi CeLOE LMS Telkom University.
Dipersiapkan oleh:
KELOMPOK ODET
Program Studi S1 Informatika
Fakultas Informatika
Universitas Telkom
2025
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 1 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Program Studi
S1 Informatika

-
Halaman
|     |     | Fakultas  |     | SKPL - Nomor Dokumen  |     |     |     |     |
| --- | --- | --------- | --- | --------------------- | --- | --- | --- | --- |
Informatika
|     |     |     |     | Revisi  | <nomor revisi>  |     |     | Tgl: <isi tanggal>  |
| --- | --- | --- | --- | ------- | --------------- | --- | --- | ------------------- |

1. Daftar Perubahan
| Revisi  |     |     |     |     | Deskripsi  |     |     |     |
| ------- | --- | --- | --- | --- | ---------- | --- | --- | --- |
A   Perubahan alur pada Use Case Diagram.

B  Perbaikan alur pada Activity diagram
C  Menambahkan jumlah Functional Requirement (FR) dari 6 FR ke 8 FR
D  Perbaikan penggunaan kata/bahasa.
E  Perubahan Penempatan Activity Diagram ke bawah Use Case Scenario
yang Terkait.
F  Perbaikan alur swimlane pada beberapa Activity Diagram
| G   |     |     |     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |

| INDEX  | -   | A       |         | B  C    | D       | E       | F   | G   |
| ------ | --- | ------- | ------- | ------- | ------- | ------- | --- | --- |
| TGL    |     | 17-11-2 | 17-11-2 | 28-10-2 | 28-10-2 | 17-11-2 |     |     |

|          |     | 025    | 025     | 025   | 025     | 025     |        |     |
| -------- | --- | ------ | ------- | ----- | ------- | ------- | ------ | --- |
| Ditulis  |     | Putra  | Semua   | Dava  | Semua   | Semua   | Semua  |     |

| oleh  |     |     | anggot | Fauzan  | anggot | anggota  | anggota  |     |
| ----- | --- | --- | ------ | ------- | ------ | -------- | -------- | --- |
Rizaqi
|     |     | Athalla | a   | Putra  | a   |     |     |     |
| --- | --- | ------- | --- | ------ | --- | --- | --- | --- |
h
| Diperiksa  |     |     |     |     |     |     |     |     |
| ---------- | --- | --- | --- | --- | --- | --- | --- | --- |
oleh

Prodi S1 Informatika - Universitas Telkom  SKPL-xxx  Halaman 2 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

| Disetujui  |     |     |     |     |     |
| ---------- | --- | --- | --- | --- | --- |

oleh

2. Daftar Halaman Perubahan
| Halaman  |     | Revisi  | Halaman  |     | Revisi  |
| -------- | --- | ------- | -------- | --- | ------- |
1.
|     |          | Perubahan   |     |     |     |
| --- | -------- | ----------- | --- | --- | --- |
|     | 13 - 38  | penempatan  |     |     |     |
Activity Diagram
ke bawah Use
Case Scenario
yang terkait,
|     |     | 1.  Perubahan pada  |     |     |     |
| --- | --- | ------------------- | --- | --- | --- |
|     | 14  | gambar Use Case     |     |     |     |
Diagram
|     |     | 1.  Menambahkan  |     |     |     |
| --- | --- | ---------------- | --- | --- | --- |
|     | 13  | jumlah           |     |     |     |
Functional
Requirement
2.  Perbaikan
penggunaan
kata/bahasa

Prodi S1 Informatika - Universitas Telkom  SKPL-xxx  Halaman 3 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3. Daftar Isi
1. Daftar Perubahan 2
2. Daftar Halaman Perubahan 3
3. Daftar Isi 4
1. Pendahuluan 6
1.1 Tujuan Penulisan Dokumen 6
1.2 Ruang Lingkup / Cakupan Dokumen 6
1.2.1 Format Penulisan 6
1.2.2 Prioritas Kebutuhan 6
1.3 Definisi, Singkatan, dan Akronim 6
1.3.1 Beberapa istilah yang digunakan dalam dokumen ini antara lain: 6
1.4 Referensi 7
2. Deskripsi Global Perangkat Lunak 7
2.1 Statement of Objective Perangkat Lunak 7
2.2 Perspektif dan Goal Perangkat Lunak 8
2.3 Profil dan Kelas Pengguna 9
2.4 Lingkungan Operasi 9
2.5 Batasan Perangkat Lunak / Sistem 10
2.6 Asumsi dan Dependensi 11
3. Deskripsi Rinci Perangkat Lunak 13
3.1 Deskripsi Kebutuhan 13
3.1.1 Kebutuhan Fungsional 13
3.1.2 Kebutuhan Non-Fungsional 14
3.2 Pemodelan Analisis 14
3.2.1 Use Case Diagram 14
3.2.1.1 Use Case Scenario dan Activity Diagram #1 (Halaman Login) 15
3.2.1.2 Use Case Scenario dan Activity Diagram #2 (Notifikasi) 18
3.2.1.3 Use Case Scenario dan Activity Diagram #3 (Kalender) 21
3.2.1.4 Use Case Scenario dan Activity Diagram #4 (Main Course) 24
3.2.1.5 Use Case Scenario dan Activity Diagram #5 (Mata Kuliah) 27
3.2.1.6 Use Case Scenario dan Activity Diagram #6 (Integrasi Eksternal) 29
3.2.1.7 Use Case Scenario dan Activity Diagram #7 (Forum Diskusi) 33
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 4 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.2.1.8 Use Case Scenario dan Activity Diagram #8 (Open Course Ware) 36
3.3 Class Diagram 39
4. Kebutuhan Lain - Lain 40
4.1 Tampilan Antarmuka Perangkat Lunak 40
4.1.1 Tampilan antarmuka FR-01 (Halaman Login) 40
4.1.2 Tampilan antarmuka FR-02 (Notifikasi) 41
4.1.3 Tampilan antarmuka FR-03 (Kalender) 42
4.1.4 Tampilan antarmuka FR-04 (Main Course) 43
4.1.5 Tampilan antarmuka FR-05 (Mata Kuliah) 44
4.1.6 Tampilan antarmuka FR-06 (Integrasi Eksternal) 45
4.1.7 Tampilan antarmuka FR-07 (Forum) 46
4.1.8 Tampilan antarmuka FR-08 (OpenCourseWare) 47
4.2 Elicitation Techniques 48
4.2.1 Teknik Elisitasi yang digunakan 48
4.2.2 Proses Pelaksanaan Elisitasi 48
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 5 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

1. Pendahuluan
1.1 Tujuan Penulisan Dokumen
Dokumen ini disusun untuk menjelaskan kebutuhan perangkat lunak aplikasi CeLOE
LMS dari Telkom University. Aplikasi ini berperan sebagai media pembelajaran digital yang
memfasilitasi interaksi antara dosen, mahasiswa, dan sistem akademik kampus secara daring.
Tujuan utama penyusunan dokumen ini adalah untuk memberikan gambaran mengenai
fungsi, batasan, dan spesifikasi sistem yang dibutuhkan, sehingga ada acuan yang sama dalam
proses pengembangan aplikasi. Selain itu, dokumen ini juga membantu memastikan bahwa
aplikasi yang dihasilkan mampu menjawab kebutuhan pengguna, meningkatkan efektivitas proses
pembelajaran, serta mendukung visi Telkom University sebagai kampus digital unggulan.
1.2 Ruang Lingkup / Cakupan Dokumen
1.2.1 Format Penulisan
? Font Penulisan : Times
? Ukuran Font Penulisan : Deskripsi (11), Sub Bab(14), dan Bab(18)
? Judul, Bab, Sub-Bab : Menggunakan huruf tebal (Bold)
? Ukuran Spasi : 1,15
? Perataan dan indentasi : Rata Kiri danKanan
1.2.2 Prioritas Kebutuhan
? Must have : Fitur utama yang wajib diimplementasikan agar sistem dapat
berfungsi.
? Satifire : Fitur pendukung yang meningkatkan kenyamanan dan efisiensi
pengguna.
? Delighter : Fitur tambahan yang memberikan nilai lebih tapi tidak wajib.
1.3 Definisi, Singkatan, dan Akronim
1.3.1 Beberapa istilah yang digunakan dalam dokumen ini antara lain:
? LMS : Learning Management System
? OCW : OpenCourseWare
? FR : Functional Requirement
? NFR : Non-Functional Requirement
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 6 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

? SKPL : Spesifikasi Kebutuhan Perangkat Lunak
? API : Application Programming Interface
? SSO : Single Sign-On.
? JSON : JavaScript Object Notation
? XML : Extensible Markup Language
? SSL : Secure Sockets Layer
? TLS : Transport Layer Security
? OS : Operating System
? TCP : Transmission Control Protocol
? IP : Internet Protocol
? SQL : Structured Query Language
? PHP : Hypertext Preprocessor
? IT : Information Technologies.
? HTTPS : HyperText Transfer Protocol Secure.
? MB : MegaByte
? LTS : Long-Term Support.
? MariaDB : Maria DataBase.
1.4 Referensi
Rumambi, F. F. (2022). KEKUATAN DAN KELEMAHAN SCHOOLOGY SEBAGAI PLATFORM
PEMBELAJARAN DARING: PERSPEKTIF MAHASISWA DI KELAS B ORAL ENGLISH
FOR ACADEMIC AND PRESENTATION SKILLS. Diakses pada Oktober Jumat, 2025,
dari https://ejournal.unsrat.ac.id/index.php/jefs/article/download/40292/36085 (Rumambi,
n.d., #)
2. Deskripsi Global Perangkat Lunak
2.1 Statement of Objective Perangkat Lunak
CeLOE LMS merupakan bagian dari ekosistem pembelajaran digital Telkom University
untuk mendukung kegiatan akademik berbasis daring. Aplikasi ini bertujuan untuk:
? Mempermudah mahasiswa dan dosen dalam mengakses aktivitas pembelajaran dari mana
saja.
? Menyediakan pengalaman belajar yang fleksibel dan efisien melalui perangkat mobile.
? Menyediakan sarana komunikasi dua arah antara dosen dan mahasiswa.
? Mendukung program OpenCourseWare (OCW) sebagai bentuk kontribusi universitas
terhadap pendidikan terbuka nasional.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 7 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

2.2  Perspektif dan Goal Perangkat Lunak
Pembangunan LMS CeLoe berorientasi pada pencapaian tujuan utama (goal) yang
berkaitan dengan kebutuhan fungsional berikut:

| Goal  |     | Deskripsi  | Korelasi dengan Fitur  |
| ----- | --- | ---------- | ---------------------- |
(FR)
G1 - Akses aman ke  Memberikan akses aman dan personel ke  FR-01 (Halaman login)
| sistem  | dalam aplikasi menggunakan akun  |     |     |
| ------- | -------------------------------- | --- | --- |
pengguna yang terdaftar.
G2 - Pembelajaran  Menyediakan daftar mata kuliah dan konten  FR-04 (Main course),
terpusat  pembelajaran dalam satu platform agar  FR-05 (Mata kuliah)
pengguna dapat mengakses seluruh
aktivitas akademik dengan mudah.
G3 - Efisiensi dan  Membantu mahasiswa dan dosen  FR-02 (Notifikasi),
manajemen waktu  mengelola jadwal dan tenggat waktu  FR-03 (Kalender)
melalui sistem kalender dan notifikasi
otomatis.
G4 - Kolaborasi dan  Menyediakan media interaksi antar  FR-07 (Forum diskusi)
| komunikasi  | pengguna untuk berdiskusi dan berbagi  |     |     |
| ----------- | -------------------------------------- | --- | --- |
informasi akademik.
G5 - Integrasi dan  Memungkinkan integrasi dengan platform  FR-06 (Integrasi
| keterbukaan  | eksternal dan memberikan akses        |     | eksternal),  |
| ------------ | ------------------------------------- | --- | ------------ |
|              | pembelajaran terbuka untuk mendukung  |     | FR-08 (OCW)  |
fleksibilitas pengguna.

2.3  Profil dan Kelas Pengguna
Berikut profil dan klasifikasi pengguna yang akan menggunakan aplikasi LMS CeLoe.
| No.  | Role  | Deskripsi dan peran  | Kebutuhan dan Akses  |
| ---- | ----- | -------------------- | -------------------- |
1.  Mahasiswa  Pengguna yang berinteraksi  Halaman login, notifikasi,
|     | langsung dengan sistem untuk    |     | kalender, main course,  |
| --- | ------------------------------- | --- | ----------------------- |
|     | mengakses mata kuliah,          |     | mata kuliah, forum      |
|     | mengerjakan tugas, dan melihat  |     | diskusi, dan OCW.       |
hasil penilaian.

Prodi S1 Informatika - Universitas Telkom  SKPL-xxx  Halaman 8 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

2. Dosen Pengguna yang bertugas mengelola Halaman login, main
materi pembelajaran, memberikan course, mata kuliah,
tugas, melakukan penilaian, dan notifikasi, kalender, forum
berinteraksi dengan mahasiswa diskusi, dan integrasi
melalui forum. eksternal.
3. Administrator Pengguna yang memiliki hak akses Memiliki akses ke seluruh
tertinggi dengan tanggung jawab fitur.
terhadap pengelolaan sistem, data
pengguna, dan konfigurasi aplikasi.
2.4 Lingkungan Operasi
Lingkungan operasional CeLOE LMS (Sistem Manajemen Pembelajaran) di Telkom
University berfungsi pada infrastruktur server yang berbasiskan cloud, yang memungkinkan
banyak pengguna untuk terhubung secara bersamaan. Server tersebut berbasis sistem operasi
Linux Ubuntu Server 22.04 LTS, menggunakan web server Apache atau Nginx, serta basis data
MySQL/MariaDB, diiringi dengan bahasa pemrograman PHP 8.x yang memanfaatkan framework
Moodle sebagai fondasi sistem. Lingkungan runtime memanfaatkan PHP Runtime dan Node. js
untuk mendukung fitur interaktif.
Di sisi pengguna, CeLOE LMS dapat diakses melalui sistem operasi Windows, macOS,
Linux, serta perangkat Android dan iOS dengan menggunakan browser seperti Chrome, Firefox,
Edge, atau Safari. Sistem ini juga terintegrasi dengan beberapa komponen lainnya, seperti SSO
Telkom University untuk autentikasi, iGracias untuk penyelarasan data akademik, layanan
email/pemberitahuan untuk pengingat tugas, serta Zoom atau Google Meet untuk perkuliahan
online, dan penyimpanan cloud untuk menyimpan bahan ajar.
Lebih lanjut, CeLOE LMS memanfaatkan API untuk berinteraksi dengan sistem luar,
seperti REST API untuk iGracias, OAuth/SAML untuk SSO, serta SMTP atau REST untuk
layanan pemberitahuan. Lingkungan ini menjamin bahwa CeLOE LMS beroperasi dengan stabil
dan terhubung dengan ekosistem digital di Telkom University.
2.5 Batasan Perangkat Lunak / Sistem
1. Kebijakan dan Peraturan Institusi
Pengembangan sistem dilakukan sesuai dengan kebijakan teknologi informasi Telkom
University yang mencakup pedoman keamanan, perlindungan data, serta pembatasan akses
berdasarkan peran pengguna.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 9 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

2. Keterbatasan Perangkat Keras dan Infrastruktur
Sistem beroperasi pada server milik universitas yang memiliki kapasitas terbatas,
sehingga diperlukan optimasi untuk menjaga kinerja dan efisiensi basis data agar tetap stabil saat
diakses oleh banyak pengguna.
3. Keterbatasan Waktu dan Memori
Aktivitas seperti pengunggahan tugas dan sinkronisasi data harus diselesaikan dalam
rentang waktu tertentu, dengan batas ukuran maksimum file yang dapat diunggah, yaitu sekitar 50
MB untuk setiap file.
4. Antarmuka dengan Aplikasi Lain
Sistem CeLOE LMS terhubung dengan sistem akademik iGracias serta menggunakan
proses autentikasi Single Sign-On (SSO), sehingga setiap perubahan pada API eksternal dapat
mempengaruhi kinerja dan integrasi sistem.
5. Teknologi, Alat, dan Database
Pengembangan CeLOE LMS menggunakan framework PHP atau Moodle, dengan basis
data MySQL atau PostgreSQL, dan dijalankan pada server berbasis Linux sesuai dengan standar
yang ditetapkan oleh universitas.
6. Operasi Paralel dan Skalabilitas
Sistem dirancang untuk mendukung akses bagi ribuan pengguna secara bersamaan,
namun kemampuan skalabilitas masih bergantung pada kapasitas server dan konfigurasi load
balancer yang tersedia.
7. Requirements Bahasa
Antarmuka utama sistem menggunakan Bahasa Indonesia sebagai bahasa utama, dengan
dukungan terbatas untuk penggunaan Bahasa Inggris pada beberapa bagian.
8. Protokol Komunikasi
Komunikasi data dalam sistem dilakukan menggunakan protokol HTTPS guna menjamin
keamanan saat pertukaran informasi antara client dan server.
9. Pertimbangan Keamanan
Menerapkan autentikasi SSO dan kontrol akses berbasis peran (role-based access
control), serta wajib mematuhi kebijakan universitas terkait perlindungan data pribadi seluruh
pengguna.
10. Konvensi Desain dan Standar Pemrograman
Pengembangan sistem mengikuti panduan internal Telkom University dengan penerapan
struktur kode yang modular, dokumentasi fungsional yang lengkap, serta rancangan yang
memudahkan proses pemeliharaan oleh tim IT universitas.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 10 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

2.6 Asumsi dan Dependensi
1. Ketersediaan Infrastruktur Universitas
Diasumsikan bahwa server, jaringan, dan sistem penyimpanan data yang digunakan oleh
CeLOE LMS akan tetap tersedia dan beroperasi secara stabil selama sistem berjalan. Gangguan
pada infrastruktur dapat mempengaruhi kinerja dan aksesibilitas sistem.
2. Dukungan Sistem Akademik Terpadu (iGracias)
CeLOE LMS bergantung pada integrasi dengan sistem akademik iGracias untuk
sinkronisasi data mahasiswa, dosen, dan mata kuliah. Perubahan struktur data atau kebijakan
akses pada iGracias dapat mempengaruhi fungsi integrasi LMS.
3. Konsistensi Autentikasi SSO (Single Sign-On)
Sistem mengandalkan layanan autentikasi SSO Telkom University untuk proses login
pengguna. Diasumsikan bahwa layanan SSO akan tetap berfungsi dengan baik tanpa perubahan
besar pada protokol atau API yang digunakan.
4. Ketersediaan Dukungan Teknis dan Pemeliharaan
Diasumsikan bahwa tim IT Telkom University akan menyediakan dukungan teknis secara
berkelanjutan untuk pemeliharaan server, pembaruan sistem, serta penanganan masalah keamanan
atau bug.
5. Ketersediaan Jaringan Internet dan Akses Pengguna
Pengguna (mahasiswa dan dosen) diasumsikan memiliki koneksi internet yang memadai
untuk mengakses CeLOE LMS. Kualitas jaringan yang buruk dapat mempengaruhi pengalaman
pengguna dan keandalan sistem.
6. Kepatuhan terhadap Kebijakan Keamanan dan Privasi
Diasumsikan seluruh pengguna dan pengembang sistem mematuhi kebijakan keamanan,
perlindungan data, dan privasi yang ditetapkan oleh universitas. Pelanggaran terhadap kebijakan
ini dapat menimbulkan risiko keamanan.
7. Ketersediaan dan Keandalan Teknologi yang Digunakan
Pengembangan sistem bergantung pada stabilitas teknologi yang digunakan, seperti
framework PHP/Moodle, database MySQL/PostgreSQL, serta sistem operasi Linux. Pembaruan
versi atau penghentian dukungan (end of support) dapat mempengaruhi kompatibilitas sistem.
8. Ketersediaan Komponen Eksternal dan API
Sistem bergantung pada beberapa API eksternal (misalnya untuk autentikasi atau
integrasi data). Diasumsikan bahwa API tersebut akan tetap tersedia dan terdokumentasi dengan
baik selama masa pengembangan dan operasional.
9. Komitmen Stakeholder
Diasumsikan bahwa pihak terkait (dosen, mahasiswa, administrator, dan pengelola
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 11 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

sistem) akan berpartisipasi aktif dalam proses pengujian, umpan balik, serta perbaikan sistem.
10. Kesesuaian dengan Kebijakan Akademik Universitas
Diasumsikan bahwa aturan akademik seperti jadwal perkuliahan, penilaian, dan kebijakan
tugas tidak mengalami perubahan signifikan yang dapat mempengaruhi logika atau alur fungsi
sistem LMS.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 12 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.  Deskripsi Rinci Perangkat Lunak
3.1  Deskripsi Kebutuhan
3.1.1  Kebutuhan Fungsional
| Kode Kebutuhan  | Deskripsi      | Tipe FR       | Spesifikasi FR         |
| --------------- | -------------- | ------------- | ---------------------- |
| FR-01           | Halaman Login  | Must Have     | Pengguna login         |
|                 |                |               | menggunakan akun yang  |
tersedia (SSO).
| FR-02   | Notifikasi  | Satisfier  | Sistem menampilkan  |
| ------- | ----------- | ---------- | ------------------- |
notifikasi tugas baru.
| FR-03  | Kalender  | Satisfier  | Sistem menampilkan  |
| ------ | --------- | ---------- | ------------------- |
kalender terintegrasi
dengan tenggat tugas.
FR-04
|     | Main Course  | Must Have  | Sistem dapat  |
| --- | ------------ | ---------- | ------------- |
menampilkan daftar mata
kuliah dalam satu halaman
jika terdaftar dalam suatu
mata kuliah.
| FR-05  | Mata Kuliah  | Must Have  | Pengguna dapat melihat,  |
| ------ | ------------ | ---------- | ------------------------ |
mengakses materi, serta
mengelola tugas dan nilai
dalam setiap mata kuliah.
FR-06
|     | Integrasi Eksternal  | Satisfier  | Sistem dapat terhubung  |
| --- | -------------------- | ---------- | ----------------------- |
dengan Integrasi aplikasi
eksternal (Microsoft
Teams, Google Meet,
Zoom, etc…)
| FR-07  | Forum Diskusi  | Satisfier  | Sistem menyediakan  |
| ------ | -------------- | ---------- | ------------------- |
ruang diskusi bagi
pengguna untuk
berinteraksi dan bertukar
informasi terkait materi
kuliah
| FR-08  | OpenCourseWare  | Delighter  | Mahasiswa dapat   |
| ------ | --------------- | ---------- | ----------------- |
|        | (OCW)           |            | mengakses materi  |
pembelajaran tambahan
yang bersifat terbuka di
luar mata kuliah wajib..

3.1.2
Kebutuhan Non-Fungsional

Prodi S1 Informatika - Universitas Telkom  SKPL-xxx  Halaman 13 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

No. Quality Criteria Kode Kebutuhan Deskripsi
1. Kegunaan NFR-01 Sistem harus mudah digunakan
oleh semua pengguna secara
intuitif dengan navigasi yang jelas
2. Realibilitas NFR-02 Sistem harus dapat beroperasi
tanpa gangguan signifikan selama
proses pembelajaran berlangsung.
3. Keamanan NFR-03 Sistem harus melindungi data
pengguna dan aksen yang tidak
sah.
3.2 Pemodelan Analisis
3.2.1 Use Case Diagram
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 14 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.2.1.1 Use Case Scenario dan Activity Diagram #1 (Halaman Login)
Nama Use Case Halaman Login
Aktor Mahasiswa, dosen, dan administrator.
Deskripsi Fitur yang digunakan Mahasiswa, Dosen, dan Administrator
untuk mengakses CeLoe LMS menggunakan akun yang
terdaftar.
Pre-Kondisi Pengguna memiliki akun yang aktif dan berada pada halaman
login sistem.
Post-Kondisi Pengguna berhasil masuk ke sistem dan diarahkan ke
dashboard sesuai peran.
Skenario Utama
Aktor Sistem
1. Mahasiswa, dosen, dan
administrator membuka
aplikasi CeLoe LMS.
2. Mahasiswa, dosen, dan
administrator memilih
situs LMS apabila
terdapat lebih dari satu
pilihan.
3. Mahasiswa, dosen, dan
administrator
memasukkan username
dan password.
4. Sistem memvalidasi
informasi login yang
dimasukkan.
5. Sistem mengizinkan
akses dan menampilkan
dashboard sesuai peran
pengguna (mahasiswa,
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 15 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

dosen, dan
administrator).
Skenario Eksepsional (Alternatif Flow)
| Username atau password  | Aktor  | Sistem  |
| ----------------------- | ------ | ------- |
salah
|     | 1.  Mahasiswa, dosen, dan  |     |
| --- | -------------------------- | --- |
administrator
memasukkan username
dan password.
|     |     | 2.  Sistem memvalidasi data  |
| --- | --- | ---------------------------- |
dan mendeteksi
kesalahan login.
|     |     | 3.  Sistem menampilkan  |
| --- | --- | ----------------------- |
pesan kesalahan, “Login
gagal.”
4.
|     |     |  Sistem tetap berada di  |
| --- | --- | ------------------------ |
halaman login.

Prodi S1 Informatika - Universitas Telkom  SKPL-xxx  Halaman 16 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 17 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.2.1.2 Use Case Scenario dan Activity Diagram #2 (Notifikasi)
Nama Use Case Notifikasi
Aktor Mahasiswa, dosen, dan administrator.
Deskripsi Sistem secara otomatis menampilkan dan mengirimkan
notifikasi kepada pengguna setiap kali terdapat tugas baru
yang ditambahkan oleh dosen. Administrator dapat memantau
log notifikasi.
Pre-Kondisi ? Pengguna (mahasiswa, dosen, dan administrator) sudah
login ke dalam sistem.
? Ada kelas dan pengguna yang terkait dengan tugas yang
ditambahkan.
Post-Kondisi ? Notifikasi tampil pada dashboard pengguna terkait.
? Riwayat pengiriman notifikasi tercatat dalam log sistem.
Skenario Utama
Aktor Sistem
1. Dosen menambahkan
tugas baru pada salah
satu matakuliah.
2. Sistem menyimpan tugas
dan mengirimkan
notifikasi ke pengguna
terkait (Mahasiswa /
Dosen lain bila
diperlukan).
3. Sistem menampilkan
notifikasi di dashboard
mahasiswa yang dituju.
4. Administrator membuka
halaman log notifikasi
(Khusus Administrator).
5. Sistem menampilkan
data log pengiriman
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 18 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

notifikasi.
Skenario Eksepsional (Alternatif Flow)
Gagal mengirim notifikasi Aktor Sistem
1. Dosen menambah tugas
baru.
2. Sistem gagal mengirim
notifikasi akibat
gangguan
jaringan/server.
3. Sistem mencatat log
gagal kirim dan
menampilkan pesan
kesalahan kepada admin,
“Notifikasi gagal
dikirim”.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 19 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 20 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.2.1.3 Use Case Scenario dan Activity Diagram #3 (Kalender)
Nama Use Case Kalender
Aktor Mahasiswa, dosen, dan administrator.
Deskripsi Sistem menyediakan kalender yang menampilkan jadwal
perkuliahan, tenggat pengumpulan tugas, dan event lain yang
terintegrasi sesuai peran pengguna (Mahasiswa, dosen, dan
administrator).
Pre-Kondisi Pengguna (mahasiswa, dosen, dan administrator) telah login
dan memiliki akses terhadap mata kuliah atau event terkait.
Post-Kondisi Kalender berhasil ditampilkan dan terupdate sesuai
jadwal/tenggat yang berlaku.
Skenario Utama
Aktor Sistem
1. Mahasiswa atau dosen
membuka menu
“Kalender”.
2. Sistem menampilkan
kalender berisi jadwal
kelas dan tenggat tugas
sesuai mata kuliah
pengguna.
3. Mahasiswa atau dosen
memilih salah satu
event/tugas untuk
melihat detail.
4. Sistem menampilkan
detail event/tugas (nama,
deskripsi, mata kuliah,
dan tenggat).
Administrator dapat
menambah dan mengedit
event global dalam
kalender.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 21 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Skenario Eksepsional (Alternatif Flow)
Tidak ada jadwal/tenggat Aktor Sistem
tugas yang tersedia
1. Mahasiswa atau dosen
membuka menu
“Kalender”.
2. Sistem memverifikasi
tidak ada data
jadwal/tugas terkait
pengguna.
3. Sistem menampilkan
pesan, “Tidak ada jadwal
atau tugas terdaftar”.
4. Sistem tetap berada di
halaman Kalender tanpa
ada event yang
ditampilkan.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 22 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 23 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.2.1.4 Use Case Scenario dan Activity Diagram #4 (Main Course)
Nama Use Case Main Course.
Aktor Mahasiswa, dosen, dan Administrator
Deskripsi Sistem menyediakan daftar mata kuliah yang dapat diakses
oleh pengguna (Mahasiswa, dosen, dan administrator) sesuai
peran masing-masing.
Pre-Kondisi Pengguna telah berhasil login ke dalam sistem.
Post-Kondisi Daftar mata kuliah berhasil ditampilkan dan pengguna dapat
memilih salah satu mata kuliah untuk mengakses informasi
atau fitur yang tersedia.
Skenario Utama
Aktor Sistem
1. Mahasiswa atau dosen
membuka menu “Main
Course”.
2. Sistem menampilkan
daftar semua mata
kuliah.
3. Mahasiswa atau dosen
memilih salah satu mata
kuliah dari daftar.
4. Sistem menampilkan
halaman detail mata
kuliah (materi, tugas,
forum, dan fitur lain
sesuai hak akses).
Administrator dapat
mengelola daftar mata
kuliah dan hak akses
pengguna.
Skenario Eksepsional (Alternatif Flow)
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 24 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Tidak ada mata kuliah Aktor Sistem
terdaftar
1. Mahasiswa atau dosen
membuka menu “Main
Course”.
2. Sistem memeriksa daftar
mata kuliah dan
menemukan bahwa
pengguna tidak terdaftar
dalam mata kuliah
manapun.
3. Sistem menampilkan
pesan, “Belum terdaftar
di mata kuliah
manapun”.
4. Sistem tetap berada di
halaman Main Course.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 25 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 26 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.2.1.5 Use Case Scenario dan Activity Diagram #5 (Mata Kuliah)
| Nama Use Case  | Mata Kuliah                          |     |
| -------------- | ------------------------------------ | --- |
| Aktor          | Mahasiswa, dosen, dan Administrator  |     |
Deskripsi  Sistem menyediakan akses bagi pengguna untuk melihat
materi, tugas, dan penilaian pada mata kuliah yang diikuti.
Administrator dapat mengelola daftar mata kuliah dan peran
pengguna.
?  Pengguna telah login ke dalam sistem.
Pre-Kondisi
?  Pengguna terdaftar pada minimal satu mata kuliah (untuk
akses konten).
Materi, tugas, dan penilaian mata kuliah berhasil ditampilkan
Post-Kondisi
dan/atau diperbarui (oleh peran yang berwenang seperti
Dosen/Administrator).
Skenario Utama
|     | 1.  Mahasiswa memilih salah  |     |
| --- | ---------------------------- | --- |
satu mata kuliah
2.
|     |     | Sistem menampilkan  |
| --- | --- | ------------------- |
materi dan daftar tugas
pada mata kuliah
tersebut.
|     | 3.  Dosen menambahkan  |     |
| --- | ---------------------- | --- |
tugas atau materi baru.
|     |     | 4.  Sistem menyimpan  |
| --- | --- | --------------------- |
tugas/materi dan
menampilkan pembaruan
ke semua pengguna.
5.
|     | Mahasiswa mengunduh  |     |
| --- | -------------------- | --- |
materi dan
mengumpulkan tugas.
6.
|     |     | Sistem menyimpan hasil  |
| --- | --- | ----------------------- |
pengumpulan tugas
mahasiswa.
Skenario Eksepsional (Alternatif Flow)
|     | Aktor  | Sistem  |
| --- | ------ | ------- |
Pengguna tidak terdaftar pada
| mata kuliah  | 1.  Mahasiswa membuka  |     |
| ------------ | ---------------------- | --- |
menu Mata Kuliah.

Prodi S1 Informatika - Universitas Telkom  SKPL-xxx  Halaman 27 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

2. Sistem mendeteksi bahwa
pengguna tidak terdaftar
pada mata kuliah
manapun.
3. Sistem menampilkan
notifikasi, “Tidak
Terdaftar.”
4. Sistem tetap berada pada
halaman Mata Kuliah.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 28 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.2.1.6 Use Case Scenario dan Activity Diagram #6 (Integrasi Eksternal)
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 29 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

| Nama Use Case  | Integrasi Eksternal      |     |
| -------------- | ------------------------ | --- |
| Aktor          | Dosen dan administrator  |     |
Deskripsi  Proses Dosen menambahkan aktivitas Zoom Meeting ke dalam
mata kuliah, dan sistem memproses data melalui API untuk
menghasilkan link pertemuan yang dapat diakses oleh
Mahasiswa/Admin.
| Pre-Kondisi  | ?  Dosen sudah Login ke LMS.  |     |
| ------------ | ----------------------------- | --- |
?
Dosen memiliki hak akses untuk mengedit mata kuliah.
?  Integrasi LMS dan API Zoom sudah dikonfigurasi dan
aktif.
Post-Kondisi  Link Zoom Meeting berhasil tersimpan di database LMS dan
ditampilkan di halaman kursus. Mahasiswa/Admin dapat
melihat dan menggunakan link tersebut.
Skenario Utama

|     | Aktor  Sistem  |     |
| --- | -------------- | --- |

|     | 1.  Dosen memberikan izin  |     |
| --- | -------------------------- | --- |
akses melalui akun
eksternal.
|     |   2.  | Sistem memvalidasi izin  |
| --- | ----- | ------------------------ |
dan menghubungkan
tautan/file eksternal ke
LMS.
|     | 3.  Administrator memantau    |     |
| --- | ----------------------------- | --- |
status integrasi dan
mengelola kredensial
(Khusus Administrator).
|     |   4.  | Sistem menyimpan  |
| --- | ----- | ----------------- |
kredensial dan
memperbarui konfigurasi
integrasi.
Skenario Eksepsional (Alternatif Flow)
|     | Aktor  Sistem  |     |
| --- | -------------- | --- |
Layanan eksternal tidak
| responsif  | 1.  Dosen mencoba  |     |
| ---------- | ------------------ | --- |

Prodi S1 Informatika - Universitas Telkom  SKPL-xxx  Halaman 30 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

menghubungkan tautan
eksternal.
2. Sistem gagal terhubung
ke layanan eksternal.
3. Sistem menampilkan
pesan kesalahan,
“Koneksi gagal.”
4. Sistem tetap berada pada
halaman integrasi
eksternal.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 31 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 32 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.2.1.7 Use Case Scenario dan Activity Diagram #7 (Forum Diskusi)
| Nama Use Case  | Forum Diskusi                         |     |
| -------------- | ------------------------------------- | --- |
| Aktor          | Mahasiswa, dosen, dan administrator.  |     |
Deskripsi  Sistem menyediakan fasilitas diskusi internal bagi Mahasiswa,
Dosen, dan Administrator untuk melakukan interaksi dalam
suatu mata kuliah atau forum umum. Administrator dapat
melakukan moderasi terhadap konten yang tidak pantas.
| Pre-Kondisi  | ?  Pengguna telah login ke dalam sistem.  |     |
| ------------ | ----------------------------------------- | --- |
?  Pengguna memiliki akses ke forum yang tersedia.
Post-Kondisi  Pesan atau topik diskusi tersimpan dalam sistem dan dapat
diakses oleh pengguna lain dalam forum yang sama.
| Nama Use Case  | Forum Diskusi  |     |
| -------------- | -------------- | --- |
Skenario Utama
|     | Aktor                      | Sistem  |
| --- | -------------------------- | ------- |
|     | 1.  Mahasiswamemilih menu  |         |
Forum Diskusi pada
halaman mata kuliah.
|     |     | 2.  Sistem menampilkan  |
| --- | --- | ----------------------- |
daftar topik diskusi yang
tersedia.
|     | 3.  Mahasiswa   |     |
| --- | --------------- | --- |
memilih salah satu topik
atau membuat topik
diskusi baru.
|     |     | 4.  Sistem menampilkan isi  |
| --- | --- | --------------------------- |
diskusi dan menyediakan
kolom untuk menulis
pesan baru.
|     | 5.  Mahasiswa atau dosen  |     |
| --- | ------------------------- | --- |
menulis pesan atau
balasan lalu menekan
tombol Kirim.
6.
|     |     | Sistem menyimpan pesan  |
| --- | --- | ----------------------- |
dan menampilkan pesan
tersebut di forum diskusi.
|     |     |     |
| --- | --- | --- |

Prodi S1 Informatika - Universitas Telkom  SKPL-xxx  Halaman 33 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Skenario Eksepsional (Alternatif Flow)
Aktor Sistem
1. Mahasiswa atau menulis
pesan namun koneksi
internet terputus atau
kolom pesan kosong.
2. Sistem menampilkan
pesan kesalahan seperti
“Pesan gagal dikirim”
atau “Isi pesan tidak
boleh kosong”.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 34 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 35 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.2.1.8 Use Case Scenario dan Activity Diagram #8 (Open Course Ware)
| Nama Use Case  | OpenCourseWare (OCW)                              |     |
| -------------- | ------------------------------------------------- | --- |
| Aktor          | Mahasiswa dan administrator                       |     |
| Deskripsi      | Sistem menyediakan akses terbuka terhadap materi  |     |
pembelajaran yang dapat digunakan oleh mahasiswa, termasuk
materi di luar mata kuliah wajib. Administrator dapat
mengunggah atau memperbarui materi OCW.
?
Pre-Kondisi  Mahasiswa atau Administrator sudah login ke dalam
sistem.
?  Materi OCW sudah tersedia (untuk skenario utama).
Post-Kondisi  ?  Mahasiswa dapat melihat dan/atau mengunduh materi
OCW.
?
Jika Administrator melakukan unggah/perbarui, materi
OCW tersimpan dan tampil di daftar OCW.
Skenario Utama
|     | Aktor                  | Sistem  |
| --- | ---------------------- | ------- |
|     | 1.  Mahasiswa membuka  |         |
halaman OCW.
|     |     | 2.  Sistem menampilkan  |
| --- | --- | ----------------------- |
daftar materi OCW yang
tersedia.
3.
|     | Mahasiswa memilih  |     |
| --- | ------------------ | --- |
salah satu materi.
|     |     | 4.  Sistem menampilkan  |
| --- | --- | ----------------------- |
detail dan menyediakan
opsi unduh materi.
|     | 5.  Administrator  |     |
| --- | ------------------ | --- |
mengunduh dan
memperbarui materi

Prodi S1 Informatika - Universitas Telkom  SKPL-xxx  Halaman 36 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

OCW (Khusus
Administrator).
6. Sistem menyimpan
materi dan memperbarui
daftar OCW (Khusus
Administrator).
Skenario Eksepsional (Alternatif Flow)
Materi OCW belum Aktor Sistem
tersedia
1. Mahasiswa membuka
halaman OCW.
2. Sistem mendeteksi tidak
ada materi yang tersedia.
3. Sistem menampilkan
pesan, “Tidak ada
materi”.
4. Sistem tetap di halaman
OCW.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 37 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 38 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

3.3 Class Diagram
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 39 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

4. Kebutuhan Lain - Lain
4.1 Tampilan Antarmuka Perangkat Lunak
4.1.1 Tampilan antarmuka FR-01 (Halaman Login)
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 40 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

4.1.2 Tampilan antarmuka FR-02 (Notifikasi)
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 41 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

4.1.3 Tampilan antarmuka FR-03 (Kalender)
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 42 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

4.1.4 Tampilan antarmuka FR-04 (Main Course)
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 43 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

4.1.5 Tampilan antarmuka FR-05 (Mata Kuliah)
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 44 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

4.1.6 Tampilan antarmuka FR-06 (Integrasi Eksternal)
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 45 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

4.1.7 Tampilan antarmuka FR-07 (Forum)
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 46 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

4.1.8 Tampilan antarmuka FR-08 (OpenCourseWare)
j
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 47 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

4.2 Elicitation Techniques
Telkom University telah memiliki aplikasi Learning Management System (LMS) yang berfungsi
sebagai platform utama untuk memfasilitasi proses pembelajaran mahasiswa secara daring maupun luring.
Aplikasi ini digunakan untuk mendukung berbagai kegiatan akademik, seperti pemberian dan
pengunduhan materi kuliah, pengumpulan tugas, pelaksanaan kuis atau ujian daring, serta pemberian nilai
dosen. Melalui proses elisitasi, diharapkan dapat diketahui fitur-fitur yang paling dibutuhkan, kendala
yang sering dihadapi pengguna dalam penggunaan sistem, serta peluang pengembangan yang dapat
meningkatkan efektivitas dan kenyamanan dalam proses pembelajaran digital.
4.2.1 Teknik Elisitasi yang digunakan
Dalam kajian ini, teknik elisitasi yang digunakan adalah document-centric techniques.
Teknik ini diterapkan dengan menganalisis jurnal ilmiah yang berkaitan dengan pengembangan
dan evaluasi aplikasi Learning Management System (LMS). Aplikasi LMS Telkom University
yang telah ada menjadi dasar pelaksanaan elisitasi berbasis jurnal ilmiah untuk memperbarui serta
menyempurnakan kebutuhan sistem. Hasil dari proses ini berupa daftar kebutuhan yang dapat
digunakan oleh pengembang untuk dapat memperbarui kebutuhan sistem sesuai kebutuhan
pengguna saat ini.
4.2.2 Proses Pelaksanaan Elisitasi
Proses elisitasi dilakukan dengan menggunakan teknik elisitasi document-centric
techniques, dengan sumber utama yang digunakan berupa skripsi berjudul “Kekuatan dan
Kelemahan Schoology sebagai Platform Pembelajaran Daring: Perspektif Mahasiswa di Kelas B
Oral English for Academic and Presentation Skills” oleh Fernando F. Rumambi (2022) dari
Universitas Sam Ratulangi. Dokumen ini dianalisis untuk mengidentifikasi kelebihan dan
kekurangan aplikasi Schoology, kemudian hasilnya dibandingkan dengan karakteristik serta fitur
yang dimiliki oleh aplikasi LMS Telkom University.
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 48 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Lampiran A: Daftar Kata-Kata Asing

| No.       | Istilah / Akronim  | Kepanjangan / Arti                | Keterangan     |
| --------- | ------------------ | --------------------------------- | -------------- |
| 1  UI/UX  |                    | User Interface / User Experience  | Antarmuka dan  |
pengalaman pengguna
2  REST API  Representational State Transfer API  Arsitektur API berbasis
HTTP
3  OAuth / SAML  Open Authorization / Security  Protokol untuk
|     |     | Assertion Markup Language  | autentikasi dan otorisasi  |
| --- | --- | -------------------------- | -------------------------- |
pengguna
4  Moodle  Modular Object-Oriented Dynamic  Platform e-learning
|                     |     | Learning Environment  | berbasis open source  |
| ------------------- | --- | --------------------- | --------------------- |
| 5  Cloud Computing  |     | Komputasi Awan        | Layanan komputasi     |
berbasis internet
| 6  Dashboard  |     | Papan Kendali  | Tampilan utama yang  |
| ------------- | --- | -------------- | -------------------- |
berisi ringkasan data
dan fitur
| 7  Server  |     | Peladen  | Komputer yang  |
| ---------- | --- | -------- | -------------- |
menyediakan layanan
bagi pengguna
| 8  Database  |     | Basis Data  | Tempat penyimpanan  |
| ------------ | --- | ----------- | ------------------- |
data terstruktur

Prodi S1 Informatika - Universitas Telkom  SKPL-xxx  Halaman 49 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

Lampiran B: Alur Penggunaan Aplikasi CeLOE LMS
Telkom
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 50 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom

PENJELASAN PEKERJAAN ANGGOTA
No. Nama Anggota Bagian Yang di Kerja
1. Fauzan Ahmad Choiry ? Activity Diagram #5 & #7
? Kebutuhan Non-Fungsional
? Tampilan Antarmuka
? Use Case Diagram
? Flowchart
2. Muhammad Dava Razwa ? Activity Diagram #4 & #8
? Use Case Scenario
? Teknik Elisitasi
? Tampilan Antarmuka
? Perspektif dan Goal Perangkat Lunak
3. Putra Rizaqi Athallah ? Membuat gambar Class Diagram
? Membuat gambar Use Case Diagram
? Membuat gambar Flowchart
? Membuat gambar Activity Diagram (FR-02 &
FR-03)
? Menambah gambar Tampilan Antarmuka
(FR-02 & FR-03)
4. A. Najwa Sabrina Nusawan ? Activity Diagram #1 & #6
? Teknik Elisitasi
? Lampiran A
? Tampilan Antarmuka
Prodi S1 Informatika - Universitas Telkom SKPL-xxx Halaman 51 dari 51
Dokumen ini dan informasi yang ada di dalamnya adalah milik Prodi S1 Informatika-Universitas Telkom
dan bersifat rahasia. Dilarang untuk mereproduksi dokumen ini tanpa diketahui oleh Program Studi S1
Informatika, Universitas Telkom
