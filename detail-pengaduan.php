<?php

$id = $_GET['id'];
if (empty($id)) {
    header('Location: siswa.php');
}

include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan = '$id'");
$data = mysqli_fetch_array($query);

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

<form action="proses-pengaduan.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label style="font-size: 14px;">NISN Pelapor</label>
        <input type="text" class="form-control" name="nisn" readonly value="<?= $data['nisn']; ?>">
    </div>
    <div class="form-group">
        <label style="font-size: 14px;">Tanggal Pengaduan</label>
        <input type="text" class="form-control" name="tgl_pengaduan" readonly value="<?= $data['tgl_pengaduan']; ?>">
    </div>
    <div class="form-group">
        <label style="font-size: 14px;">Isi Laporan</label>
        <textarea class="form-control" name="isi_laporan" required><?= $data['isi_laporan']; ?></textarea>
    </div>
    <div class="form-group">
        <label style="font-size: 14px;">Foto</label>
        <img class="img-thumbnail" src="foto/<?= $data['foto']; ?>" witdth="300">
    </div>
</form>

</div>
</div>