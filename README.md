# Kelompok 8 - MieAyamJabrig

**Project:** Web LMS (Learning Management System) - prototipe **CeLOE LMS Telkom University**

Mata kuliah Implementasi Perangkat Lunak - Telkom University, Semester 5.

## Anggota

| No | Nama | NIM |
| :-: | :--- | :--- |
| 1 | Fauzan Ahmad Choiry | 103012400120 |
| 2 | Gillbrian | 103012400346 |
| 3 | Abdurrahman Gigih | 103012400417 |
| 4 | Putra Rizaqi Athallah | 103012400022 |
| 5 | A. Najwa Sabrina Nusawan | 103012400180 |

---

## Daftar Isi

1. [Tentang Proyek](#1-tentang-proyek)
2. [Fitur (Functional Requirements)](#2-fitur-functional-requirements)
3. [Peran Pengguna](#3-peran-pengguna)
4. [Spesifikasi Tech Stack](#4-spesifikasi-tech-stack)
5. [Deployment Docker di NixOS](#5-deployment-docker-di-nixos)
6. [Pemetaan Arsitektur DPPL (Boundary - Control - Entity)](#6-pemetaan-arsitektur-dppl-boundary---control---entity)
7. [Struktur Tabel Database](#7-struktur-tabel-database-mysql--mariadb)
8. [Batasan & Penyederhanaan Prototipe](#8-batasan--penyederhanaan-prototipe)
9. [Dokumentasi Perancangan](#9-dokumentasi-perancangan)

---

## 1. Tentang Proyek

**CeLOE LMS** adalah bagian dari ekosistem pembelajaran digital Telkom University yang mendukung kegiatan akademik secara daring. Repositori ini berisi dokumen analisis & perancangan serta implementasi **prototipe web** dari sistem tersebut, yang berjalan menggunakan **data *dummy*** di lingkungan Docker.

**Tujuan sistem:**

- Memudahkan mahasiswa dan dosen mengakses aktivitas pembelajaran dari mana saja.
- Menyediakan pengalaman belajar yang fleksibel dan efisien.
- Menyediakan sarana komunikasi dua arah antara dosen dan mahasiswa.
- Mendukung program **OpenCourseWare (OCW)** sebagai kontribusi pendidikan terbuka nasional.

**Goal utama (SKPL):**

| Goal | Deskripsi | Fitur |
| :--- | :--- | :--- |
| **G1** - Akses aman ke sistem | Akses personal menggunakan akun terdaftar | FR-01 |
| **G2** - Pembelajaran terpusat | Daftar mata kuliah & konten dalam satu platform | FR-04, FR-05 |
| **G3** - Efisiensi & manajemen waktu | Jadwal dan tenggat melalui kalender & notifikasi otomatis | FR-02, FR-03 |
| **G4** - Kolaborasi & komunikasi | Media diskusi antar pengguna | FR-07 |
| **G5** - Integrasi & keterbukaan | Integrasi platform eksternal & akses pembelajaran terbuka | FR-06, FR-08 |

---

## 2. Fitur (Functional Requirements)

| Kode | Fitur | Prioritas | Deskripsi |
| :-: | :--- | :-: | :--- |
| **FR-01** | Halaman Login | Must Have | Login dengan akun terdaftar (SSO pada sistem asli), pengguna diarahkan ke dashboard sesuai peran. |
| **FR-02** | Notifikasi | Satisfier | Menampilkan notifikasi tugas baru; admin dapat melihat log pengiriman notifikasi. |
| **FR-03** | Kalender | Satisfier | Kalender jadwal kelas & tenggat tugas; admin dapat menambah/mengedit event global. |
| **FR-04** | Main Course | Must Have | Daftar mata kuliah yang diikuti dalam satu halaman (dengan pencarian, pengurutan, dan filter status). |
| **FR-05** | Mata Kuliah | Must Have | Melihat & mengunduh materi, mengelola tugas dan nilai, pengumpulan tugas oleh mahasiswa. |
| **FR-06** | Integrasi Eksternal | Satisfier | Pembuatan aktivitas **Zoom Meeting** oleh dosen (judul, tanggal, waktu, durasi) dengan tautan yang tampil di mata kuliah. |
| **FR-07** | Forum Diskusi | Satisfier | Ruang diskusi per mata kuliah (topik & post). |
| **FR-08** | OpenCourseWare (OCW) | Delighter | Materi pembelajaran terbuka di luar mata kuliah wajib. |

**Kebutuhan non-fungsional:** kegunaan (UI intuitif, navigasi jelas), reliabilitas (stabil selama proses pembelajaran), keamanan (proteksi data & akses tidak sah / *role-based access control*).

---

## 3. Peran Pengguna

| Peran | Akses |
| :--- | :--- |
| **Mahasiswa** | Login, notifikasi, kalender, main course, mata kuliah (materi, tugas, nilai), forum diskusi, OCW. |
| **Dosen** | Login, notifikasi, kalender, main course, mata kuliah (kelola materi, tugas, penilaian), forum diskusi, integrasi eksternal (Zoom). |
| **Administrator** | Akses ke seluruh fitur, termasuk pengelolaan pengguna, log notifikasi, dan event kalender global. |

---

## 4. Spesifikasi Tech Stack

Prototipe berbasis web ini menggunakan data *dummy* dan seluruh komponennya dijalankan sebagai **container Docker** (dikelola dengan Docker Compose) pada server **NixOS**.

| Komponen | Teknologi | Fungsi & Keterangan Implementasi |
| :--- | :--- | :--- |
| **Container Runtime** | **Docker Engine** + **Docker Compose** (NixOS: `virtualisation.docker`) | Menjalankan seluruh layanan sebagai container sehingga lingkungan konsisten antara dev dan server. |
| **Web Server** | **Nginx** (container) | Menyajikan aplikasi & file statis, meneruskan request PHP ke PHP-FPM. Batas upload `client_max_body_size 50M`. |
| **Backend Framework** | **Laravel 13 (PHP 8.4-FPM)** (container) | Menangani *routing*, autentikasi sesi, kontrol akses peran (*role*), validasi berkas, dan logika bisnis. |
| **Frontend / UI** | **Blade Template** + **Bootstrap 5 (SCSS)** | Merender antarmuka langsung dari *server*. Aset dikompilasi via **Vite** dan Bootstrap 5 terintegrasi. |
| **Komponen Interaktif** | **JavaScript (ES6)** + **FullCalendar.js (CDN)** | Kalender bulanan/harian, interaksi *popup*, dan validasi *client-side*. |
| **Database** | **MariaDB 11** (container) | Menyimpan seluruh data relasional pengguna, mata kuliah, tugas, forum, kalender, dan log notifikasi. Data di *named volume* / host bind path. |
| **File Storage** | **Laravel Local Storage** pada **Docker volume** (`storage/app/public`) | Menyimpan materi PDF, banner OCW, dan berkas tugas mahasiswa (maks. **50 MB**). Volume dipersist di host NixOS. |
| **Reverse Proxy / HTTPS** | **Nginx** / **Caddy** / **Traefik** (di host NixOS) | Terminasi **HTTPS** (Let's Encrypt) dan meneruskan trafik ke container web. |
| **Manajemen DB (opsional)** | **phpMyAdmin** / **Adminer** (container, hanya dev) | Memudahkan pengecekan data *dummy*. Tidak diekspos ke publik pada produksi. |

### Perbedaan dengan tech stack sebelumnya

| Sebelumnya | Sekarang (Docker + NixOS) |
| :--- | :--- |
| Laragon / XAMPP (lokal Windows) | Docker Compose di server NixOS |
| Apache/Nginx + PHP bawaan paket | Container terpisah: **Nginx** + **PHP 8.4-FPM** |
| MySQL / MariaDB lokal | Container **MariaDB 11** dengan *named volume* / bind mount |
| `public/uploads` di folder proyek | Docker volume untuk `storage` (persisten, di luar image) |
| Aset dikompilasi manual | Aset di-*build* via **Vite** pada *multi-stage build* Dockerfile |
| Konfigurasi `.env` lokal | `.env` otomatis + variabel environment pada `docker-compose.yml` |

> Framework (Laravel), UI (Blade + Bootstrap 5), kalender (FullCalendar), serta skema database **tidak berubah**.

---

## 5. Deployment & Menjalankan Proyek

### 5.1 Struktur Repositori

```text
IMPAL_Kelompok8_MieAyamJabrig/
├── Design Document/                 Dokumen SKPL, DPPL, ERD, dan diagram arsitektur
├── docker/
│   ├── php/                         Dockerfile (multi-stage), php.ini (upload 50M), entrypoint.sh
│   ├── nginx/                       Dockerfile, default.conf (FastCGI upstream & upload limit)
│   └── mariadb/init/                Script inisialisasi basis data (.sql)
├── nixos/
│   └── lms.nix                      Modul deklaratif NixOS (direktori host, systemd autostart, auto backup)
├── src/                             Aplikasi Laravel 13 (PHP 8.4)
│   ├── app/Http/Controllers/        Control layer (DPPL)
│   ├── app/Models/                  Entity layer (DPPL)
│   ├── database/migrations/         Skema basis data relasional
│   ├── resources/views/             Boundary layer (auth, course, matakuliah, notifikasi, kalender, dll.)
│   ├── resources/css/ & js/         Bootstrap 5 SCSS & JavaScript via Vite
│   └── vite.config.js               Konfigurasi Vite bundler
├── docker-compose.yml               Konfigurasi stack container production/server
├── docker-compose.override.yml      Override otomatis untuk dev lokal (bind-mount source, live Vite reload)
├── setup.ps1                        Script inisialisasi otomatis untuk Windows dev
├── dev.ps1                          Script daily development (menjalankan stack + live reload)
├── setup.sh                         Script inisialisasi otomatis untuk server NixOS/Linux
├── .env.example                     Template environment variabel
├── .gitattributes                   Enforce LF line-endings untuk kompatibilitas container Linux
└── README.md                        Dokumentasi proyek
```

### 5.2 Struktur Layanan Docker

```text
                 +--------------------------+
 Internet  --->  | Reverse proxy (NixOS)    |  HTTPS :443
                 +------------+-------------+
                              |
                 +------------v-------------+
                 | nginx (web)    :8080     |
                 +------------+-------------+
                              | FastCGI :9000
                 +------------v-------------+      +---------------------+
                 | app (Laravel, PHP-FPM)   +----->| db (MariaDB) :3306  |
                 +------------+-------------+      +----------+----------+
                              |                               |
                    volume: lms_storage               volume: lms_db_data
```

| Service | Image / Target | Peran |
| :--- | :--- | :--- |
| `web` | Nginx Alpine (custom build) | Web server & penyaji aset statis |
| `app` | PHP 8.4-FPM Alpine (custom build) | Aplikasi Laravel & background jobs |
| `db` | `mariadb:11` | Database relasional |
| `vite` | Node 22 Alpine (dev only) | Live compilation & Hot Module Replacement (HMR) |

### 5.3 Cara Menjalankan

#### A. Lingkungan Dev Lokal (Windows)
Cukup jalankan satu perintah:
```powershell
.\setup.ps1
```
Script ini otomatis:
1. Memeriksa ketersediaan Docker Engine.
2. Membuat file `.env` dengan password acak aman jika belum ada.
3. Mem-build dan menjalankan semua container (`app`, `web`, `db`, `vite`).
4. Menunggu hingga aplikasi siap diakses di `http://localhost:8080`.

Untuk pengembangan sehari-hari berikutnya:
```powershell
.\dev.ps1
```

#### B. Lingkungan Server (NixOS)
1. **Opsi Modul Deklaratif (Direkomendasikan):**
   Salin atau import `nixos/lms.nix` ke dalam `/etc/nixos/configuration.nix`:
   ```nix
   imports = [ /opt/lms/nixos/lms.nix ];
   ```
   Lalu jalankan `sudo nixos-rebuild switch`. Modul ini akan otomatis membuat direktori `/var/lib/lms/`, mengatur hak akses, menjalankan stack container saat boot, dan menjadwalkan backup MariaDB harian secara otomatis.

2. **Inisialisasi Pertama Kali:**
   ```bash
   chmod +x setup.sh
   ./setup.sh
   ```

3. **Deploy Pembaruan Kode Selanjutnya:**
   ```bash
   git pull && docker compose up -d --build
   ```

### 5.4 Catatan konfigurasi penting

- **Batas upload 50 MB:** set `client_max_body_size 50M;` pada Nginx serta `upload_max_filesize = 50M` dan `post_max_size = 50M` pada `php.ini`.
- **Persistensi data:** gunakan *named volume* (`lms_db_data`, `lms_storage`) agar data tidak hilang saat container dibuat ulang. Lakukan *backup* rutin (mis. `mysqldump`).
- **Izin berkas:** pastikan user container PHP-FPM (`www-data`) dapat menulis ke `storage/` dan `bootstrap/cache/`.
- **Jaringan:** hanya container `web` yang di-*publish* port-nya; `db` hanya dapat diakses melalui jaringan internal Docker.
- **Keamanan:** simpan kredensial di `.env` (jangan di-*commit*), set `APP_ENV=production` dan `APP_DEBUG=false` di server.

---

## 6. Pemetaan Arsitektur DPPL (Boundary - Control - Entity)

- **Boundary (UI / Interface):** **Laravel Blade** (`resources/views/`) untuk seluruh layar (`L001`-`L003`, `N001`-`N005`, `K001`-`K005`, `P001`-`P013`, dan `Z001`-`Z004`).
- **Control (Controller):** **Laravel Controller** (`app/Http/Controllers/`), seperti `LoginController`, `NotifikasiController`, `KalenderController`, `UploadDownloadController`, dan `ForumPostController`.
- **Entity (Basis Data):** **Eloquent Models & Migrations** (`app/Models/` & `database/migrations/`) yang memetakan tabel-tabel pada ERD ke dalam MariaDB.

**Kode layar (Boundary):**

| Prefix | Fitur |
| :-: | :--- |
| `L` | Login |
| `N` | Notifikasi |
| `K` | Kalender |
| `P` | Main Course & Mata Kuliah |
| `Z` | Integrasi Eksternal (Zoom) |

---

## 7. Struktur Tabel Database (MySQL / MariaDB)

1. **`users`**: `id`, `nim_nip`, `nama_lengkap`, `username`, `email`, `password`, `role` (`mahasiswa`, `dosen`, `admin`)
2. **`sesi_login`**: `id_sesi`, `user_id`, `waktu_masuk`, `waktu_keluar`
3. **`mata_kuliah`**: `id_matakuliah`, `kode_mk`, `nama_mk`, `dosen_id`, `semester`, `deskripsi`, `status_aktif`
4. **`main_course` (Enrollments)**: `id_katalog`, `user_id`, `matakuliah_id`, `status_course`, `progress`
5. **`materi`**: `id_materi`, `matakuliah_id`, `minggu_ke`, `judul_materi`, `file_path`
6. **`tugas`**: `id_tugas`, `matakuliah_id`, `minggu_ke`, `judul_tugas`, `deskripsi`, `waktu_buka`, `deadline`, `file_lampiran`
7. **`pengumpulan_tugas`**: `id_submission`, `tugas_id`, `mahasiswa_id`, `file_tugas`, `waktu_kumpul`, `nilai`
8. **`notifikasi`**: `id_notifikasi`, `user_id`, `isi_pesan`, `waktu_dikirim`, `sudah_dibaca`, `status_kirim`
9. **`kalender`**: `id_kalender`, `user_id`, `matakuliah_id`, `judul_event`, `deskripsi`, `tanggal_mulai`, `tanggal_selesai`, `jenis_kegiatan`
10. **`integrasi_eksternal`**: `id_integrasi`, `matakuliah_id`, `judul_meeting`, `tanggal`, `waktu`, `durasi`, `provider`, `tautan_zoom`, `status`
11. **`forum_diskusi` & `forum_post`**: `id_forum`, `matakuliah_id`, `topik`, `deskripsi`, `pengirim_id`, `isi_pesan`, `waktu_post`
12. **`open_course_ware`**: `id_ocw`, `judul_materi`, `banner_img`, `pengantar`, `judul_bab`, `deskripsi_bab`, `tautan_file`

Diagram relasi tersedia di folder `Design Document` (`Entity Relation Diagram_LMS.png` dan `Skema Relasi_LMS.png`).

---

## 8. Batasan & Penyederhanaan Prototipe

Dokumen SKPL/DPPL menggambarkan sistem lengkap (Moodle/PHP, Ubuntu Server, SSO, iGracias). Pada prototipe ini disederhanakan (*mocking*):

| Aspek | Sistem Asli (SKPL/DPPL) | Prototipe |
| :--- | :--- | :--- |
| Autentikasi | SSO Telkom University (OAuth/SAML) | Login lokal Laravel dengan akun *dummy* |
| Sinkronisasi akademik | API **iGracias** | Data *dummy* hasil *seeder* |
| Integrasi meeting | Zoom / Google Meet / Teams via API | Penyimpanan tautan Zoom (simulasi) |
| Notifikasi | Email/SMTP/REST | Notifikasi dalam aplikasi + log di database |
| Platform | Moodle di Ubuntu Server 22.04 | Laravel 11 pada Docker di NixOS |
| Ukuran berkas | Maks. 50 MB | Maks. 50 MB (sama) |
| Bahasa antarmuka | Bahasa Indonesia | Bahasa Indonesia |

---

## 9. Dokumentasi Perancangan

Seluruh dokumen berada di folder [`Design Document`](Design%20Document):

| Dokumen / Diagram | Lokasi |
| :--- | :--- |
| SKPL (Software Requirement Specification) | `Design Document/In Markdowns/Software Requirement Spesification_LMS.md` (PDF: `In PDF/`) |
| DPPL (Design Perancangan Perangkat Lunak) | `Design Document/In Markdowns/Design Perancangan Perangkat Lunak_LMS.md` (PDF: `In PDF/`) |
| Entity Relation Diagram | `Design Document/Entity Relation Diagram_LMS.png` |
| Skema Relasi | `Design Document/Skema Relasi_LMS.png` |
| Component Diagram | `Design Document/Component Diagram/` (Login, Notifikasi, Kalender) |
| Sequence Diagram | `Design Document/Sequence Diagram/` (Login, Notifikasi, Kalender) |
| Sumber diagram (draw.io) | `Design Document/Diagrams_LMS.drawio.xml` |