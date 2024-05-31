<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Surat Izin Sidang</h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <?php
        $bimbingan = "SELECT bimbingan.*, user.*, admin.*, user_data.* FROM bimbingan 
         JOIN user ON bimbingan . mhs_id = user . mhs_id 
         JOIN admin ON bimbingan . dos_id = admin . dos_id 
         JOIN user_data ON user . data_id = user_data . data_id 
         WHERE admin . dos_id = " . $admin['dos_id'] . " ";
        $tes = $this->db->query($bimbingan)->result_Array();
        $tes1 = $this->db->query($bimbingan)->result_Array();

        ?>
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <center>
                    <h5 class="card-header">Daftar Mahasiswa Proyek</h5>
                </center>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" width="50">No</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Kelas</th>
                                <th scope="col" width="200">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        <?php foreach ($tes as $tes) : ?>
                            <?php $setatus = $this->db->get_where('status_surat', ['id' => $tes['status_surat_id']])->row_array() ?>
                            <tbody>
                                <tr class="text-center">
                                    <th rowspan="2"><?= $no++  ?></th>
                                    <td><?= $tes['name_mhs_1']; ?></td>
                                    <td><?= $tes['npm_mhs_1']; ?></td>
                                    <td><?= $tes['kelas_mhs_1']; ?></td>
                                    <td rowspan="2"><?= $setatus['status']; ?></td>
                                    <td width="100" rowspan="2">
                                        <a type="button" href="" class="btn btn-primary text-white" data-toggle="modal" data-target="#tambahModal<?= $tes['user_id']; ?>">Izinkan Sidang</a>
                                    </td>
                                </tr>
                              
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <?php foreach ($tes1 as $ts) : ?>
                <div class="modal fade" id="tambahModal<?= $ts['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Notice!</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </div>
                            <div class="modal-body">
                                <form class="user" method="post" action="<?= base_url('dosen/surat_izin_sidang_tambah/') . $ts['user_id']; ?>">
                                    <p>Masukan Persentase Penyelesaian Proyek Dengan Data Mahasiswa:
                                        <br> 
                                       1. <?= $ts['name_mhs_1']; ?> (<?= $ts['npm_mhs_1']; ?>)
                                        <br>  
                                      
                                    </p>
                                    <div class="form-group">
                                        <label for="tanggal_pengumpulan_laporan" class="col-form-label">Persentase Penyelesaian Laporan</label>
                                        <input class="form-control form-control-lg" type="number" name="persentase_laporan" placeholder="%">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_pengumpulan_laporan" class="col-form-label">Persentasi Penyelesaian Aplikasi</label>
                                        <input class="form-control form-control-lg" type="number" name="persentase_apliksai" placeholder="%">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_pengumpulan_laporan" class="col-form-label">Tanggan Persetujuan</label>
                                        <input type="date" name="tanggal_pengumpulan_laporan" class="form-control" id="tanggal_pengumpulan_laporan">
                                    </div>
                            </div>
                            <input type="hidden" name="tanda_tangan" value="<?= $ts['tanda_tangan_digital']; ?>">
                            <div class="modal-footer">
                                <button type="submit" href="#" class="btn btn-primary"><i class="fas fa-check"></i> Setujui</button>
                                <a href="#" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->