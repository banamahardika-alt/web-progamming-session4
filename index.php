<?php
require_once "auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Saya</title>
    <link rel="stylesheet" href="style.css">
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
    <a href="logout.php">Logout</a>
</nav>

<main>
    <section id="biodata">
        <h2>Data Diri</h2>
        <img src="PAS FOTO@4x.png" alt="Foto Profil">
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
                <th>Email</th>
                <td>banna.mahardika.fict@krw.horizon.ac.id</td>
            </tr>
        </table>
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
            <li>Olahraga</li>
            <li>Gaming</li>
        </ul>
    </section>
</main>

<footer>
    <p>Web Programming 1</p>
</footer>

</body>
</html>
