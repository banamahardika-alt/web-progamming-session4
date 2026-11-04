<?php
require_once "../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Saya</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <header>
        <h1>Biodata Saya</h1>
        <p>Web Programming 1</p>
    </header>

    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="index.php">Home / Biodata</a>
        <a href="layout.php">Layout Lab</a>
        <a href="data_mahasiswa.php">Data Mahasiswa</a>
        <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
        <a href="../crud/index.php">CRUD Mahasiswa</a>
        <a href="../proses/logout.php">Logout</a>
    </nav>

    <main>
        <section id="biodata">
            <h2>Data Diri</h2>
            <img src="../assets/images/PAS FOTO@4x.png" alt="Foto Profil">
            <table>
                <tr>
                    <th>Nama</th>
                    <td>BANNA MAHARDIKA</td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>4112755201250087</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>Informatika</td>
                </tr>
                <tr>
                    <th>Fakultas</th>
                    <td>Fakultas Ilmu Komputer</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>banna.mahardika.fict@krw.horizon.ac.id</td>
                </tr>
            </table>
        </section>

        <section id="Tentang Saya">
            <h2>Tentang Saya</h2>
            <p>Nama saya BANNA MAHARDIKA, saya adalah seorang mahasiswa di Fakultas Ilmu Komputer, Horizon University
                Indonesia.</p>
        </section>

        <section id="pendidikan">
            <h2>Pendidikan</h2>
            <ul>
                <li>SD - SDIT LAMPU IMAN</li>
                <li>SMP - SMPIT AL JANNAH KARAWANG</li>
                <li>SMA - MAN 2 KARAWANG</li>
                <li>Kuliah - Horizon University Indonesia</li>
            </ul>
        </section>

        <section id="hobi">
            <h2>Hobi</h2>
            <ul>
                <li>Membaca</li>
                <li>Coding</li>
                <li>Olahraga Jogging</li>
                <li>Gaming</li>
            </ul>
        </section>

        <section id="skill">
            <h2>Keahlian</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Design Grafis</li>
            </ul>
        </section>

        <section id="sosial-media">
            <h2>Social Media</h2>
            <p>
                Instagram:
                <a href="https://www.instagram.com/" target="_blank">
                    Instagram Saya
                </a>
            </p>

             <p>
                GitHub:
                <a href="https://github.com/" target="_blank">
                    GitHub Saya
                </a>
            </p>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Banna Mahardika</p>
        <p2>Web Programming 1</p2>
    </footer>

</body>
</html>