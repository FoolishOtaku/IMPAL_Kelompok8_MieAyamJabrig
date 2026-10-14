DESKRIPSI PERANCANGAN PERANGKAT LUNAK
CeLoe Learning Management System Telkom University
untuk:
Pengguna Aplikasi CeLoe LMS Telkom University
Dipersiapkan oleh:
Kelompok Odet
FAUZAN AHMAD CHOIRY 103012400120
MUHAMMAD DAVA RAZWA 103012400035
PUTRA RIZAQI ATHALLAH 103012400022
A. NAJWA SABRINA NUSAWAN 103012400180
Program Studi Teknologi Informasi
Fakultas Informatika
Jl. Telekomunikasi 1, Dayeuhkolot Bandung
Nomor Dokumen Halaman
Prodi S1- Teknologi
Informasi DPPL-xx <xx:no grp> <#>/<jml #
Universitas Telkom
Revisi <nomor revisi> Tgl: <isi tanggal>

DAFTAR PERUBAHAN
| Revisi  |     | Deskripsi  |     |     |     |
| ------- | --- | ---------- | --- | --- | --- |
| A       |     |            |     |     |     |

| B   |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- |

| C   |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- |

| D   |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- |

| E   |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- |

| F   |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- |

| G   |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- |

| INDEX  | -  A  | B  C  | D   | E   | F  G  |
| ------ | ----- | ----- | --- | --- | ----- |
TGL
| Ditulis  |     |     |     |     |     |
| -------- | --- | --- | --- | --- | --- |
oleh
| Diperiksa  |     |     |     |     |     |
| ---------- | --- | --- | --- | --- | --- |
oleh
| Disetujui  |     |     |     |     |     |
| ---------- | --- | --- | --- | --- | --- |
oleh

| Prodi S1 Informatika Tel-U  |     | DPPL-XXX  |     |     | Halaman 2 dari 53   |
| --------------------------- | --- | --------- | --- | --- | ------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Daftar Halaman Perubahan
Halaman Revisi Halaman Revisi
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 3 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Daftar Isi
Daftar Isi....................................................................................................................................................................3
Daftar Tabel...............................................................................................................................................................6
Daftar Gambar...........................................................................................................................................................7
1. Pendahuluan..........................................................................................................................................................7
1.1 Tujuan Penulisan Dokumen.........................................................................................................................8
1.2 Lingkup Masalah..........................................................................................................................................8
1.3 Definisi dan Istilah.......................................................................................................................................8
1.4 Referensi......................................................................................................................................................8
2 Perancangan Global..............................................................................................................................................10
2.1 Rencana Lingkungan Implementasi...........................................................................................................10
2.2 Deskripsi Arsitektur Perangkat Lunak......................................................................................................10
3 Perancangan Rinci................................................................................................................................................11
3.1 Realisasi Use Case.....................................................................................................................................11
3.1.1 Use Case #1 Login...........................................................................................................................11
3.1.1.1 Use Case Scenario #1 Login..................................................................................................11
3.1.1.2 UI Design dan Deskripsi Objek UI #1 Login........................................................................12
Antarmuka L002: Halaman Autentikasi SSO.....................................................................12
Antarmuka L003: Dashboard Pengguna.............................................................................12
3.1.1.3 Identifikasi Object dan Tipe Kelas #1 Login.........................................................................13
3.1.1.4 Sequence Diagram #1 Login.................................................................................................13
3.1.2 Use Case #2 Notifikasi.....................................................................................................................14
3.1.2.1 Use Case Scenario #2 Notifikasi...........................................................................................14
3.1.2.2 UI Design dan Deskripsi Objek UI #2 Notifikasi..................................................................15
3.1.2.3 Identifikasi Object Baru & Tipe Kelas #2 Notifikasi............................................................17
3.1.2.4 Sequence Diagram #2 Notifikasi...........................................................................................18
3.1.3 Use Case #3 Kalender.......................................................................................................19
3.1.3.1 Use Case Scenario #3 Kalender.............................................................................19
3.1.3.2 UI Design dan Deskripsi Objek UI #3 Kalender.....................................................20
3.1.3.3 Identifikasi Object dan Tipe Kelas #3 Kalender.....................................................22
3.1.3.4 Sequence Diagram #3 Kalender..............................................................................23
3.1.4 Use Case #4 Main Course.................................................................................................24
3.1.4.1 Use Case Scenario #4 Main Course........................................................................24
3.1.4.2 UI Design dan Deskripsi Objek UI #4 Main Course..............................................25
3.1.4.3 Identifikasi Object Baru & Tipe Kelas #4 Main Course.........................................27
3.1.4.4 Sequence Diagram #4 Main Course........................................................................28
3.1.5 Use Case #5 Mata Kuliah.................................................................................................29
3.1.5.1 Use Case Scenario #5 Mata Kuliah.........................................................................29
3.1.5.2 UI Design dan Deskripsi Objek UI #5 Mata Kuliah...............................................30
3.1.5.3 Identifikasi Object dan Tipe Kelas #5 Mata Kuliah................................................31
3.1.5.4 Sequence Diagram & Component Diagram #5 Mata Kuliah..................................33
3.1.6 Use Case #6 Integrasi Eksternal (Zoom Meeting)............................................................34
3.1.6.1 Use Case Scenario #6..............................................................................................34
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 4 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.6.2 UI Design dan Deskripsi Objek UI #6 Integrasi Eksternal (Zoom Meeting)..........34
Antarmuka Z001: Halaman Mata Kuliah............................................................................35
Antarmuka Z002: Form Tambah Zoom Meeting................................................................35
Antarmuka Z003: Detail Zoom Meeting.............................................................................35
Antarmuka Z003: Halaman Error Integrasi........................................................................35
3.1.6.3 Identifikasi Object Baru & Tipe Kelas #6 Integrasi Eksternal (Zoom Meeting)....36
3.1.6.4 Sequence Diagram &Component Diagram #6 Integrasi Eksternal (Zoom Meeting).
36
3.1.7 Use Case #7 Forum Diskusi..............................................................................................37
3.1.7.1 Use Case Scenario #7 Forum Diskusi.....................................................................37
3.1.7.2 UI Design dan Deskripsi Objek UI #7 Forum Diskusi...........................................38
3.1.7.3 Identifikasi Object dan Tipe Kelas #7 Forum Diskusi............................................40
3.1.7.4 Sequence Diagram & Component Diagram #7 Forum Diskusi..............................40
3.1.8 Use Case #8 <OCW>........................................................................................................42
3.1.8.1 Use Case Scenario #8 <OCW>...............................................................................42
3.1.8.2 UI Design dan Deskripsi Objek UI #8 <OCW>.....................................................43
3.1.8.3 Identifikasi Object Baru & Tipe Kelas #8 <OCW>................................................46
3.1.8.4 Sequence Diagram&Component Diagram #8 <OCW>..........................................47
3.2 Diagram Kelas Keseluruhan......................................................................................................................48
3.3 Perancangan Detail Kelas..........................................................................................................................49
3.4 Perancangan Algoritma dan/atau Query....................................................................................................50
4. Matriks Kerunutan (Requirement Traceability Matrix)......................................................................................52
5. Skema Relasi dan Entity Relation Diagram (ERD) Aplikasi CeLOE LMS Telkom University...
52
5.1 Skema Relasi..............................................................................................................52
5.2 Entity Relation Diagram (ERD)...................................................................................52
Setelah Daftar Isi Boleh ada Daftar Tabel dan Daftar Gambar
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 5 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Daftar Tabel
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 6 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

6 dari 52
Daftar Gambar
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 7 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

1. Pendahuluan
1.1 Tujuan Penulisan Dokumen
Dokumen Spesifikasi Kebutuhan Perangkat Lunak (DPPL) ini disusun oleh mahasiswa untuk
memenuhi tugas dan persyaratan akademis dari mata Analisis Perancangan Perangkat Lunak (APPL), dengan
tujuan utama mendokumentasikan hasil analisis mendalam terhadap kebutuhan, fungsi, batasan, dan spesifikasi
teknis dari aplikasi CeLOE LMS milik Telkom University. Dokumen ini berfungsi sebagai bukti pemahaman dan
praktik dalam proses analisis rekayasa kebutuhan perangkat lunak, sehingga memberikan gambaran mengenai
bagaimana sistem CeLOE LMS memfasilitasi interaksi pembelajaran digital antara dosen, mahasiswa, dan
sistem akademik kampus. Oleh karena itu, dokumen ini akan digunakan sebagai acuan studi dan bahan evaluasi
oleh mahasiswa serta dosen pengampu untuk menilai kemampuan analisis dan pemahaman terhadap spesifikasi
sistem.
1.2 Lingkup Masalah
Lingkup masalah pada dokumen ini difokuskan pada analisis sistem aplikasi CeLOE LMS (Learning
Management System), yaitu platform media pembelajaran digital milik Telkom University yang memfasilitasi
interaksi daring antara dosen, mahasiswa, dan sistem akademik.
Adapun batasan masalah dan cakupan analisis dalam dokumen ini meliputi poin-poin berikut:
? Lingkungan Operasional Sistem Sistem dianalisis berdasarkan operasionalnya pada infrastruktur
server berbasis Linux dan Moodle Framework, serta aksesibilitasnya melalui berbagai platform
perangkat pengguna (desktop dan mobile).
? Batasan Infrastruktur Analisis mencakup keterbatasan pada infrastruktur server, khususnya terkait
aspek kapasitas penyimpanan dan skalabilitas sistem dalam menangani beban pengguna.
? Integrasi Sistem Analisis mewajibkan adanya integrasi dengan sistem akademik iGracias dan sistem
autentikasi SSO (Single Sign-On) Telkom University.
? Kepatuhan dan Keamanan Sistem harus mematuhi kebijakan keamanan yang berlaku, penerapan
protokol HTTPS, serta batasan teknis ukuran berkas (file size) maksimal sebesar 50 MB.
? Asumsi Keandalan Analisis didasarkan pada asumsi bahwa infrastruktur jaringan dan server
universitas dalam kondisi stabil, serta seluruh komponen eksternal (API iGracias dan SSO) selalu
tersedia dan konsisten.
1.3 Definisi dan Istilah
? LMS : Learning Management System
? OCW : OpenCourseWare
? FR : Functional Requirement
? SKPL : Spesifikasi Kebutuhan Perangkat Lunak
? API : Application Programming Interface
? SSO : Single Sign-On.
? OS : Operating System
? SQL : Structured Query Language
? PHP : Hypertext Preprocessor
? HTTPS : HyperText Transfer Protocol Secure.
? MB : MegaByte
? LTS : Long-Term Support.
? UI :User Interface
? DP : DataBase
? FAB :Floating Action Button
1.4 Referensi
Dokumentasi PL yang dirujuk oleh dokumen ini, minimal SKPL
Buku, Panduan, Dokumentasi lain yang dipakai dalam dokumen ini (jarang sekali!).
-Masukkan SKPL sebagai referensi
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 8 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

? Dokumen SKPL CeLOE LMS Telkom University, Kelompok Odet.
? Rumambi, F. F. (2022). KEKUATAN DAN KELEMAHAN SCHOOLOGY SEBAGAI
PLATFORM PEMBELAJARAN DARING: PERSPEKTIF MAHASISWA DI KELAS B ORAL
ENGLISH FOR ACADEMIC AND PRESENTATION SKILLS. Diakses pada Oktober Jumat,
2025, dari https://ejournal.unsrat.ac.id/index.php/jefs/article/download/40292/36085
(Rumambi, n.d., #)
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 9 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

2 Perancangan Global
2.1 Rencana Lingkungan Implementasi
Arsitektur perangkat lunak CeLOE LMS dirancang sebagai sistem berbasis web dengan infrastruktur
server di lingkungan cloud Telkom University. Sistem ini beroperasi di atas Linux Ubuntu Server 22. 04 LTS,
memanfaatkan web server Apache atau Nginx, serta menggunakan basis data MySQL/MariaDB. Aplikasi ini
dikembangkan dengan PHP 8. x melalui framework Moodle dan didukung oleh Node. js untuk fitur interaktif.
Pengguna dapat mengakses sistem melalui browser pada perangkat Windows, macOS, Linux, Android, dan iOS.
Aplikasi ini juga terhubung dengan layanan kampus seperti SSO untuk autentikasi, iGracias untuk sinkronisasi
data akademik, layanan email/notifikasi, platform pertemuan (Zoom/Google Meet), serta penyimpanan cloud.
Seluruh komunikasi data dilindungi dengan protokol HTTPS. Dengan arsitektur ini, CeLOE LMS mampu
menyediakan layanan yang stabil, aman, terintegrasi, dan mendukung akses untuk banyak pengguna.
2.2 Deskripsi Arsitektur Perangkat Lunak
No Nama Komponen Keterangan
1 Login Pengguna login menggunakan akun yang tersedia (SSO).
2 Notifikasi Sistem menampilkan notifikasi tugas baru.
3 Kalender Sistem menampilkan kalender terintegrasi dengan tenggat tugas.
4 Main Course Sistem dapat menampilkan daftar mata kuliah dalam satu
halaman jika terdaftar dalam suatu mata kuliah.
5 Mata Kuliah Pengguna dapat melihat, mengakses materi, serta mengelola
tugas dan nilai dalam setiap mata kuliah.
6 Integrasi Eksternal Sistem dapat terhubung dengan Integrasi aplikasi eksternal
(Microsoft Teams, Google Meet, Zoom, etc…)
7 Forum Diskusi Sistem menyediakan ruang diskusi bagi pengguna untuk
berinteraksi dan bertukar informasi terkait materi kuliah
8 OCW Mahasiswa dapat mengakses materi pembelajaran tambahan
yang bersifat terbuka di luar mata kuliah wajib.
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 10 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3 Perancangan Rinci
3.1 Realisasi Use Case
Berisi TABEL USE CASE sebagai berikut :
No Nama Use Case Deskripsi Use Case
1 Login Fitur yang digunakan Mahasiswa, Dosen, dan Administrator
untuk mengakses CeLoe LMS menggunakan akun yang
terdaftar.
2 Notifikasi Sistem secara otomatis menampilkan dan mengirimkan
notifikasi kepada pengguna setiap kali terdapat tugas baru yang
ditambahkan oleh dosen. Administrator dapat memantau log
notifikasi.
3 Kalender Sistem menyediakan kalender yang menampilkan jadwal
perkuliahan, tenggat pengumpulan tugas, dan event lain yang
terintegrasi sesuai peran pengguna (Mahasiswa, dosen, dan
administrator).
4 Main Course Sistem menyediakan daftar mata kuliah yang dapat diakses
oleh pengguna (Mahasiswa, dosen, dan administrator) sesuai
peran masing-masing.
5 Mata Kuliah Sistem menyediakan akses bagi pengguna untuk melihat
materi, tugas, dan penilaian pada mata kuliah yang diikuti.
Administrator dapat mengelola daftar mata kuliah dan peran
pengguna.
6 Integrasi Eksternal Proses Dosen menambahkan aktivitas Zoom Meeting ke dalam
mata kuliah, dan sistem memproses data melalui API untuk
menghasilkan link pertemuan yang dapat diakses oleh
Mahasiswa/Admin.
7 Forum Diskusi Sistem menyediakan fasilitas diskusi internal bagi Mahasiswa,
Dosen, dan Administrator untuk melakukan interaksi dalam
suatu mata kuliah atau forum umum. Administrator dapat
melakukan moderasi terhadap konten yang tidak pantas.
8 OCW Sistem menyediakan akses terbuka terhadap materi
pembelajaran yang dapat digunakan oleh mahasiswa, termasuk
materi di luar mata kuliah wajib. Administrator dapat
mengunggah atau memperbarui materi OCW.
3.1.1 Use Case #1 Login
3.1.1.1 Use Case Scenario #1 Login
Skenario Use Case #1 :Login
Pre-Condition
? Pengguna (Mahasiswa, Dosen, atau Administrator) telah memiliki akun SSO Telkom University yang
aktif.
? Pengguna berada pada halaman Login aplikasi CeLoe LMS.
Use Case Description
Primary Flow
1. Pengguna membuka aplikasi CeLoe LMS.
2. Sistem menampilkan halaman Login.
3. Pengguna memilih metode login menggunakan akun SSO Telkom University.
4. Pengguna memasukkan username dan password.
5. Sistem memvalidasi kredensial pengguna melalui layanan SSO.
6. Sistem mengautentikasi pengguna dan menentukan peran pengguna (Mahasiswa, Dosen, atau
Administrator).
7. Sistem membuat sesi login pengguna.
8. Sistem menampilkan dashboard utama sesuai dengan peran pengguna.
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 11 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Alternative Flow
1.  Pengguna memasukkan username dan/atau password yang tidak valid.
2.  Sistem gagal melakukan validasi kredensial
3.  Sistem menampilkan pesan kesalahan “Login gagal, username atau password salah”.
4.  Sistem tetap berada pada halaman Login dan meminta pengguna untuk mengulangi proses
login.
Post-Condition
?  Pengguna berhasil login dan diarahkan ke dashboard sesuai peran atau
?  Pengguna tetap berada di halaman Login jika autentikasi gagal.

3.1.1.2  UI Design dan Deskripsi Objek UI #1 Login
Tabel Deskripsi Objek UI
| ID.  | NAMA LAYAR  |     |     | DESKRIPSI  |     |
| ---- | ----------- | --- | --- | ---------- | --- |
LAYAR
L001  Halaman Login  Menampilkan form login untuk autentikasi pengguna
menggunakan akun SSO Telkom University
L002  Halaman Autentikasi SSO  Halaman input username dan password SSO
L003  Dashboard Pengguna  Halaman utama setelah login sesuai peran pengguna

Antarmuka L001: Halaman Login
| Id_Objek   | JENIS  | LABEL*  |     | Keterangan**  |     |
| ---------- | ------ | ------- | --- | ------------- | --- |

| LogoApp  | Image  | CeLoe LMS  | Menampilkan logo aplikasi  |     |     |
| -------- | ------ | ---------- | -------------------------- | --- | --- |
BtnSSO  Button  Login dengan  Mengarahkan pengguna ke halaman autentikasi
|           |       | SSO           | SSO                     |     |     |
| --------- | ----- | ------------- | ----------------------- | --- | --- |
| TextInfo  | Text  | Gunakan akun  | Informasi metode login  |     |     |
Telkom University
|     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- |

Antarmuka L002: Halaman Autentikasi SSO
| Id_Objek   | JENIS  | LABEL*  |     | Keterangan**  |     |
| ---------- | ------ | ------- | --- | ------------- | --- |

| FieldUserna | Textbox  | Username  | Input username SSO  |     |     |
| ----------- | -------- | --------- | ------------------- | --- | --- |
me
| FieldPasswo | Password  | Password  | Input password SSO  |     |     |
| ----------- | --------- | --------- | ------------------- | --- | --- |
rd
| BtnLogin  | Button  | Login        | Mengirim data login ke sistem  |     |     |
| --------- | ------- | ------------ | ------------------------------ | --- | --- |
| MsgError  | Text    | Login gagal  | Muncul jika autentikasi gagal  |     |     |

Antarmuka L003: Dashboard Pengguna
| Id_Objek   | JENIS  | LABEL*  |     | Keterangan**  |     |
| ---------- | ------ | ------- | --- | ------------- | --- |

HeaderUser  Text  Nama Pengguna  Menampilkan identitas pengguna
| MenuNaviga | Menu  | Navigasi  | Akses fitur CeLoe LMS  |     |     |
| ---------- | ----- | --------- | ---------------------- | --- | --- |
tion
ContentArea  Panel  Konten Utama  Menampilkan konten sesuai peran
|     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- |

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     | Halaman 12 dari 53   |
| --------------------------- | --- | --- | --------- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.1.3  Identifikasi Object dan Tipe Kelas #1 Login

TABEL OBJECT PERANCANGAN
| No  Nama Object Baru              | Jenis / Tipe Kelas    |     |
| --------------------------------- | --------------------- | --- |
| 1  Halaman Login                  | Boundary (Interface)  |     |
| 2  Halaman Autentikasi SSO        | Boundary (Interface)  |     |
| 3  Dashboard Pengguna             | Boundary (Interface)  |     |
| 4  Data Pengguna                  | Entity (Basis Data)   |     |
| 5  Data Akun SSO                  | Entity (Basis Data)   |     |
| 6  Session Pengguna               | Entity (Basis Data)   |     |
| 7  Login Controller               | Controller            |     |
| 8  SSO Authentication Controller  | Controller            |     |
| 9  Session Manager                | Controller            |     |

3.1.1.4  Sequence Diagram #1 Login

| Prodi S1 Informatika Tel-U  | DPPL-XXX  | Halaman 13 dari 53   |
| --------------------------- | --------- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.2 Use Case #2 Notifikasi
Skenario Use Case #Notifikasi
Primary Flow
1. Dosen menambahkan tugas baru pada salah satu matakuliah.
2. Sistem menyimpan tugas dan mengirimkan notifikasi ke pengguna terkait (Mahasiswa / Dosen lain bila
diperlukan).
3. Sistem menampilkan notifikasi di dashboard mahasiswa yang dituju.
4. Administrator membuka halaman log notifikasi (Khusus Administrator).
5. Sistem menampilkan data log pengiriman notifikasi.
Alternate Flow
1. Dosen menambah tugas baru.
2. Sistem gagal mengirim notifikasi akibat gangguan jaringan/server.
3. Sistem mencatat log gagal kirim dan menampilkan pesan kesalahan kepada admin, “Notifikasi gagal
dikirim”.
3.1.2.1 Use Case Scenario #2 Notifikasi
Skenario Use Case #Notifikasi :
i. Pre-Condition
a. Pengguna (mahasiswa, dosen, administrator) sudah login ke sistem
b. Terdapat kelas dan pengguna yang terkait dengan tugas yang ditambahkan
ii. Use Case Description
a. Primary Flow
1. Dosen menambahkan tugas baru pada salah satu mata kuliah
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 14 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

2.  Sistem menyimpan tugas dan mengirimkan Notifikasi ke Mahasiswa
3.  Sistem menampilkan Notifikasi di menu Notifikasi pengguna
4.  Mahasiswa dapat memilih Notifikasi yang ingin dilihat
Sistem menampilkan detail Notifikasi
5.
b.  Alternative Flow
1.  Dosen menambahkan tugas baru
2.  Sistem gagal mengirim Notifikasi karena gangguan jaringan/server
3.  Sistem mencatat log kegagalan dan menampilkan pesan kepada admin (“Notifikasi
gagal terkirim”)
4.  Sistem tetap menyimpan data tugas tanpa  Notifikasi terkirim
5.  Pengguna  tidak menerima Notifkasi
iii.  Post-Condition
a.  Notifikasi tampil pada dashboard pengguna (jika berhasil)
b.  Riwayat pengiriman atau kegagalan Notifikasi tersimpan dalam log sistem
3.1.2.2  UI Design dan Deskripsi Objek UI #2 Notifikasi

Tabel Deskripsi Objek UI
| ID.  | NAMA LAYAR  |     |     | DESKRIPSI  |     |
| ---- | ----------- | --- | --- | ---------- | --- |
LAYAR
N001  Halaman Tambah Tugas  Dosen menambahkan tugas baru yang nantinya memicu
notifikasi.
N002  Halaman Dashboard / Timeline  Menampilkan timeline tugas pengguna berdasarkan
tanggal.
N003  Halaman Notifikasi  Menampilkan daftar notifikasi yang diterima pengguna.
N004  Halaman Detail Notifikasi Tugas  Menampilkan detail tugas berdasarkan notifikasi yang
dipilih.
N005  Halaman Gagal Kirim Notifikasi  Menampilkan pesan peringatan bahwa notifikasi tidak
berhasil terkirim akibat gangguan jaringan/server

Antarmuka N001: Halaman Tambah Tugas (Dosen)
| Id_Objek    | JENIS    | LABEL             |                                | Keterangan  |     |
| ----------- | -------- | ----------------- | ------------------------------ | ----------- | --- |
| BtnBack     | Icon     | ?                 | Kembali ke halaman sebelumnya  |             |     |
| FieldTitle  | Textbox  | Assignment title  | Input judul tugas              |             |     |
FieldOpenD Date-time  Set opening date  Input tanggal dan waktu pembukaan tugas
| ate  | picker  |     |     |     |     |
| ---- | ------- | --- | --- | --- | --- |
FieldCloseD Date-time  Set closing date  Input tanggal dan waktu deadline tugas
| ate         | picker  |             |                         |     |     |
| ----------- | ------- | ----------- | ----------------------- | --- | --- |
| BtnAddFile  | Button  | Add files…  | Menambahkan file tugas  |     |     |
ListAttachm List  Daftar file  Menampilkan file yang telah diupload
ent
| FieldDescrip | Textbox  | Assignment   | Input deskripsi tugas  |     |     |
| ------------ | -------- | ------------ | ---------------------- | --- | --- |
| tion         |          | description  |                        |     |     |
BtnAddAssi Button  Add Assignment  Menyimpan tugas dan mengaktifkan notifikasi
gnment

Antarmuka N002: Halaman Dashboard
| Id_Objek      | JENIS  | LABEL  |     | Keterangan  |     |
| ------------- | ------ | ------ | --- | ----------- | --- |
UserName  Text  PUTRA RIZAQI  Menampilkan identitas pengguna
ATHALLAH
?
| BtnSearch    | Icon      |               | Pencarian tugas/event     |     |     |
| ------------ | --------- | ------------- | ------------------------- | --- | --- |
| FieldSearch  | Search    | Search by     | Mencari aktivitas         |     |     |
|              | box       | activity…     |                           |     |     |
| DropdownPe   | Dropdown  | Next 30 days  | Menentukan periode waktu  |     |     |
riod

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     | Halaman 15 dari 53   |
| --------------------------- | --- | --- | --------- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

| Id_Objek      | JENIS  | LABEL  |     | Keterangan  |     |
| ------------- | ------ | ------ | --- | ----------- | --- |
UserName  Text  PUTRA RIZAQI  Menampilkan identitas pengguna
ATHALLAH
| BtnSort     | Icon  | Urutkan  | Mengurutkan daftar aktivitas  |     |     |
| ----------- | ----- | -------- | ----------------------------- | --- | --- |
| ListEvent   | List  | –        | Daftar tugas sesuai tanggal   |     |     |
| EventIcon   | Icon  | ?        | Ikon tugas/event              |     |     |
| EventTitle  | Text  | TUGAS:   | Judul tugas                   |     |     |
PROJECT #5
| EventTime  | Text  | 23:59  | Waktu deadline  |     |     |
| ---------- | ----- | ------ | --------------- | --- | --- |
BtnSubmit  Button  Kirimkan  Menuju halaman pengumpulan tugas
Pengajuan
| BottomMen | Icon  | ?   | Navigasi ke halaman Notifikasi  |     |     |
| --------- | ----- | --- | ------------------------------- | --- | --- |
uNotif
| BottomMen | Icon  | ?   | Navigasi ke halaman Kalender  |     |     |
| --------- | ----- | --- | ----------------------------- | --- | --- |
uCalendar
?
| BottomMen | Icon  |     | Kembali ke Dashboard  |     |     |
| --------- | ----- | --- | --------------------- | --- | --- |
uHome
?
| BottomMen | Icon  |     | Menu mata kuliah  |     |     |
| --------- | ----- | --- | ----------------- | --- | --- |
uCourse
| BottomMen | Icon  | ?   | Menu lain  |     |     |
| --------- | ----- | --- | ---------- | --- | --- |
uMore

Antarmuka N003: Halaman Notifikasi
| Id_Objek     | JENIS  | LABEL*         |                         | Keterangan**  |     |
| ------------ | ------ | -------------- | ----------------------- | ------------- | --- |
| TitleNotif   | Text   | Notifications  | Judul halaman           |               |     |
| ProfileIcon  | Icon   | Foto profil    | Menuju halaman profil   |               |     |
| ListNotif    | List   | –              | Daftar notifikasi       |               |     |
| IconNotif    | Icon   | ? / ?          | Ikon jenis notifikasi   |               |     |
| TextNotif    | Text   | “You have      | Isi ringkas notifikasi  |               |     |
assignment
due…”
| TextTime  | Text  | 3 hours ago   | Informasi waktu    |     |     |
| --------- | ----- | ------------- | ------------------ | --- | --- |
| BottomMen | Menu  | (ikon sama    | Navigasi aplikasi  |     |     |
| u*        |       | dengan N002)  |                    |     |     |

Antarmuka N004: Halaman Detail Notifikasi Tugas
| Id_Objek      | JENIS  | LABEL*  |                                | Keterangan**  |     |
| ------------- | ------ | ------- | ------------------------------ | ------------- | --- |
| BtnBack       | Icon   | ?       | Kembali ke halaman Notifikasi  |               |     |
| IconEvent     | Icon   | ?       | Ikon tugas                     |               |     |
| TitleEvent    | Text   | TUGAS:  | Judul tugas                    |               |     |
PROJECT #5 is
due
| FieldWhen   | Text  | Tanggal & waktu  | Deadline tugas  |     |     |
| ----------- | ----- | ---------------- | --------------- | --- | --- |
| FieldEventT | Text  | Course event     | Jenis tugas     |     |     |
ype
| FieldCourse  | Text  | ANALISIS…  | Informasi mata kuliah  |     |     |
| ------------ | ----- | ---------- | ---------------------- | --- | --- |
(nama mata
kuliah)
| FieldDescrip | Text  | Deskripsi tugas  | Penjelasan  |     |     |
| ------------ | ----- | ---------------- | ----------- | --- | --- |
tion
| BtnGoActivi | Button  | Go to activity  | Menuju halaman detail tugas  |     |     |
| ----------- | ------- | --------------- | ---------------------------- | --- | --- |
ty
| FieldRemind | Text    | Default (1 hour  | Pengingat tugas            |     |     |
| ----------- | ------- | ---------------- | -------------------------- | --- | --- |
| er          |         | before)          |                            |     |     |
| BtnSetRemi  | Button  | Set a new        | Menambahkan reminder lain  |     |     |
| nder        |         | reminder         |                            |     |     |

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     | Halaman 16 dari 53   |
| --------------------------- | --- | --- | --------- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Antarmuka N005: Halaman Gagal Kirim Notifikasi

| Id_Objek   | JENIS  | LABEL*  |     | Keterangan**  |     |
| ---------- | ------ | ------- | --- | ------------- | --- |
PopupError  Dialog  Notifikasi gagal  Menampilkan pesan kesalahan
|              | Box   | terkirim!  |                                  |     |     |
| ------------ | ----- | ---------- | -------------------------------- | --- | --- |
| IconWarning  | Icon  | ? / !      | Menunjukkan bahwa terjadi error  |     |     |
BtnClose  (Opsional)  –  Pengguna dapat menutup pesan dan kembali ke
|     | Button /  |     | halaman sebelumnya  |     |     |
| --- | --------- | --- | ------------------- | --- | --- |
Tap area
OverlayBack Layer  –  Meredupkan tampilan halaman sebelumnya untuk
| ground  |     |     | fokus ke pesan kesalahan  |     |     |
| ------- | --- | --- | ------------------------- | --- | --- |
3.1.2.3  Identifikasi Object Baru & Tipe Kelas #2 Notifikasi
TABLE OBJECT PERANCANGAN
| No  Nama Object Baru                |     |     | Jenis / Tipe Kelas    |     |     |
| ----------------------------------- | --- | --- | --------------------- | --- | --- |
| 1  Halaman Tambah Tugas             |     |     | Boundary (Interface)  |     |     |
| 2  Halaman Dashboard / Timeline     |     |     | Boundary (Interface)  |     |     |
| 3  Halaman Notifikasi               |     |     | Boundary (Interface)  |     |     |
| 4  Halaman Detail Notifikasi        |     |     | Boundary (Interface)  |     |     |
| 5  Data Tugas                       |     |     | Entity (Basis data)   |     |     |
| 6  Data Notifikasi                  |     |     | Entity (Basis data)   |     |     |
| 7  Data Reminder                    |     |     | Entity (Basis data)   |     |     |
| 8  Controller Tugas                 |     |     | Controller            |     |     |
| 9  Controller Notifikasi            |     |     | Controller            |     |     |
| 10  Controller Reminder             |     |     | Controller            |     |     |
| 11  Bottom Navigation               |     |     | Boundary              |     |     |
| 12  Filter Notifikasi               |     |     | Controller            |     |     |
| 13  Halaman Gagal Kirim Notifikasi  |     |     | Boundary (Interface)  |     |     |
| 14  Pesan Error Notifikasi          |     |     | Boundary (Interface)  |     |     |
| 15  Controller Error Handling       |     |     | Controller            |     |     |
Notifikasi

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     | Halaman 17 dari 53   |
| --------------------------- | --- | --- | --------- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.2.4 Sequence Diagram #2 Notifikasi
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 18 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.3 Use Case #3 Kalender
Skenario Use Case #Kalender
Primary Flow
Mahasiswa atau dosen membuka menu “Kalender”.
1.
2. Sistem menampilkan kalender berisi jadwal kelas dan tenggat tugas sesuai mata kuliah pengguna.
3. Mahasiswa atau dosen memilih salah satu event/tugas untuk melihat detail.
4. Sistem menampilkan detail event/tugas (nama, deskripsi, mata kuliah, dan tenggat). Administrator
dapat menambah dan mengedit event global dalam kalender.
Alternate Flow
Mahasiswa atau dosen membuka menu “Kalender”.
1.
2. Sistem memverifikasi tidak ada data jadwal/tugas terkait pengguna.
3. Sistem menampilkan pesan, “Tidak ada jadwal atau tugas terdaftar”.
4. Sistem tetap berada di halaman Kalender tanpa ada event yang ditampilkan.
3.1.3.1 Use Case Scenario #3 Kalender
Skenario Use Case #Kalender :
Pre-Condition
? Pengguna (mahasiswa, dosen, administrator) sudah login dan memiliki akses terhadap mata kuliah atau
event terkait
Use Case Description
Primary Flow
1. Mahasiswa atau Dosen membuka menu Kalender
2. Sistem menampilkan kalender berisi jadwal kelas dan tenggat tugas
3. Mahasiswa atau Dosen memilih salah satu event/tugas untuk melihat detail
4. Sistem menampilkan detail event/tugas
5. Administrator dapat menambah atau mengedit event global pada Kalender
Alternative Flow
1. Mahasiswa atau Dosen membuka menu Kalender
2. Sistem memverifikasi tidak ada data jadwal/tugas terkait pengguna
3. Sistem menampilkan pesan “Tidak ada Tugas”
4. Sistem tetap berada pada halaman Kalender tanpa event yang ditampilkan
5. Mahasiswa dapat kembali atau Administrator dapat menambahkan event
Post-Condition
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 19 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.3.2  UI Design dan Deskripsi Objek UI #3 Kalender

Tabel Deskripsi Objek UI
| ID.  | NAMA LAYAR  |     |     | DESKRIPSI  |     |
| ---- | ----------- | --- | --- | ---------- | --- |
LAYAR
K001  Halaman Kalender Bulanan  Menampilkan kalender bulanan aktif dengan penanda
event/tugas pada setiap tanggal
K002  Halaman Kalender Harian  Menampilkan daftar event/tugas pada tanggal yang dipilih
K003  Halaman Detail Event  Menampilkan detail event/tugas (nama, mata kuliah,
deskripsi, reminder)
K004  Halaman Tambah Event  Form untuk menambahkan event baru ke kalender (khusus
admin/dosen)
K005  Halaman Tidak ada Tugas  Menampilkan informasi bahwa tidak terdapat event/tugas
pada tanggal yang dipilih (“Tidak ada Tugas”)

Antarmuka K001: Halaman Kalender Bulanan
| Id_Objek   | JENIS  | LABEL*    |                | Keterangan**  |     |
| ---------- | ------ | --------- | -------------- | ------------- | --- |
| TitleCalen | Text   | Calendar  | Judul halaman  |               |     |
dar
| BtnPrevM | Button/I | ?   | Pindah ke bulan sebelumnya  |     |     |
| -------- | -------- | --- | --------------------------- | --- | --- |
| onth     | con      |     |                             |     |     |
?
| BtnNextM | Button/I |           | Pindah ke bulan selanjutnya  |     |     |
| -------- | -------- | --------- | ---------------------------- | --- | --- |
| onth     | con      |           |                              |     |     |
| MonthLab | Text     | November  | Menunjukkan bulan aktif      |     |     |
| el       |          | 2025      |                              |     |     |
BtnFilter  Icon  ?  Filter jenis event (tugas, jadwal kuliah…)
?
| BtnMore  | Icon  |     | Menu tambahan  |     |     |
| -------- | ----- | --- | -------------- | --- | --- |
CellTangga Calendar  Tanggal  Jika ada titik ? menunjukkan event pada
| l         | Cell       |     | tanggal tersebut                        |     |     |
| --------- | ---------- | --- | --------------------------------------- | --- | --- |
| DotEvent  | Indicator  | •   | Penanda event/tugas pada tanggal        |     |     |
| BtnAddEv  | FAB        | +   | Tambah event baru (khusus dosen/admin)  |     |     |
| ent       | Button     |     |                                         |     |     |
?
| BottomMe | Menu  |     | Menu Notifikasi  |     |     |
| -------- | ----- | --- | ---------------- | --- | --- |
| nuNotif  | Icon  |     |                  |     |     |
?
| BottomMe    | Menu  |     | Menu Kalender  |     |     |
| ----------- | ----- | --- | -------------- | --- | --- |
| nuCalendar  | Icon  |     |                |     |     |
(aktif)
?
| BottomMe  | Menu  |     | Kembali ke dashboard  |     |     |
| --------- | ----- | --- | --------------------- | --- | --- |
| nuHome    | Icon  |     |                       |     |     |
| BottomMe  | Menu  | ?   | Menu Mata Kuliah      |     |     |
| nuCourse  | Icon  |     |                       |     |     |
| BottomMe  | Menu  | ?   | Menu lain             |     |     |
| nuMore    | Icon  |     |                       |     |     |

Antarmuka K002: Halaman Kalender harian
| Id_Objek   | JENIS  | LABEL*     |                               | Keterangan**  |     |
| ---------- | ------ | ---------- | ----------------------------- | ------------- | --- |
| TitleDate  | Text   | Sabtu, 29  | Menunjukkan tanggal terpilih  |               |     |
November 2025
| BtnPrevDay  | Icon  | ?   | Pindah ke tanggal sebelumnya          |     |     |
| ----------- | ----- | --- | ------------------------------------- | --- | --- |
| BtnNextDay  | Icon  | ?   | Pindah ke tanggal berikutnya          |     |     |
| ListEvent   | List  | –   | Menampilkan event/tugas yang terkait  |     |     |
?
| EventIcon   | Icon  |        | Ikon jenis event/tugas  |     |     |
| ----------- | ----- | ------ | ----------------------- | --- | --- |
| EventTitle  | Text  | TUGAS  | Nama event/tugas        |     |     |
PROJECT #5 is
due
| EventTime  | Text  | 11:59 PM  | Deadline event  |     |     |
| ---------- | ----- | --------- | --------------- | --- | --- |

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     | Halaman 20 dari 53   |
| --------------------------- | --- | --- | --------- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

| Id_Objek   | JENIS  | LABEL*  |                    | Keterangan**  |     |
| ---------- | ------ | ------- | ------------------ | ------------- | --- |
| BtnAddEven | FAB    | +       | Tambah event baru  |               |     |
t
| BottomMen | Sama     | -   | Navigasi bawah aplikasi  |     |     |
| --------- | -------- | --- | ------------------------ | --- | --- |
| u*        | seperti  |     |                          |     |     |
halaman
bulanan

Antarmuka K003: Halaman detail event
| Id_Objek    | JENIS  | LABEL*         |                                | Keterangan**  |     |
| ----------- | ------ | -------------- | ------------------------------ | ------------- | --- |
| BtnBack     | Icon   | ?              | Kembali ke halaman sebelumnya  |               |     |
| IconEvent   | Icon   | ?              | Ikon jenis event/tugas         |               |     |
| EventTitleD | Text   | TUGAS:         | Judul event                    |               |     |
| etail       |        | PROJECT #5 is  |                                |               |     |
due
| WhenDate  | Text  | Sabtu, 29  | Waktu tenggat  |     |     |
| --------- | ----- | ---------- | -------------- | --- | --- |
November 2025,
23:59
| EventType    | Text  | Course event      | Jenis event            |     |     |
| ------------ | ----- | ----------------- | ---------------------- | --- | --- |
| CourseName   | Text  | Nama mata kuliah  | Informasi mata kuliah  |     |     |
| DescriptionF | Text  | Deskripsi         | Penjelasan tugas       |     |     |
ield
| BtnToActivit | Button  | Go to activity  | Menuju halaman tugas  |     |     |
| ------------ | ------- | --------------- | --------------------- | --- | --- |
y
| ReminderInf | Text    | Default (1 hour  | Reminder aktif          |     |     |
| ----------- | ------- | ---------------- | ----------------------- | --- | --- |
| o           |         | before)          |                         |     |     |
| BtnSetRemi  | Button  | Set a new        | Menambah reminder baru  |     |     |
| nder        |         | reminder         |                         |     |     |

Antarmuka K004: Halaman tambah event
| Id_Objek    | JENIS      | LABEL*         |                        | Keterangan**  |     |
| ----------- | ---------- | -------------- | ---------------------- | ------------- | --- |
| BtnBack     | Icon       | ?              | Kembali                |               |     |
| FieldTitle  | Textbox    | Event title    | Input nama event       |               |     |
| FieldDate   | Date-Time  | 29 Nov 2025 /  | Pilih tanggal dan jam  |               |     |
|             | Picker     | 22.35          |                        |               |     |
| FieldEventT | Text       | User           | Pilihan jenis event    |               |     |
ype
| BtnAddRem | Button  | +   | Menambahkan pengingat  |     |     |
| --------- | ------- | --- | ---------------------- | --- | --- |
inder
| ReminderIte | Text  | Default (1 hour  | Reminder aktif      |     |     |
| ----------- | ----- | ---------------- | ------------------- | --- | --- |
| m           |       | before)          |                     |     |     |
| BtnDeleteRe | Icon  | ?                | Menghapus reminder  |     |     |
minder
| RadioNoDur | Radio  | Without duration  | Event tidak memiliki durasi  |     |     |
| ---------- | ------ | ----------------- | ---------------------------- | --- | --- |
ation
| RadioUntil   | Radio    | Until           | Pilih waktu selesai event  |     |     |
| ------------ | -------- | --------------- | -------------------------- | --- | --- |
| RadioDurati  | Radio    | Duration in     | Durasi event spesifik      |     |     |
| onMin        |          | minutes         |                            |     |     |
| FieldRepeat  | Text     | Repeat weekly…  | Ulangi event               |     |     |
| FieldDescrip | Textbox  | Description     | Deskripsi event            |     |     |
tion
| BtnSaveEve | Button  | Save  | Menyimpan event baru  |     |     |
| ---------- | ------- | ----- | --------------------- | --- | --- |
nt

Antarmuka K005: Halaman “Tidak ada Tugas”

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     | Halaman 21 dari 53   |
| --------------------------- | --- | --- | --------- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

| Id_Objek   | JENIS  | LABEL*  |                                | Keterangan**  |     |
| ---------- | ------ | ------- | ------------------------------ | ------------- | --- |
| BtnBack    | Icon   | ?       | Kembali ke halaman sebelumnya  |               |     |
TitleDate  Text  Sabtu, 29  Menampilkan tanggal yang dipilih
November 2025
MsgNoTask  Text  Tidak ada Tugas  Informasi bahwa tidak ada tugas pada tanggal
tersebut
BtnFilter  Icon  ?  Filter jenis event/tugas (ikon sama dengan
halaman lain)
| BtnMore   | Icon  | ?   | Menu tambahan                   |     |     |
| --------- | ----- | --- | ------------------------------- | --- | --- |
| BottomMen | Icon  | ?   | Navigasi ke halaman Notifikasi  |     |     |
uNotif
| BottomMen  | Icon     | ?   | Navigasi ke halaman Kalender  |     |     |
| ---------- | -------- | --- | ----------------------------- | --- | --- |
| uCalendar  | (aktif)  |     |                               |     |     |
?
| BottomMen | Icon  |     | Kembali ke dashboard  |     |     |
| --------- | ----- | --- | --------------------- | --- | --- |
uHome
?
| BottomMen | Icon  |     | Menu mata kuliah  |     |     |
| --------- | ----- | --- | ----------------- | --- | --- |
uCourse
| BottomMen | Icon  | ?   | Menu lainnya  |     |     |
| --------- | ----- | --- | ------------- | --- | --- |
uMore

3.1.3.3  Identifikasi Object dan Tipe Kelas #3 Kalender
TABLE OBJECT PERANCANGAN
| No  Nama Object Baru                 |     |     | Jenis / Tipe Kelas       |     |     |
| ------------------------------------ | --- | --- | ------------------------ | --- | --- |
| 1  Halaman Kalender Bulanan          |     |     | Boundary (Interface)     |     |     |
| 2  Halaman Kalender Harian           |     |     | Boundary (Interface)     |     |     |
| 3  Halaman Detail Event              |     |     | Boundary (Interface)     |     |     |
| 4  Halaman Tambah Event              |     |     | Boundary (Interface)     |     |     |
| 5  Halaman “Tidak ada Tugas”         |     |     | Boundary (Interface)     |     |     |
| 6  Event / Assignment                |     |     | Entity (Basis data)      |     |     |
| 7  Reminder                          |     |     | Entity (Basis data)      |     |     |
| 8  Controller Kalender               |     |     | Controller (Pemrosesan)  |     |     |
| 9  Controller Event                  |     |     | Controller (Pemrosesan)  |     |     |
| 10  Controller Reminder              |     |     | Controller (Pemrosesan)  |     |     |
| 11  Filter Event                     |     |     | Controller               |     |     |
| 12  Navigasi Aplikasi (Bottom Menu)  |     |     | Boundary                 |     |     |

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     | Halaman 22 dari 53   |
| --------------------------- | --- | --- | --------- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.3.4 Sequence Diagram #3 Kalender
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 23 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.4 Use Case #4 Main Course
Skenario Use Case #4:Mata Kuliah
? Primary Flow
i. Mahasiswa atau dosen menekan tombol “main course” pada navigation bar halaman
utama/home aplikasi.
ii. Sistem memeriksa daftar mata kuliah dan menemukan bahwa pengguna terdaftar
dalam satu atau lebih mata kuliah.
iii. Sistem menampilkan halaman main course yang menampilkan daftar mata kuliah
yang terdaftar.
? Alternative Flow
i. Mahasiswa atau dosen menekan tombol “main course” pada navigation bar halaman
utama aplikasi.
ii. Sistem memeriksa daftar mata kuliah dan menemukan bahwa pengguna tidak
terdaftar dalam mata kuliah manapun.
iii. Sistem menampilkan halaman dengan pesan “belum terdaftar di mata kuliah
manapun”.
3.1.4.1 Use Case Scenario #4 Main Course
Skenario Use Case #4 :main Course
Pre-Condition
Pengguna (Mahasiswa, dosen, dan administrator) telah berhasil login ke dalam sistem dan telah berada pada
halaman utama/home.
Use Case Description
Primary Flow
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 24 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

1. Mahasiswa atau dosen menekan tombol “main course” pada navigation bar halaman
utama/home aplikasi.
2. Sistem memeriksa daftar mata kuliah dan menemukan bahwa pengguna terdaftar dalam satu
atau lebih mata kuliah.
3. Sistem menampilkan halaman main course yang menampilkan daftar mata kuliah yang
terdaftar.
Alternative Flow
1. Mahasiswa atau dosen menekan tombol “main course” pada navigation bar halaman utama
aplikasi.
2. Sistem memeriksa daftar mata kuliah dan menemukan bahwa pengguna tidak terdaftar dalam
mata kuliah manapun.
3. Sistem menampilkan halaman dengan pesan “belum terdaftar di mata kuliah manapun”.
Post-Condition
Daftar mata kuliah berhasil ditampilkan dan pengguna dapat memilih salah satu mata kuliah untuk
mengakses informasi atau fitur yang tersedia (Memilih mata kuliah terdapat use case yang berbeda).
3.1.4.2 UI Design dan Deskripsi Objek UI #4 Main Course
Tabel Deskripsi Objek UI
ID. NAMA PAGE DESKRIPSI
PAGE
P001 Halaman Home Menampilkan halaman awal pengguna.
P002 Halaman Main Course Menampilkan daftar mata kuliah yang
terdaftar.
P001 : Halaman Home
Id_Objek JENIS LABEL Keterangan
Search1 Button search Jika diklik, akan memasuki halaman
“cari” terkait fitur aplikasi LMS (Bukan
bagian dari Use Case Scenario).
OCW1 Button OCW Jika diklik, akan memasuki halaman
“OCW” (Bukan bagian dari Use Case
Scenario).
NAE1 Button News and Event Jika diklik, akan memasuki halaman
“News and Event” (Bukan bagian dari
Use Case Scenario).
Dashboard1 Button Dashboard Jika diklik, akan memasuki halaman
“Dashboard” (Bukan bagian dari Use
Case Scenario).
Notification1 Button Notification Jika diklik, akan memasuki halaman
“Notification” (Bukan bagian dari Use
Case Scenario).
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 25 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Calendar1  Button  Calendar  Jika diklik, akan memasuki halaman
“Calendar” (Bukan bagian dari Use Case
Scenario).
Home1  Button  Home  Jika diklik, akan mengembalikan halaman
ke halaman “Home” (Bukan bagian dari
Use Case Scenario).
MainCourse1  Button  MainCourse  Jika diklik, akan memasuki halaman
“Main Course”.
| More1  | Button  | More  |     | Jika diklik, akan memasuki halaman  |     |     |
| ------ | ------- | ----- | --- | ----------------------------------- | --- | --- |
“More” yang berisikan fitur tambahan
(Bukan bagian dari Use Case Scenario).

 P002 : Halaman Main Course
| Id_Objek   | JENIS   |         | LABEL  |                                     | Keterangan  |     |
| ---------- | ------- | ------- | ------ | ----------------------------------- | ----------- | --- |
|            |         |         |        |                                     |             |     |
| Profil2    | Button  | Profil  |        | Jika diklik, akan memasuki halaman  |             |     |
“Profil” dari pengguna (Bukan bagian
dari Use Case Scenario).
 Search2  Text Box  Search  Jika diklik, text box dapat diisi dengan
mata kuliah yang ingin dicari. Nantinya
mata kuliah yang dicari akan
ditampilkan pada halaman “Main
Course”.
Status2  Dropdown  Status  Jika diklik, akan menampilkan daftar
|     | Menu  |     |     | tarik-turun yang berisi status mata  |     |     |
| --- | ----- | --- | --- | ------------------------------------ | --- | --- |
kuliah (in progress, future, past) yang
akan muncul di halaman main course.
| Sort2  | Button  | Sort  |     | Jika diklik, akan mengurutkan daftar  |     |     |
| ------ | ------- | ----- | --- | ------------------------------------- | --- | --- |
mata kuliah yang tampil di halaman
“Main Course” sesuai dari urutan nama
abjad awal ke akhir atau abjad akhir ke
awal.
MataKuliahX  Button  Mata Kuliah 1,  Jika diklik, akan memasuki halaman
|     |     | Mata Kuliah 2,  |     | “Mata Kuliah” sesuai mata kuliah yang  |     |     |
| --- | --- | --------------- | --- | -------------------------------------- | --- | --- |
|     |     | Mata Kuliah 3   |     | dipilih (Terdapat pada use case yang   |     |     |
berbeda)
Notification2  Button  Notification  Jika diklik, akan memasuki halaman
“Notification” (Bukan bagian dari Use
Case Scenario Scenario).

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     |     | Halaman 26 dari 53   |
| --------------------------- | --- | --- | --------- | --- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Calendar2 Button Calendar Jika diklik, akan memasuki halaman
“Calendar” (Bukan bagian dari Use
Case Scenario Scenario).
Home2 Button Home Jika diklik, akan mengembalikan
halaman ke halaman “Home” (Bukan
bagian dari Use Case Scenario).
MainCourse2 Button MainCourse Jika diklik, akan memasuki halaman
“Main Course”. Jika sudah masuk pada
halaman “Main Course”, jika diklik,
akan tetap pada halaman “Main Course”
More2 Button More Jika diklik, akan memasuki halaman
“More” yang berisikan fitur tambahan
(Bukan bagian dari Use Case Scenario).
3.1.4.3 Identifikasi Object Baru & Tipe Kelas #4 Main Course
TABEL OBJECT PERANCANGAN
No Nama Object Jenis / Tipe Object Deskripsi
1. P001_HalamanHome Boundary (Interface) Antarmuka halaman awal yang
ditampilkan kepada pengguna
sebelum memilih menu.
2. P002_HalamanMainCourse Boundary (Interface) Antarmuka halaman yang
menampilkan daftar mata
kuliah.
3. SearchCourse Controller (Process) Mengolah input pencarian user
dan menampilkan hasil pada
“Halaman Main Course”.
4. SortCourse Controller (Process) Mengatur pengurutan daftar
mata kuliah berdasarkan abjad
atau kondisi tertentu.
5. FilterStatusCourse Controller (Process) Memproses pemilihan status
(in progress, future, past) dari
dropdown.
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 27 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

6. Course Entity (Data) Representasi data mata kuliah
(nama, status, dosen, dll.) yang
ditampilkan di halaman Main
Course.
7. User Entity (Data) Data pengguna yang sedang
login dan memiliki daftar mata
kuliah tertentu.
(mahasiswa/dosen/
administrator).
3.1.4.4 Sequence Diagram #4 Main Course
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 28 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.5 Use Case #5 Mata Kuliah
Skenario Use Case #5:Mata Kuliah
Primary Flow
1. Mahasiswa memilih salah satu mata kuliah
2. Sistem menampilkan materi dan daftar tugas pada mata kuliah tersebut.
3. Dosen menambahkan tugas atau materi baru.
4. Sistem menyimpan tugas/materi dan menampilkan pembaruan ke semua pengguna.
5. Mahasiswa mengunduh materi dan mengumpulkan tugas.
6. Sistem menyimpan hasil pengumpulan tugas mahasiswa.
Alternative Flow
1. Mahasiswa membuka menu Mata Kuliah.
2. Sistem mendeteksi bahwa pengguna tidak terdaftar pada mata kuliah manapun.
3. Sistem menampilkan notifikasi, “Tidak Terdaftar.”
4. Sistem tetap berada pada halaman Mata Kuliah.
3.1.5.1 Use Case Scenario #5 Mata Kuliah
Skenario Use Case #5 : Mata Kuliah
Pre-Condition
? Pengguna telah login ke dalam system
? Pengguna terdaftar pada minimal satu mata kuliah(untuk akses konten)
Use Case Description
Sistem menyediakan akses bagi pengguna untuk melihat materi, tugas, dan penilaian pada mata kuliah
yang diikuti. Administrator dapat mengelola daftar mata kuliah dan peran pengguna.
Primary Flow
1. Mahasiswa memilih salah satu mata kuliah
2. Sistem menampilkan materi dan daftar tugas pada mata kuliah tersebut.
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 29 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3. Dosen menambahkan tugas atau materi baru.
4. Sistem menyimpan tugas/materi dan menampilkan pembaruan ke semua pengguna.
5. Mahasiswa mengunduh materi dan mengumpulkan tugas.
6. Sistem menyimpan hasil pengumpulan tugas mahasiswa.
Alternative Flow
1. Mahasiswa membuka menu Mata Kuliah.
2. Sistem mendeteksi bahwa pengguna tidak terdaftar pada mata kuliah manapun.
3. Sistem menampilkan notifikasi, “Tidak Terdaftar.”
4. Sistem tetap berada pada halaman Mata Kuliah.
Post-Condition
Materi, tugas, dan penilaian mata kuliah berhasil ditampilkan dan/atau diperbarui (oleh peran yang
berwenang seperti Dosen/Administrator).
3.1.5.2 UI Design dan Deskripsi Objek UI #5 Mata Kuliah
Tabel Deskripsi Objek UI
ID. PAGE NAMA PAGE DESKRIPSI
P001 Course Overview menampilkan daftar mata kuliah yang tersedia.
P002 Tidak terdaftar Ketika pengguna tidak terdaftar dalam mata kuliah
tersebut.
P003 Detail mata kuliah menampilkan detail mata kuliah berdasarkan
minggu.
P004 Upload tugas/materi Tempat dosen mengupload materi/tugas.
P005 Hasil upload tugas/materi Menampilkan tugas/materi yang telah di upload.
P006 Submission Tugas menampilkan detail tugas dan mengunggah tugas.
P001 : Course Overview
Id_Objek JENIS LABEL* Keterangan**
TitleCourse Teks Course Overview Jika di klik, akan mengaktifkan use case
Login…..
FilterCheck interface Filter my course Menampilkan hanya mata kuliah yang
diikuti pengguna
ListCourse1 interface Algoritma & Membuka mata kuliah Algoritma &
Pemrograman Pemrograman (Hmt).
(Hmt)
ListCourse2 interface Algoritma & Membuka mata kuliah Algoritma &
Pemrograman S1 Pemrograman S1.
ListCourse3 interface Analisis & Membuka mata kuliah Analisis &
Perancangan Perancangan Perangkat Lunak [OAZ]
Perangkat Lunak
[OAZ]
P002 : Tidak terdaftar
Id_Objek JENIS LABEL* Keterangan**
iconstatus interface lonceng Ikon status untuk menampilkan tidak
terdaftar mata kuliah.
info Teks Tidak terdaftar pengguna belum masuk atau belum
mengambil mata kuliah
P003 : Detail mata kuliah
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 30 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

| Id_Objek   | JENIS  | LABEL*  |     | Keterangan**  |     |
| ---------- | ------ | ------- | --- | ------------- | --- |
TitleCourse  teks  Analisis dan  Menampilkan nama mata kuliah.
perancangan
perangkat lunak
[OAZ]
| week  | Teks  | Minggu 1:  | Judul materi tiap petemuan.  |     |     |
| ----- | ----- | ---------- | ---------------------------- | --- | --- |
Pendahuluan
| btnmateri  | button  | Materi 1  | Ke halaman materi 1  |     |     |
| ---------- | ------- | --------- | -------------------- | --- | --- |
| btnquiz    | button  | Quiz 1    | Ke halaman quiz 1    |     |     |
| btntugas   | button  | Tugas 1   | Ke halaman tugas  1  |     |     |

P004 : Upload tugas/materi
| Id_Objek   | JENIS      | LABEL*    |                               | Keterangan**  |     |
| ---------- | ---------- | --------- | ----------------------------- | ------------- | --- |
| Tab1       | interface  | materi    | Untuk meng upload materi.     |               |     |
| Tab2       | interface  | tugas     | Untuk mengupload tugas.       |               |     |
| sudah      | interface  | Materi 1  | Materi yang sudah di upload.  |               |     |
upload  button  Tambah materi  Menambahkan materi ke mata kuliah.

P005 : Hasil upload tugas/materi
| Id_Objek   | JENIS  | LABEL*     |                              | Keterangan**  |     |
| ---------- | ------ | ---------- | ---------------------------- | ------------- | --- |
| week       | teks   | Minggu 8:  | Judul materi tiap petemuan.  |               |     |
Perancangan
| BtnMateri  | button  | Matreri 8  | Ke halaman materi 8  |     |     |
| ---------- | ------- | ---------- | -------------------- | --- | --- |
| Btnquiz    | button  | Quiz 8     | Ke halaman quiz 8    |     |     |
| Btntugas   | button  | Tugas 8    | Ke halaman tugas  8  |     |     |

P006 : Submission Tugas
| Id_Objek   | JENIS  | LABEL*           |                     | Keterangan**  |     |
| ---------- | ------ | ---------------- | ------------------- | ------------- | --- |
| TitleTask  | teks   | Tugas proyek #6  | Judul tugas.        |               |     |
| open       | teks   | Dibuka: 17       | waktu tugas dibuka  |               |     |
November 2025 8
| deadline  | teks  | Deadline: 28  | Batas pengumpulan tugas  |     |     |
| --------- | ----- | ------------- | ------------------------ | --- | --- |
November 2025
| deskripsi  | teks  | Proyek kelompok  | Informasi detail tugas  |     |     |
| ---------- | ----- | ---------------- | ----------------------- | --- | --- |
submit  button  Add Submission  Mengunggah tugas / masuk halaman
submission

3.1.5.3  Identifikasi Object dan Tipe Kelas #5 Mata Kuliah
TABLE OBJECT PERANCANGAN
| No  Nama Object             |     |     | Jenis / Tipe Object    |     |     |
| --------------------------- | --- | --- | ---------------------- | --- | --- |
|  1   Course Overview Panel  |     |     |  Boundary (Antarmuka)  |     |     |
|  2   Course List            |     |     |  Boundary (Antarmuka)  |     |     |

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     | Halaman 31 dari 53   |
| --------------------------- | --- | --- | --------- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

|  3   Filter Course                 |  Boundary (Antarmuka)  |     |
| ---------------------------------- | ---------------------- | --- |
| 4   Tidak Terdaftar                |  Boundary (Antarmuka)  |     |
|  5   Enrollment Status/Controller  |  Controller            |     |
| 6  Detail Mata Kuliah              | Boundary (Antarmuka)   |     |
| 7  Weekly Module/Materi Mingguan   | Entity                 |     |
| 8  Materi/Tugas/Quiz Item          | Entity                 |     |
| 9  Upload Materi/Tugas             | Boundary (Antarmuka)   |     |
| 10  Add Materi                     | Boundary (Antarmuka)   |     |
| 11  Hasil Upload Materi/Tugas      | Boundary (Antarmuka)   |     |
| 12  Submission Tugas               | Boundary (Antarmuka)   |     |
| 13  Project/Task Submission        | Entity                 |     |
| 14  Add Submission                 | Boundary (Antarmuka)   |     |
| 15  Upload/Download                | Controller             |     |
| 16  Database Course                | Entity (Basisdata)     |     |

| Prodi S1 Informatika Tel-U  | DPPL-XXX  | Halaman 32 dari 53   |
| --------------------------- | --------- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.5.4 Sequence Diagram & Component Diagram #5 Mata Kuliah
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 33 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.6 Use Case #6 Integrasi Eksternal (Zoom Meeting)
3.1.6.1 Use Case Scenario #6
Skenario Use Case #2 : Integrasi Eksternal (Zoom Meeting)
Pre-Condition
? Pengguna (Dosen atau Administrator) telah login ke sistem CeLoe LMS.
? Pengguna memiliki akses ke mata kuliah yang dikelola.
? Sistem telah terintegrasi dengan layanan eksternal Zoom melalui API.
Use Case Description
a. Primary Flow
1. Dosen membuka salah satu mata kuliah pada CeLoe LMS.
2. Dosen memilih menu “Tambah Aktivitas” dan memilih opsi “Zoom Meeting”.
3. Sistem menampilkan form pembuatan Zoom Meeting.
4. Dosen mengisi detail meeting (judul, tanggal, waktu, durasi).
5. Dosen menekan tombol “Simpan”.
6. Sistem mengirimkan data meeting ke layanan Zoom melalui API.
7. Zoom memproses permintaan dan mengembalikan link meeting.
8. Sistem menyimpan data meeting dan link Zoom ke dalam basis data.
9. Sistem menampilkan aktivitas Zoom Meeting pada halaman mata kuliah.
10. Mahasiswa dapat melihat dan mengakses link Zoom Meeting dari mata kuliah tersebut.
b. Alternative Flow
1. Dosen mengisi form Zoom Meeting.
2. Sistem gagal terhubung dengan layanan Zoom (gangguan jaringan/API).
3. Sistem menampilkan pesan kesalahan “Gagal membuat Zoom Meeting”.
4. Sistem tidak menyimpan data meeting.
5. Dosen dapat mencoba kembali atau membatalkan proses.
Post-Condition
? Aktivitas Zoom Meeting berhasil dibuat dan tersimpan dalam sistem atau
? Proses pembuatan Zoom Meeting gagal dan tidak ada data yang tersimpan.
3.1.6.2 UI Design dan Deskripsi Objek UI #6 Integrasi Eksternal (Zoom Meeting)
Tabel Deskripsi Objek UI
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 34 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

| ID.  | NAMA LAYAR  |     |     | DESKRIPSI  |     |
| ---- | ----------- | --- | --- | ---------- | --- |
LAYAR
Z001  Halaman Mata Kuliah  Menampilkan detail mata kuliah dan daftar aktivitas
Z002  Form Tambah Zoom Meeting  Form untuk menambahkan sesi Zoom Meeting
Z003  Detail Zoom Meeting  Menampilkan informasi dan link Zoom Meeting
Z004  Halaman Error Integrasi  Menampilkan pesan kegagalan integrasi Zoom

Antarmuka Z001: Halaman Mata Kuliah
| Id_Objek   | JENIS  | LABEL*  |     | Keterangan**  |     |
| ---------- | ------ | ------- | --- | ------------- | --- |

ListActivity  List  Daftar Aktivitas  Menampilkan aktivitas mata kuliah
BtnAddActi Button  Tambah Aktivitas  Membuka menu tambah aktivitas
vity
ActivityZoo Card  Zoom Meeting  Akses ke detail Zoom Meeting
m
|     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- |

Antarmuka Z002: Form Tambah Zoom Meeting
| Id_Objek   | JENIS  | LABEL*  |     | Keterangan**  |     |
| ---------- | ------ | ------- | --- | ------------- | --- |

| FieldTitle  | Textbox  | Judul Meeting  | Input judul Zoom Meeting  |     |     |
| ----------- | -------- | -------------- | ------------------------- | --- | --- |
| FieldDate   | Date     | Tanggal        | Input tanggal meeting     |     |     |
Picker
| FieldTime  | Time  | Waktu  | Input waktu meeting  |     |     |
| ---------- | ----- | ------ | -------------------- | --- | --- |
Picker
| FieldDuratio | Number  | Durasi  | Input durasi meeting  |     |     |
| ------------ | ------- | ------- | --------------------- | --- | --- |
n
| BtnSave    | Button  | Simpan  | Mengirim data ke Zoom API  |     |     |
| ---------- | ------- | ------- | -------------------------- | --- | --- |
| BtnCancel  | Button  | Batal   | Membatalkan proses         |     |     |

Antarmuka Z003: Detail Zoom Meeting
| Id_Objek   | JENIS  | LABEL*  |     | Keterangan**  |     |
| ---------- | ------ | ------- | --- | ------------- | --- |

| TextTitle   | Text  | Judul Meeting  | Menampilkan judul meeting  |     |     |
| ----------- | ----- | -------------- | -------------------------- | --- | --- |
| TextSchedul | Text  | Jadwal         | Menampilkan waktu meeting  |     |     |
e
| LinkZoom  | Link  | Join Zoom  | Mengarahkan ke aplikasi Zoom  |     |     |
| --------- | ----- | ---------- | ----------------------------- | --- | --- |
Meeting
|     |     |     |     |     |     |
| --- | --- | --- | --- | --- | --- |

Antarmuka Z003: Halaman Error Integrasi
| Id_Objek   | JENIS  | LABEL*  |     | Keterangan**  |     |
| ---------- | ------ | ------- | --- | ------------- | --- |

MsgError  Text  Gagal Integrasi  Menampilkan pesan kesalahan
| BtnRetry  | Butten  | Coba Lagi  | Mengulang proses integrasi     |     |     |
| --------- | ------- | ---------- | ------------------------------ | --- | --- |
| BtnBack   | Butten  | Kembali    | Kembali ke halaman sebelumnya  |     |     |
|           |         |            |                                |     |     |

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     | Halaman 35 dari 53   |
| --------------------------- | --- | --- | --------- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.6.3  Identifikasi Object Baru & Tipe Kelas #6 Integrasi Eksternal (Zoom Meeting)
TABLE OBJECT PERANCANGAN
| No  Nama Object Baru               | Jenis / Tipe Kelas          |     |
| ---------------------------------- | --------------------------- | --- |
| 1  Halaman Mata Kuliah             | Boundary (Interface)        |     |
| 2  Form Tambah Zoom Meeting        | Boundary (Interface)        |     |
| 3  Detail Zoom Meeting             | Boundary (Interface)        |     |
| 4  Halaman Error Integrasi         | Boundary (Interface)        |     |
| 5  Data Zoom Meeting               | Entity (Basis Data)         |     |
| 6  Data Mata Kuliah                | Entity (Basis Data)         |     |
| 7  Zoom API Service                | Entity (Eksternal Service)  |     |
| 8  Integrasi Eksternal Controller  | Controller                  |     |
| 9  Zoom Meeting Controller         | Controller                  |     |
| 10  Error Handling Controller      | Controller                  |     |
*Tipe kelas seperti Boundary(Interface), Entity(Database), Controller

3.1.6.4  Sequence Diagram &Component Diagram #6 Integrasi Eksternal (Zoom
Meeting)

| Prodi S1 Informatika Tel-U  | DPPL-XXX  | Halaman 36 dari 53   |
| --------------------------- | --------- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.7 Use Case #7 Forum Diskusi
Skenario Use Case #5:Mata Kuliah
A. Primary Flow
a. Mahasiswa memilih salah satu mata kuliah
b. Sistem menampilkan materi dan daftar tugas pada mata kuliah tersebut.
c. Dosen menambahkan tugas atau materi baru.
d. Sistem menyimpan tugas/materi dan menampilkan pembaruan ke semua pengguna.
e. Mahasiswa mengunduh materi dan mengumpulkan tugas.
f. Sistem menyimpan hasil pengumpulan tugas mahasiswa.
B. Alternative Flow
a. Mahasiswa membuka menu Mata Kuliah.
b. Sistem mendeteksi bahwa pengguna tidak terdaftar pada mata kuliah manapun.
c. Sistem menampilkan notifikasi, “Tidak Terdaftar.”
d. Sistem tetap berada pada halaman Mata Kuliah.
3.1.7.1 Use Case Scenario #7 Forum Diskusi
Skenario Use Case #:Forum Diskusi
Pre-Condition
? Pengguna telah login ke dalam system
? Pengguna memiliki akses ke forum yang tersedia.
Use Case Description
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 37 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Sistem menyediakan fasilitas diskusi internal bagi Mahasiswa, Dosen, dan Administrator untuk
melakukan interaksi dalam suatu mata kuliah atau forum umum. Administrator dapat melakukan moderasi
terhadap konten yang tidak
Primary Flow
1. Mahasiswa memilih salah satu mata kuliah
2. Sistem menampilkan daftar topik diskusi yang tersedia.
3. Mahasiswa salah satu topik atau membuat topik diskusi baru.
4. Sistem menampilkan isi diskusi dan menyediakan kolom untuk menulis pesan baru.
5. Mahasiswa menulis pesan atau balasan lalu menekan tombol Kirim.
6. Sistem menyimpan pesan dan menampilkan pesan tersebut di forum diskusi.
7. Administrator memoderasi forum dan menghapus pesan yang tidak pantas (Khusus
Administrator).
Alternative Flow
1. Mahasiswa atau menulis pesan namun koneksi internet terputus atau kolom pesan kosong.
2. Sistem menampilkan pesan kesalahan seperti “Pesan gagal dikirim” atau “Isi pesan tidak boleh
kosong”.
Post-Condition
Pesan atau topik diskusi tersimpan dalam sistem dan dapat diakses oleh pengguna lain dalam forum
yang sama.
3.1.7.2 UI Design dan Deskripsi Objek UI #7 Forum Diskusi
Tabel Deskripsi Objek UI
ID. PAGE NAMA PAGE DESKRIPSI
P007 Course Overview menampilkan daftar mata kuliah yang
tersedia.
P008 Detail mata kuliah menampilkan detail mata kuliah berdasarkan
minggu.
P010 tampilan forum diskusi menampilkan deskripsi forum dan daftar
diskusi yang ada.
P011 post forum membuat postingan baru ke forum
P012 gagal mengirim postingan gagal dikirim dan perlu
sinkronisasi offline.
P013 menyimpan hasil Halaman untuk melihat balasan/pesan dalam
forum diskusi.
P007 : Course Overview
Id_Objek JENIS LABEL* Keterangan**
TitleCourse Teks Course Overview Jika diklik, akan mengaktifkan usecase
Login…..
FilterCheck interface Filter my course Menampilkan hanya mata kuliah yang
diikuti pengguna
ListCourse1 interface Algoritma & Membuka mata kuliah Algoritma &
Pemrograman Pemrograman (Hmt).
(Hmt)
ListCourse2 interface Algoritma & Membuka mata kuliah Algoritma &
Pemrograman S1 Pemrograman S1.
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 38 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

ListCourse3  interface  Analisis &  Membuka mata kuliah Analisis &
|     |     | Perancangan  |     | Perancangan Perangkat Lunak [OAZ]  |     |     |
| --- | --- | ------------ | --- | ---------------------------------- | --- | --- |
Perangkat Lunak
[OAZ]

P008 : Detail mata kuliah
| Id_Objek   | JENIS  | LABEL*  |     |     | Keterangan**  |     |
| ---------- | ------ | ------- | --- | --- | ------------- | --- |
TitleCourse  teks  Analisis dan  Menampilkan nama mata kuliah.
perancangan perangkat
lunak [OAZ]
week  Teks  Minggu 1: Pendahuluan  Judul materi tiap pertemuan.
| btnmateri  | button  | Materi 1       |     | Ke halaman materi 1       |     |     |
| ---------- | ------- | -------------- | --- | ------------------------- | --- | --- |
| btnforum   | button  | Forum diskusi  |     | Ke halaman forum diskusi  |     |     |

P0010 : tampilan forum diskusi
| Id_Objek   | JENIS   | LABEL*         |     |                                          | Keterangan**  |     |
| ---------- | ------- | -------------- | --- | ---------------------------------------- | ------------- | --- |
| judul      | teks    | Forum diskusi  |     | Judul halaman                            |               |     |
| deskripsi  | Teks    | deskripsi      |     | Menampilkan detail forum                 |               |     |
| dis        | teks    | diskusi        |     | Berisi daftar diskusi yang telah dibuat  |               |     |
| btntambah  | button  | Tanda +        |     | Membuat post baru                        |               |     |

P0011 : Post Forum
| Id_Objek   | JENIS   | LABEL*         |     |                               | Keterangan**  |     |
| ---------- | ------- | -------------- | --- | ----------------------------- | ------------- | --- |
| judul      | teks    | subjek         |     | Judul postingan               |               |     |
| pesan      | Teks    | Message        |     | Isi pesan yang akan di kirim  |               |     |
| post       | button  | Post to forum  |     | Mengirim pesan ke forum       |               |     |

P0012 : tampilan forum diskusi
| Id_Objek   | JENIS  | LABEL*         |     |                           | Keterangan**  |     |
| ---------- | ------ | -------------- | --- | ------------------------- | ------------- | --- |
| judul      | teks   | Forum diskusi  |     | Judul halaman             |               |     |
| deskripsi  | Teks   | deskripsi      |     | Menampilkan detail forum  |               |     |
| dis        | teks   | deskripsi      |     | Menampilkan detail forum  |               |     |
alert  teks  This forum has  Notifikasi bahwa pesan tidak terkirim
offline data to be
synchronised
| btntambah  | button  | Tanda +  |     | Membuat post baru  |     |     |
| ---------- | ------- | -------- | --- | ------------------ | --- | --- |

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     |     | Halaman 39 dari 53   |
| --------------------------- | --- | --- | --------- | --- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

P0012 : tampilan forum diskusi
| Id_Objek   | JENIS  | LABEL*         |                                  | Keterangan**  |     |
| ---------- | ------ | -------------- | -------------------------------- | ------------- | --- |
| judul      | teks   | Forum diskusi  | Judul halaman                    |               |     |
| deskripsi  | Teks   | deskripsi      | Menampilkan detail forum         |               |     |
| dis        | teks   | deskripsi      | Menampilkan detail forum         |               |     |
| dari       | teks   | fauzan         | Identitas pengirim               |               |     |
| Pesan      | teks   | apa yang di    | Pesan yang sudah di post forum.  |               |     |
maksud ini?
| btntambah  | button  | Tanda +  | Membuat post baru  |     |     |
| ---------- | ------- | -------- | ------------------ | --- | --- |

3.1.7.3  Identifikasi Object dan Tipe Kelas #7 Forum Diskusi
TABLE OBJECT PERANCANGAN
| No  Nama Object                  |     |     | Jenis / Tipe Object    |     |     |
| -------------------------------- | --- | --- | ---------------------- | --- | --- |
|  1  Course Overview Panel        |     |     |  Boundary (Antarmuka)  |     |     |
|  2  Detail Course                |     |     |  Boundary (Antarmuka)  |     |     |
|  3  Forum List                   |     |     |  Boundary (Antarmuka)  |     |     |
|  4  Post Forum                   |     |     |  Boundary (Antarmuka)  |     |     |
|  5  Failed Send Alert            |     |     | Boundary (Antarmuka)   |     |     |
| 6  Message/Reply                 |     |     | Boundary (Antarmuka)   |     |     |
| 7  Course Entity                 |     |     | Entity                 |     |     |
| 8  Forum Entity                  |     |     | Entity                 |     |     |
| 9  Discussion Thread             |     |     | Entity                 |     |     |
| 10  Post/Message                 |     |     | Entity                 |     |     |
| 11  User Identity/Profile        |     |     | Entity                 |     |     |
| 12  Forum Post                   |     |     | Controller             |     |     |
| 13  Input Validation Controller  |     |     | Controller             |     |     |

3.1.7.4  Sequence Diagram & Component Diagram #7 Forum Diskusi

| Prodi S1 Informatika Tel-U  |     |     | DPPL-XXX  |     | Halaman 40 dari 53   |
| --------------------------- | --- | --- | --------- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Prodi S1 Informatika Tel-U DPPL-XXX Halaman 41 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.8 Use Case #8 <OCW>
Skenario Use Case #8: OCW
Primary Flow
1. Mahasiswa menekan tombol OCW.
2. Sistem menampilkan daftar materi OCW yang tersedia.
3. Mahasiswa memilih salah satu materi dari daftar.
4. Sistem menampilkan detail materi dan menyediakan opsi untuk mengunduh materi.
5. Administrator mengunggah atau memperbarui materi OCW (khusus Administrator).
6. Sistem menyimpan materi yang diunggah/diperbarui dan memperbarui daftar OCW.
Alternative Flow
1. Mahasiswa membuka halaman OpenCourseWare (OCW).
2. Sistem mendeteksi bahwa tidak ada materi OCW yang tersedia..
3. Sistem menampilkan halaman OCW yang dengan pesan “Tidak ada materi yang tersedia”.
4. Sistem tetap berada di halaman OCW.
3.1.8.1 Use Case Scenario #8 <OCW>
Skenario Use Case #8 : Open Course Ware (OCW)
Pre-Condition
? Mahasiswa atau Administrator sudah login ke dalam sistem dan telah berada pada halaman
utama/home.
? Materi OCW sudah tersedia (untuk skenario utama).
Use Case Description
Sistem menyediakan akses terbuka terhadap materi pembelajaran yang dapat digunakan oleh mahasiswa,
termasuk materi di luar mata kuliah wajib. Administrator dapat mengunggah atau memperbarui materi OCW.
Primary Flow
1. Mahasiswa menekan tombol OCW.
2. Sistem menampilkan daftar materi OCW yang tersedia.
3. Mahasiswa memilih salah satu materi dari daftar.
4. Sistem menampilkan detail materi dan menyediakan opsi untuk mengunduh materi.
5. Administrator mengunggah atau memperbarui materi OCW (khusus Administrator).
6. Sistem menyimpan materi yang diunggah/diperbarui dan memperbarui daftar OCW.
Alternative Flow
1. Mahasiswa membuka halaman OpenCourseWare (OCW).
2. Sistem mendeteksi bahwa tidak ada materi OCW yang tersedia..
3. Sistem menampilkan halaman OCW yang dengan pesan “Tidak ada materi yang tersedia”.
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 42 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

4.  Sistem tetap berada di halaman OCW.
Post-Condition
1.  Mahasiswa dapat melihat dan/atau mengunduh materi OCW.
2.  Jika Administrator melakukan unggah/perbarui, materi OCW tersimpan dan tampil di daftar OCW.

3.1.8.2  UI Design dan Deskripsi Objek UI #8 <OCW>

Tabel Deskripsi Objek UI
| ID.  |     | NAMA PAGE  |     |     |     | DESKRIPSI  |     |
| ---- | --- | ---------- | --- | --- | --- | ---------- | --- |
PAGE
| P001  | Halaman Home  |     |     |     | Halaman awal pengguna.              |     |     |
| ----- | ------------- | --- | --- | --- | ----------------------------------- | --- | --- |
| P003  | Halaman OCW   |     |     |     | Menampilkan daftar materi OCW yang  |     |     |
tersedia.
| P004  | Materi OCW  |     |     |     | Menampilkan halaman Materi OCW yang  |     |     |
| ----- | ----------- | --- | --- | --- | ------------------------------------ | --- | --- |
telah dipilih.
P005  Unggah Materi OCW (Khusus  Menampilkan halaman Unggah Materi
|     | Administrator)  |     |     |     | OCW yang hanya dapat diakses oleh  |     |     |
| --- | --------------- | --- | --- | --- | ---------------------------------- | --- | --- |
administrator.

P001 : Halaman Home
| Id_Objek   |     | JENIS   | LABEL*  |     |                                     | Keterangan**  |     |
| ---------- | --- | ------- | ------- | --- | ----------------------------------- | ------------- | --- |
|            |     |         |         |     |                                     |               |     |
| Search1    |     | Button  | search  |     | Jika diklik, akan memasuki halaman  |               |     |
“cari” terkait fitur aplikasi LMS (Bukan
bagian dari Use Case Scenario).
|  OCW1  |     | Button  | OCW  |     | Jika diklik, akan memasuki halaman  |     |     |
| ------ | --- | ------- | ---- | --- | ----------------------------------- | --- | --- |
“OCW”.
NAE1  Button   News and Event  Jika diklik, akan memasuki halaman
“News and Event” (Bukan bagian dari
Use Case Scenario).
Dashboard1   Button   Dashboard   Jika diklik, akan memasuki halaman
“Dashboard” (Bukan bagian dari Use
Case Scenario).
Notification1  Button  Notification  Jika diklik, akan memasuki halaman
“Notification” (Bukan bagian dari Use
Case Scenario).
Calendar1  Button  Calendar  Jika diklik, akan memasuki halaman
“Calendar” (Bukan bagian dari Use Case
Scenario).

| Prodi S1 Informatika Tel-U  |     |     |     | DPPL-XXX  |     |     | Halaman 43 dari 53   |
| --------------------------- | --- | --- | --- | --------- | --- | --- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Home1 Button Home Jika diklik, akan mengembalikan halaman
ke halaman “Home” (Bukan bagian dari
Use Case Scenario).
MainCourse1 Button MainCourse Jika diklik, akan memasuki halaman
“Main Course” (Bukan bagian dari Use
Case Scenario).
More1 Button More Jika diklik, akan memasuki halaman
“More” yang berisikan fitur tambahan
(Bukan bagian dari Use Case Scenario).
P003 : Halaman OCW
Id_Objek JENIS LABEL* Keterangan**
Search3 Button search Jika diklik, akan memasuki halaman
“cari” terkait fitur aplikasi LMS (Bukan
bagian dari Use Case Scenario).
OCW3 Button OCW Jika diklik, akan memasuki halaman
“OCW”.
NAE3 Button News and Event Jika diklik, akan memasuki halaman
“News and Event” (Bukan bagian dari
Use Case Scenario).
Dashboard3 Button Dashboard Jika diklik, akan memasuki halaman
“Dashboard” (Bukan bagian dari Use
Case Scenario).
Notification3 Button Notification Jika diklik, akan memasuki halaman
“Notification” (Bukan bagian dari Use
Case Scenario).
Calendar3 Button Calendar Jika diklik, akan memasuki halaman
“Calendar” (Bukan bagian dari Use Case
Scenario).
Home3 Button Home Jika diklik, akan mengembalikan halaman
ke halaman “Home” (Bukan bagian dari
Use Case Scenario).
MainCourse3 Button MainCourse Jika diklik, akan memasuki halaman
“Main Course”.
More3 Button More Jika diklik, akan memasuki halaman
“More” yang berisikan fitur tambahan
(Bukan bagian dari Use Case Scenario).
P004 : Materi OCW
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 44 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Id_Objek JENIS LABEL* Keterangan**
DownloadCourse4 Button Unduh Materi Jika diklik, sistem akan mengunduh
(Bab 1, Bab 2) materi sesuai bab materi yang dipilih.
P005 : Unggah Materi OCW (Khusus Administrator)
Id_Objek JENIS LABEL* Keterangan**
TextBox5_1 Text Box Text box judul Jika diklik, text box dapat diisi dengan
materi judul materi yang ingin dibuat atau
ditambahkan pada “Halaman OCW”.
Button5_1 Button Pilih gambar Jika diklik, sistem akan mengakses gambar
pada media ponsel untuk ditambahkan
sebagai gambar banner materi di halaman
“Materi OCW”.
TextBox5_2 Text Box Text box Jika diklik, text box dapat diisi dengan
pengantar kalimat atau paragraf pengantar yang ingin
ditambahkan pada halaman “Materi
OCW”.
TextBox5_3 Text Box Text box judul Jika diklik, text box dapat diisi dengan
bab judul bab yang ingin ditambahkan pada
halaman “Materi OCW”.
TextBox5_4 Text Box Text box deskripsi Jika diklik, text box dapat diisi dengan
bab kalimat atau paragraph deskripsi bab yang
ingin ditambahkan pada halaman “Materi
OCW”.
Button5_2 Button Pilih Berkas Jika diklik, sistem akan mengakses berkas
pada media ponsel untuk ditambahkan
sebagai berkas materi di halaman “Materi
OCW” yang dapat diunduh mahasiswa.
Button5_3 Button Tambah Bab Jika diklik, akan menambahkan bab baru
pada halaman “Materi OCW” yang sama
dengan fitur dan tampilan yang sama
seperti bab sebelumnya.
Button5_4 Button Submit Jika diklik, sistem akan menyimpan semua
informasi berupa teks, gambar, dan berkas
yang telah di masukkan/unggah untuk
disimpan permanent pada data base sistem.
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 45 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.8.3 Identifikasi Object Baru & Tipe Kelas #8 <OCW>
TABLE OBJECT PERANCANGAN
No Nama Object Jenis / Tipe Object Deskripsi
1. P001_HalamanHome Boundary (Interface) Antarmuka awal sebelum user
memilih menu OCW.
2. P003_HalamanOCW Boundary (Interface) Halaman daftar materi OCW
yang dapat diakses pengguna.
3. P004_HalamanMateriOCW Boundary (Interface) Halaman tampilan materi OCW
yang dipilih.
4. P005_HalamanUnggahOCW Boundary (Interface) Halaman unggah materi OCW
khusus administrator.
5. SearchOCW Controller (Process) Memproses input pencarian
materi OCW.
6. DownloadMateri Controller (Process) Mengelola proses unduh materi
OCW.
7. UploadMateri Controller (Process) Mengelola proses unggah materi
(judul, gambar, bab, file) ke
basis data.
8. MateriOCW Entity (Data) Data materi OCW yang berisi
judul, deskripsi, bab, dan
berkas.
9. User Entity (Data) Data pengguna yang dapat
mengakses OCW
(mahasiswa/administrator).
*Tipe kelas seperti Boundary(Interface), Entity(Database), Controller
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 46 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.1.8.4 Sequence Diagram&Component Diagram #8 <OCW>
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 47 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.2 Diagram Kelas Keseluruhan
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 48 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

3.3  Perancangan Detail Kelas
TABEL KELAS :

ID  Nama Kelas Perancangan   Attribute (visibility)  Method / Operation
Kelas
B-01  P002_HalamanMainCourse  - daftarCourse : List  + tampilDaftarCourse()
|     | - statusFilter : String  | + pilihCourse()  |
| --- | ------------------------ | ---------------- |
B-02  DetailMataKuliah  - informasiMataKuliah : String  + tampilDetail()
B-03  HalamanNotifikasi  - daftarNotifikasi : List  + tampilNotifikasi()
B-04  HalamanKalender  - daftarEvent : List  + tampilKalender()
| B-05  ForumList  | - daftarDiskusi : List  | + tampilForum()  |
| ---------------- | ----------------------- | ---------------- |
| B-06  PostForum  | - isiPesan : String     | + kirimPost()    |
B-07  HalamanOCW  - daftarMateri : List  + tampilMateriOCW()
| C-01  LoginController  | - userData : User  | + validasiLogin()  |
| ---------------------- | ------------------ | ------------------ |
+ prosesAutentikasi()
| C-02  SearchCourse  | - keyword : String  | + cariCourse()  |
| ------------------- | ------------------- | --------------- |
C-03  SortCourse  - parameterSort : String  + urutkanCourse()
C-04  NotifikasiController  - userId : String  + ambilNotifikasi()
| C-05  KalenderController  | - userId : String  | + ambilEvent()  |
| ------------------------- | ------------------ | --------------- |
C-06  UploadDownloadController  - file : File  + uploadFile()
+ downloadFile()
C-07  ForumPostController  - kontenPost : String  + tambahPost()
+ validasiKonten()
C-08  UploadMateriOCW  - fileMateri : File  + unggahMateri()
| E-01  User  | - userId : String  | + getUserData()  |
| ----------- | ------------------ | ---------------- |
- role : String
| E-02  Course  | - courseId : String  | + getCourseDetail()  |
| ------------- | -------------------- | -------------------- |
- namaCourse : String
E-03  Notifikasi  - isiNotifikasi : String  + setStatusBaca()

| Prodi S1 Informatika Tel-U  | DPPL-XXX  | Halaman 49 dari 53   |
| --------------------------- | --------- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

- status : Boolean
E-04 EventKalender - judulEvent : String + getEvent()
- tanggal : Date
E-05 Forum - topik : String + getDiskusi()
E-06 Post - isiPost : String + simpanPost()
- tanggalPost : Date
E-07 MateriOCW - judulMateri : String + getMateri()
- fileMateri : String
3.4 Perancangan Algoritma dan/atau Query
Algoritma #1
Contoh:
Nama Kelas :Halaman Login
Nama Operasi :User Login
Algoritma :
FUNCTION loginUser(username, password)
result ? authenticateSSO(username, password)
IF result = VALID THEN
userData ? getUserData(username)
createSession(userData)
redirectToDashboard(userData.role)
ELSE
displayError("Login gagal")
END IF
END FUNCTION
Algoritma #2
Contoh:
Nama Kelas : Mata Kuliah
Nama Operasi : Mengirim Tugas
Algoritma :
FUNCTION sendAssignmentNotification(courseId, assignmentData)
students ? getEnrolledStudents(courseId)
FOR EACH student IN students DO
notification ? createNotification(student, assignmentData)
send(notification)
saveNotificationLog(notification)
END FOR
END FUNCTION
Algoritma #3
Contoh:
Nama Kelas : Kalender
Nama Operasi : Akses Kalender
Algoritma :
FUNCTION getUserCalendar(userId)
events ? getUserEvents(userId)
deadlines ? getUserDeadlines(userId)
calendarData ? merge(events, deadlines)
displayCalendar(calendarData)
END FUNCTION
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 50 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

Algoritma #4
Contoh:
Nama Kelas : Main Course
Nama Operasi : Akses Main Course
Algoritma :
FUNCTION getMainCourseList(userId)
courses ? getUserCourses(userId)
activeCourses ? filterActive(courses)
displayCourses(activeCourses)
END FUNCTION
Algoritma #5
Contoh:
Nama Kelas : Mata Kuliah
Nama Operasi : Gagal Mengirim Tugas
Algoritma :
FUNCTION submitAssignment(userId, assignmentId, file)
IF file.size ? MAX_SIZE AND file.format = VALID THEN
filePath ? saveFile(file)
saveSubmission(userId, assignmentId, filePath)
displayMessage("Tugas berhasil dikumpulkan")
ELSE
displayError("File tidak valid")
END IF
END FUNCTION
Algoritma #6
Contoh:
Nama Kelas : Integrasi Eksternal
Nama Operasi : Gagal Membuat Link (Zoom Meeting)
Algoritma :
FUNCTION createZoomMeeting(meetingData)
response ? callZoomAPI(meetingData)
IF response.status = SUCCESS THEN
saveMeeting(response.link)
return response.link
ELSE
displayError("Gagal membuat Zoom Meeting")
END IF
END FUNCTION
Algoritma #7
Contoh:
Nama Kelas : Forum Diskusi
Nama Operasi : Gagal Membuat Forum
Algoritma :
FUNCTION postDiscussion(userId, forumId, message)
IF message IS NOT EMPTY THEN
saveForumPost(userId, forumId, message)
displayDiscussion(forumId)
ELSE
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 51 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

        displayError("Pesan tidak boleh kosong")
    END IF
END FUNCTION

Algoritma #8
Contoh:
Nama Kelas  : OCW
Nama Operasi  : Ambil Materi OCW
Algoritma  :
FUNCTION getOCWMaterial()
    materials ? fetchOCWMaterials()
    sortByDate(materials)
    displayMaterials(materials)
END FUNCTION

4. Matriks Kerunutan (Requirement Traceability Matrix)

Mapping requirement dengan Use Case yang direalisasikan

| Kode  Nama Functional Requirement  | Nama Use Case  |     |
| ---------------------------------- | -------------- | --- |
FR
| FR-01  Halaman Login        | User Login                              |     |
| --------------------------- | --------------------------------------- | --- |
| FR-02  Notifikasi           | View Notification, Manage Notification  |     |
| FR-03  Kalender             | View Calendar, Add Calendar             |     |
| FR-04  Main Course          | Access Course, View Course Progress     |     |
| FR-05  Mata Kuliah          | Enroll Course                           |     |
| FR-06  Integrasi Eksternal  | Integrate to External Link              |     |
| FR-07                       | Post Forum, Reply Forum                 |     |
Forum Diskusi
| FR-08  OpenCourseWare (OCW)  | Browse OCW Material  |     |
| ---------------------------- | -------------------- | --- |

5. Skema Relasi dan Entity Relation Diagram (ERD) Aplikasi CeLOE LMS Telkom
University

| Prodi S1 Informatika Tel-U  | DPPL-XXX  | Halaman 52 dari 53   |
| --------------------------- | --------- | -------------------- |
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.

5.1 Skema Relasi
5.2 Entity Relation Diagram (ERD)
Prodi S1 Informatika Tel-U DPPL-XXX Halaman 53 dari 53
Template dokumen ini dan informasi yang dimilikinya adalah milik Prodi S1 Informatika Tel-U dan bersifat rahasia. Dilarang
me-reproduksi dokumen ini tanpa diketahui oleh Prodi S1 Informatika Tel-U.
