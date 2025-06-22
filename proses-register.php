<?php

$nisn       = $_POST['nisn'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$password   = $_POST['password'];

include 'koneksi.php';

$sql    = "INSERT INTO siswa(nisn, nama, username, password) VALUES ('$nisn', '$nama', '$username', '$password')";

$query  = mysqli_query($koneksi, $sql);

if($query){
    echo "<script>alert('Data Berhasil Disimpan'); window.location.assign('index.php');</script>";
}else{
    echo "<script>alert('Data Gagal Disimpan'); window.location.assign('register.php');</script>";
}