<div class="card shadow">
<div class="card-header">
    <a href="petugas.php" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-5">
            <i class="fa fa-arrow-left"></i>
        </span>
        <span class="text"> Kembali </span>
    </a>
</div>
<div class="card-body">

<form action="proses-tanggap.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label style="font-size: 14px;">Tanggal Tanggapan</label>
        <input type="text" class="form-control" name="tgl_pengaduan" readonly value="<?= date('Y-m-d'); ?>">
    </div>
    <div class="form-group">
        <label style="font-size: 14px;">Isi Tanggapan</label>
        <textarea class="form-control" name="isi_laporan" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Kirim Tanggapan</button>
</form>


</div>
</div>