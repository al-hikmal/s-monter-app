<?php

$id = $_GET['id'];
if (empty($id)) {
    header('Location: siswa.php');
}

include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM pengaduan, tanggapan WHERE tanggapan.id_pengaduan = '$id' AND tanggapan.id_pengaduan = pengaduan.id_pengaduan");


?>
<div class="card shadow">
<div class="card-header">
    <a href="?url=lihat-pengaduan" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-5">
            <i class="fa fa-arrow-left"></i>
        </span>
        <span class="text"> Kembali </span>
    </a>
</div>
<div class="card-body">
    <?php
    if (mysqli_num_rows($query) == 0) {
        echo "<div class='alert alert-danger'>Maaf tanggapan anda belum ditanggapi</div>";
    }else {
    $data = mysqli_fetch_array($query); ?>
<form action="proses-pengaduan.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label style="font-size: 14px;">NISN Penanggap</label>
        <input type="text" class="form-control" name="nisn" readonly value="<?= $data['nisn']; ?>">
    </div>
    <div class="form-group">
        <label style="font-size: 14px;">Tanggal Tanggapan</label>
        <input type="text" class="form-control" name="tgl_pengaduan" readonly value="<?= $data['tgl_tanggapan']; ?>">
    </div>
    <div class="form-group">
        <label style="font-size: 14px;">Laporan</label>
        <textarea class="form-control" name="isi_laporan" required><?= $data['isi_laporan']; ?></textarea>
    </div>
    <div class="form-group">
        <label style="font-size: 14px;">Tanggapan</label>
        <textarea class="form-control" name="isi_laporan" required><?= $data['tanggapan']; ?></textarea>
    </div>
</form>
<?php } ?>
</div>
</div>