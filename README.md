# Web Programming 1 - Project Session (Modul 1-5B)

Project ini dibangun **berkelanjutan**, bukan dari nol setiap modul — persis seperti instruksi di semua SAS.

## Struktur Folder Final

```
web-programming-session4/
├── index.php            <- Biodata (Modul 1-2), protected
├── layout.php            <- Layout Lab (Modul 3A), protected
├── data_mahasiswa.php    <- Tabel dinamis dari MySQL (Modul 3B), protected
├── form_mahasiswa.php    <- Form tambah data (Modul 4B), protected
├── proses_tambah.php     <- Backend INSERT (Modul 4B), protected
├── koneksi.php           <- Koneksi MySQL (dipakai bersama sejak 4B)
├── style.css             <- CSS gabungan semua modul
├── login.php             <- Halaman login (Modul 5B), PUBLIC
├── proses_login.php      <- Verifikasi login (Modul 5B)
├── auth.php              <- Session guard (Modul 5B) - WAJIB di halaman protected
├── dashboard.php         <- Project Hub setelah login (Modul 5B)
├── logout.php            <- Hapus session (Modul 5B)
├── buat_user.php         <- Script sekali-jalan buat akun admin (Modul 5B)
├── db_setup.sql          <- Semua query CREATE DATABASE/TABLE
├── foto.jpg              <- GANTI dengan foto Anda sendiri (belum disertakan)
└── README.md             <- file ini
```

## Cara Menjalankan (Urutan Wajib)

1. **Copy folder ini ke** `C:\laragon\www\web-programming-session4`
2. **Jalankan Laragon** → klik **Start All** (Apache + MySQL harus hidup).
3. **Buka phpMyAdmin** (`http://localhost/phpmyadmin/`) → tab **SQL** → paste isi `db_setup.sql` → **Go**.
   Ini akan membuat database `web_programming_1`, tabel `mahasiswa` (+3 data dummy), dan tabel `users` (kosong).
4. **Buat akun login**: buka `http://localhost/web-programming-session4/buat_user.php` satu kali di browser.
   Ini akan membuat akun `admin` / `admin123` dengan password ter-hash (tidak bisa dibuat lewat SQL manual).
5. **Login**: buka `http://localhost/web-programming-session4/login.php`, masuk dengan `admin` / `admin123`.
6. Setelah login, Anda akan diarahkan ke **dashboard.php** yang jadi pusat navigasi ke semua halaman lain.

PENTING: semua file `.php` **harus** dibuka lewat `http://localhost/...`, **jangan** pakai Live Server / `file:///`,
karena PHP hanya diproses oleh web server (Apache).

## Urutan Pembangunan per Modul (ringkas)

| Modul | Yang dikerjakan | File yang dibuat/diubah |
|---|---|---|
| 1-2 | Biodata dasar (HTML murni) | `index.html` (lalu di-rename `index.php` di Modul 5B) |
| 3A | Pisah HTML/CSS, halaman baru, sidebar kiri/kanan | `layout.html` → `layout.php`, `style.css` |
| 3B | Tabel HTML statis → dinamis dari MySQL | `data_mahasiswa.php`, tabel `mahasiswa` |
| 4B | Form input → POST → PHP → INSERT ke MySQL | `form_mahasiswa.php`, `proses_tambah.php`, `koneksi.php` |
| 5B | Login, session, dashboard, proteksi semua halaman | `login.php`, `proses_login.php`, `auth.php`, `dashboard.php`, `logout.php`, `buat_user.php`, tabel `users` |

## Checklist Cepat (sesuai Checkpoint di Modul 5B)

- [ ] Checkpoint 0: project lama (Modul 1-4) bisa dibuka tanpa error sebelum mulai 5B
- [ ] Checkpoint 1: tabel `users` dibuat, tabel `mahasiswa` tetap ada
- [ ] Checkpoint 2: `koneksi.php` satu-satunya, dipakai semua halaman
- [ ] Checkpoint 3: `buat_user.php` sukses, `password_hash` berupa string panjang (`$2y$...`), BUKAN `admin123`
- [ ] Checkpoint 4: `login.php` tampil normal lewat `http://localhost/...`
- [ ] Checkpoint 5: login salah ditolak, login benar redirect ke `dashboard.php`
- [ ] Checkpoint 6: akses `dashboard.php` tanpa login → redirect ke `login.php`
- [ ] Checkpoint 7: `index.php`, `layout.php`, `data_mahasiswa.php`, `form_mahasiswa.php`, `proses_tambah.php` semua pakai `auth.php`
- [ ] Checkpoint 8: logout benar-benar mengunci kembali semua halaman protected
- [ ] Checkpoint 9: uji end-to-end dari nol (lihat tabel di Modul 5B Part H)

## Yang Belum Termasuk (akan masuk di Modul 6+)

Modul 6 (JavaScript) belum ada lembar kerja (SAS)-nya di antara dokumen yang Anda kirim, jadi belum dibuatkan di
project ini. Berdasarkan "Bridge to Next Meeting" di Modul 5B, modul berikutnya akan menambahkan:
- Show/hide password di `login.php`
- Client-side validation pada `form_mahasiswa.php`
- Search/filter pada `data_mahasiswa.php`
- Event & DOM interaction

Kirim SAS Modul 6 jika sudah ada, nanti saya lanjutkan dengan cara yang sama (tanpa membuat project baru).

## Sidebar Kanan (opsional, Modul 3A Advanced)

Untuk mencoba sidebar kanan di `layout.php`, ubah baris:
```html
<div class="page-layout">
```
menjadi:
```html
<div class="page-layout right">
```
CSS-nya sudah tersedia di `style.css` (`.page-layout.right`).
