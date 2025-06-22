<?php

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;

        case 'lihat-pengaduan':
            include 'lihat-pengaduan.php';
            break;

        case 'detail-pengaduan':
            include 'detail-pengaduan.php';
            break;

        case 'lihat-tanggapan':
            include 'lihat-tanggapan.php';
            break;
            
        case 'tanggapi-laporan':
            include 'tanggapi-laporan.php';
            break;

        case 'tanggapan-pengaduan':
            include 'tanggapan-pengaduan.php';
            break;

        default:
            echo "Halaman Tidak Ditemukan";
            break;
    }
}else{
    echo "Selamat Datang Di Aplikasi S-Monter (Smart Monitoring Water), Dimana Aplikasi ini dibuat untuk melaporkan permasalahan air yang ada di SMAN 5 Pinrang.<br><br>";
    echo "Anda Login Sebagai : ".$_SESSION['nama_petugas'];"";
}