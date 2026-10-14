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
| **Backend Framework** | **Laravel 11 (PHP 8.3-FPM)** (container) | Menangani *routing*, autentikasi sesi, kontrol akses peran (*role*), validasi berkas, dan logika bisnis. |
| **Frontend / UI** | **Blade Template** + **Bootstrap 5** / **Tailwind CSS** | Merender antarmuka langsung dari *server*. Aset di-*build* dengan **Vite** (Node.js) pada tahap *build* image, bukan saat runtime. |
| **Komponen Interaktif** | **JavaScript (ES6)** + **FullCalendar.js (CDN)** | Kalender bulanan/harian, interaksi *popup*, dan validasi *client-side*. |
| **Database** | **MariaDB 11** (container) | Menyimpan seluruh data relasional pengguna, mata kuliah, tugas, forum, kalender, dan log notifikasi. Data di *named volume*. |
| **File Storage** | **Laravel Local Storage** pada **Docker volume** (`storage/app/public`) | Menyimpan materi PDF, banner OCW, dan berkas tugas mahasiswa (maks. **50 MB**). Volume dipersist di host NixOS. |
| **Reverse Proxy / HTTPS** | **Nginx** / **Caddy** / **Traefik** (di host NixOS) | Terminasi **HTTPS** (Let's Encrypt) dan meneruskan trafik ke container web. |
| **Manajemen DB (opsional)** | **phpMyAdmin** / **Adminer** (container, hanya dev) | Memudahkan pengecekan data *dummy*. Tidak diekspos ke publik pada produksi. |

### Perbedaan dengan tech stack sebelumnya

| Sebelumnya | Sekarang (Docker + NixOS) |
| :--- | :--- |
| Laragon / XAMPP (lokal Windows) | Docker Compose di server NixOS |
| Apache/Nginx + PHP bawaan paket | Container terpisah: **Nginx** + **PHP-FPM** |
| MySQL / MariaDB lokal | Container **MariaDB** dengan *named volume* |
| `public/uploads` di folder proyek | Docker volume untuk `storage` (persisten, di luar image) |
| Aset dikompilasi manual | Aset di-*build* via **Vite** pada *multi-stage build* Dockerfile |
| Konfigurasi `.env` lokal | `.env` + variabel environment pada `docker-compose.yml` |

> Framework (Laravel), UI (Blade + Bootstrap/Tailwind), kalender (FullCalendar), serta skema database **tidak berubah**.

---

## 5. Deployment Docker di NixOS

### 5.1 Struktur layanan (rencana)

```text
                 +--------------------------+
 Internet  --->  | Reverse proxy (NixOS)    |  HTTPS :443
                 +------------+-------------+
                              |
                 +------------v-------------+
                 | nginx (web)    :80       |
                 +------------+-------------+
                              | FastCGI :9000
                 +------------v-------------+      +---------------------+
                 | app (Laravel, PHP-FPM)   +----->| db (MariaDB) :3306  |
                 +------------+-------------+      +----------+----------+
                              |                               |
                    volume: lms_storage               volume: lms_db_data
```

| Service | Image | Peran |
| :--- | :--- | :--- |
| `web` | `nginx:alpine` | Web server & penyaji aset statis |
| `app` | build lokal (`php:8.3-fpm-alpine` + Composer + hasil build Vite) | Aplikasi Laravel |
| `db` | `mariadb:11` | Database relasional |
| `phpmyadmin` *(opsional)* | `phpmyadmin:latest` | Admin database (dev) |

### 5.2 Prasyarat di server NixOS

Aktifkan Docker pada `configuration.nix`:

```nix
{
  virtualisation.docker.enable = true;
  users.users.<username>.extraGroups = [ "docker" ];

  # Buka port untuk reverse proxy (HTTP/HTTPS)
  networking.firewall.allowedTCPPorts = [ 80 443 ];
}
```

Lalu terapkan konfigurasi: `sudo nixos-rebuild switch`.

### 5.3 Menjalankan aplikasi

```bash
# 1. Clone repositori
git clone https://github.com/FoolishOtaku/IMPAL_Kelompok8_MieAyamJabrig.git
cd IMPAL_Kelompok8_MieAyamJabrig

# 2. Siapkan environment
cp .env.example .env     # sesuaikan DB_HOST=db, DB_DATABASE, DB_USERNAME, DB_PASSWORD

# 3. Build & jalankan container
docker compose up -d --build

# 4. Inisialisasi aplikasi (sekali saja)
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate --seed    # seed = data dummy
docker compose exec app php artisan storage:link
```

> [!NOTE]
> File `Dockerfile`, `docker-compose.yml`, dan konfigurasi Nginx akan ditambahkan pada tahap implementasi. Bagian ini menjadi acuan rencana deployment.

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