<div class="card shadow">
<div class="card-header">
    <a href="siswa.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-5">
            <i class="fa fa-arrow-left"></i>
        </span>
        <span class="text"> Kembali </span>
    </a>
</div>
<div class="card-body">

<form action="proses-pengaduan.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label style="font-size: 14px;">Tanggal Pengaduan</label>
        <input type="text" class="form-control" name="tgl_pengaduan" readonly value="<?= date('Y-m-d'); ?>">
    </div>
    <div class="form-group">
        <label style="font-size: 14px;">Isi Laporan</label>
        <textarea class="form-control" name="isi_laporan" required></textarea>
    </div>
    <div class="form-group">
        <label style="font-size: 14px;">Foto</label>
        <input type="file" class="form-control" name="foto" accept="image/*">
    </div>
    <button type="submit" class="btn btn-success">Kirim Laporan</button>
</form>


</div>
</div>