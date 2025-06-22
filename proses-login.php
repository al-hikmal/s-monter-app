<?php

$nisn       = $_POST['nisn'];
$password   = $_POST['password'];

include 'koneksi.php';
$sql    = "SELECT * FROM siswa WHERE nisn='$nisn' AND password='$password'";
$query  = mysqli_query($koneksi, $sql);

var_dump($query);

if (mysqli_num_rows($query) > 0) {
    session_start();
    $_SESSION['nisn'] = $nisn;
    $data = mysqli_fetch_array($query);
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $data['username'];

    header("location: siswa.php");
} else {
    echo "<Script>alert('NISN atau Password Salah'); window.location.assign('index.php');</Script>";
}