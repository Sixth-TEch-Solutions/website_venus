<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Venus Sentra Oleh-Oleh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/header.css">
</head>

<body>
    <section id="header">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-0">
                <a href="index.php" class="d-flex align-items-center mb-5 mb-md-0 me-md-auto  text-decoration-none">
                    <svg class="bi me-2" width="40" height="30"><img src="./assets/image/logo venus.png" alt="" height="50"></svg>
                </a>
                <ul class="nav nav-pills align-items-center">
                    <li class="nav-item"><a href="tentangkami.php" class="nav-link text-danger" aria-current="page">Tentang Kami</a></li>
                    <li class="nav-item"><a href="produk.php" class="nav-link text-danger">Produk</a></li>
                    <li class="nav-item"><a href="berita.php" class="nav-link text-danger">Berita</a></li>
                    <li class="nav-item"><a href="toko.php" class="nav-link text-danger">Toko</a></li>
                    <li class="nav-item"><a href="kontak.php" class="nav-link text-danger">Kontak</a></li>
                </ul>
            </header>
        </div>
    </section>

    <link rel="stylesheet" href="./assets/css/order.css">

    <section id="form">
        <div class="form-container">
            <div class="title">FORM PEMESANAN</div>
            <form action="#" novalidate>
                <div class="form-first">
                    <div class="buyer-details">
                        <span class="form">Personal Details</span>
                        <div class="box">
                            <div class="input-box">
                                <span class="details">Nama Lengkap</span>
                                <input type="text" class="nama" placeholder="Masukkan nama Anda" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Nomor Telepon</span>
                                <input type="text" class="nomor" placeholder="Masukkan nomor telepon Anda" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Alamat Lengkap</span>
                                <textarea class="alamat" placeholder="Masukkan alamat lengkap Anda" cols="3" rows="10" required></textarea>
                            </div>
                            <button class="next">
                                <span class="btnText">Berikutnya</span>
                                <i class="uil uil navigator"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-second">
                    <div class="order-details">
                        <span class="form">Order Details</span>
                        <div class="box">
                            <div class="input-box">
                                <span class="details">Jenis Barang</span>
                                <select id="" name="" class="jenisbarang1">
                                    <option value="-">-</option>
                                    <option value="Kue Basah">Kue Basah</option>
                                    <option value="Kue Kering">Kue Kering</option>
                                    <option value="Brownis">Brownis</option>
                                    <option value="Bolu">Bolu</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details">Nama Barang</span>
                                <input type="text" class="namabarang1" placeholder="Masukkan nama barang" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Jumlah Barang</span>
                                <input type="text" class="jumlahbarang1" placeholder="Masukkan jumlah barang" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Jenis Barang</span>
                                <select id="" name="" class="jenisbarang2">
                                    <option value="-">-</option>
                                    <option value="Kue Basah">Kue Basah</option>
                                    <option value="Kue Kering">Kue Kering</option>
                                    <option value="Brownis">Brownis</option>
                                    <option value="Bolu">Bolu</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details">Nama Barang</span>
                                <input type="text" class="namabarang2" placeholder="Masukkan nama barang" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Jumlah Barang</span>
                                <input type="text" class="jumlahbarang2" placeholder="Masukkan jumlah barang" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Jenis Barang</span>
                                <select id="" name="" class="jenisbarang3">
                                    <option value="-">-</option>
                                    <option value="Kue Basah">Kue Basah</option>
                                    <option value="Kue Kering">Kue Kering</option>
                                    <option value="Brownis">Brownis</option>
                                    <option value="Bolu">Bolu</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <span class="details">Nama Barang</span>
                                <input type="text" class="namabarang3" placeholder="Masukkan nama barang" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Jumlah Barang</span>
                                <input type="text" class="jumlahbarang3" placeholder="Masukkan jumlah barang" required>
                            </div>
                            <div class="buttons">
                                <button class="preview">
                                    <span class="btnText">Sebelumnya</span>
                                    <i class="uil uil navigator"></i>
                                </button>
                                <button onclick="sendTowhatsapp();">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

<script src="Assets/js/order.js"></script>
<script src="Assets/js/whatsapp.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php
include('template/footer.php');
?>