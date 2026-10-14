Kelompok 8 - MieAyamJabrig
Project : Web LMS (Learning Management System)

Anggota
1. Fauzan Ahmad Choiry | 103012400120
2. Gillbrian | 103012400346	
3. Abdurrahman Gigih | 103012400417	
4. Putra Rizaqi Athallah | 103012400022
5. A. Najwa Sabrina Nusawan | 103012400180


# Tech Stack - LMS 

Dokumen ini merangkum spesifikasi teknologi dan skema penyederhanaan (*mocking*) untuk implementasi prototipe berbasis web **LMS Telkom University** menggunakan data *dummy* pada lingkungan lokal

---

## 1. Spesifikasi Tech Stack Utama

| Komponen | Teknologi | Fungsi & Keterangan Implementasi |
| :--- | :--- | :--- |
| **Local Environment** | **Laragon** / **XAMPP** | Menyediakan paket bundel Web Server (**Apache/Nginx**), **PHP 8.x**, dan **MySQL/MariaDB** di lokal. |
| **Backend Framework** | **Laravel 11 (PHP 8.x)** | Menangani *routing*, autentikasi sesi, kontrol akses peran (*role*), validasi berkas, dan logika bisnis. |
| **Frontend / UI** | **Blade Template** + **Bootstrap 5** / **Tailwind CSS** | Merender antarmuka pengguna secara langsung dari *server* tanpa *setup* terpisah. |
| **Komponen Interaktif** | **JavaScript (ES6)** + **FullCalendar.js (CDN)** | Menangani tampilan kalender bulanan/harian serta interaksi *popup* dan validasi *client-side*. |
| **Database** | **MySQL** / **MariaDB** | Menyimpan seluruh data relasional pengguna, mata kuliah, tugas, forum, kalender, dan log notifikasi. |
| **File Storage** | **Laravel Local Storage** (`public/uploads`) | Menyimpan berkas materi PDF, gambar *banner* OCW, dan berkas tugas mahasiswa (maksimal **50 MB**). |

---

## 2. Pemetaan Arsitektur DPPL (Boundary - Control - Entity)

* **Boundary (UI / Interface):** Direpresentasikan oleh file **Laravel Blade** (`resources/views/`) untuk seluruh layar (`L001`–`L003`, `N001`–`N005`, `K001`–`K005`, `P001`–`P013`, dan `Z001`–`Z004`).
* **Control (Controller):** Direpresentasikan oleh **Laravel Controller** (`app/Http/Controllers/`), seperti `LoginController`, `NotifikasiController`, `KalenderController`, `UploadDownloadController`, dan `ForumPostController`.
* **Entity (Basis Data):** Direpresentasikan oleh **Eloquent Models & Migrations** (`app/Models/` & `database/migrations/`) yang memetakan tabel-tabel pada ERD ke dalam MySQL.

---


## 3. Struktur Tabel Database (MySQL / MariaDB)

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