          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Verifikasi Pengaduan</h6>
            </div>
            <div class="card-body" style="font-size: 14px;">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Pengaduan</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Pengaduan</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Action</th>
                  </tfoot>
                  <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT * FROM pengaduan WHERE nisn = '$_SESSION[nisn]' ORDER BY id_pengaduan DESC";
                    $query = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($query)) { ?>
                    <tr>
                      <td><?= $no['id_pengaduan']; ?></td>
                      <td><?= $data['tgl_pengaduan']; ?></td>
                      <td><?= $data['isi_laporan']; ?></td>
                      <td><?= $data['foto']; ?></td>

                      <td>
                      <?php
                        if ($data['status'] == '0') {
                          $sql = "UPDATE pengaduan SET status = 'proses' WHERE id_pengaduan = '$data[id_pengaduan]'";
                          $query = mysqli_query($koneksi, $sql);
                          if ($query) {
                            echo "<script>alert('Pengaduan Berhasil Diverifikasi'); window.location.assign('verifikasi-laporan.php');</script>";
                          }else {
                            echo "<script>alert('Pengaduan Gagal Diverifikasi'); window.location.assign('verifikasi-laporan.php');</script>";
                          }
                          }?>
                          <a href="#" class="btn btn-primary btn-icon-split">
                          <span>
                            <i class="fas fa-stopwatch"></i>
                          </span>
                          <span class="text">Proses</span>
                          </a>
                      

                        <?php
                        if ($data['status'] == 'proses') {
                          $sql = "UPDATE pengaduan SET status = 'selesai' WHERE id_pengaduan = '$data[id_pengaduan]'";
                          $query = mysqli_query($koneksi, $sql);
                          if ($query) {
                            echo "<script>alert('Pengaduan Berhasil Diverifikasi'); window.location.assign('verifikasi-laporan.php');</script>";
                          }else {
                            echo "<script>alert('Pengaduan Gagal Diverifikasi'); window.location.assign('verifikasi-laporan.php');</script>";
                          }
                          }?>

                        <a href="?url=selesai-pengaduan&id=<?= $data['id_pengaduan']; ?>" class="btn btn-info btn-icon-split">
                        <span>
                          <i class="fas fa-circle-check"></i>
                        </span>
                        <span class="text">Selesai</span>
                        </a>
                      
                        
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>