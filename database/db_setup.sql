-- =========================================================
-- db_setup.sql
-- Jalankan file ini di phpMyAdmin (tab SQL) untuk menyiapkan
-- seluruh database yang dipakai Modul 3B, 4B, dan 5B.
-- =========================================================

-- Modul 3B: buat database
CREATE DATABASE IF NOT EXISTS web_programming_1;
USE web_programming_1;

-- Modul 3B / 4B: tabel mahasiswa
CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    program_studi VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Modul 3B: data dummy (boleh dihapus/diganti)
INSERT INTO mahasiswa (nim, nama, program_studi, email) VALUES
('230001', 'Andi', 'Informatika', 'andi@email.com'),
('230002', 'Budi', 'Sistem Informasi', 'budi@email.com'),
('230003', 'Citra', 'Informatika', 'citra@email.com');

-- Modul 5B: tabel users (login)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Catatan: akun admin TIDAK dibuat lewat SQL manual karena
-- password harus di-hash oleh PHP (password_hash()).
-- Jalankan buat_user.php sekali lewat browser untuk membuat
-- akun admin / admin123 secara otomatis.
