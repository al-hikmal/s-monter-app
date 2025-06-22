<?php

$tgl_tanggapan = $_POST['tgl_tanggapan'];
$tanggapan     = $_POST['tanggapan'];
$id_pengaduan  = $_POST['id_pengaduan'];
$id_petugas    = $_SESSION['id_petugas'];

include '../koneksi.php';
$sql = "INSERT INTO tanggapan (tgl_tanggapan, tanggapan, id_pengaduan, id_petugas) VALUES ('$tgl_tanggapan', '$tanggapan', '$id_pengaduan', '$id_petugas')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Tanggapan Berhasil Terkirim'); window.location.assign('petugas.php');</script>";
}else{
    echo "<script>alert('Tanggapan Gagal Terkirim'); window.location.assign('petugas.php?url=tanggapi-laporan');</script>";
}