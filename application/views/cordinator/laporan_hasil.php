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
                    <h2 class="pageheader-title">Laporan Proyek</h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <?php

        $mhs2 = "SELECT * FROM user JOIN user_data 
         ON user . data_id  = user_data . data_id
         WHERE user . role_id = 3  ";

        $num = "SELECT * FROM user JOIN user_data 
         ON user . data_id  = user_data . data_id
         WHERE user . role_id = 3 AND user_data . status_laporan_id = 2 ";

        $jadimhs = $this->db->query($mhs2)->result_Array();
        $nummhs = $this->db->query($num)->num_rows();
        // echo '<pre>';
        // var_dump($jadimhs);
        // echo '</pre>';
        // die;
        // $role_id = $this->db->get('status_laporan_id')->result_Array();
        // $status = $this->db->get_where('status', ['id' => $role_id])->row_array();

        ?>


        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="mb-0">Data Pengumpulan Laporan Proyek</h5>
                    <br>
                    <?= $this->session->flashdata('message_cor_laporan'); ?>
                    <br>
                    <table id="example2" class="table table-striped table-bordered" style="width:100%">
                        <tbody>

                            <tr>
                                <td>Jumlah Pengumpul</td>
                                <td><?= $nummhs; ?></td>
                            </tr>
                    </table>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" width="50">No</th>
                                    <th scope="col">Nama Mahasiswa</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col" width="200">Status Pengumpulan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <?php foreach ($jadimhs as $mhs2) : ?>
                                <?php $setatus = $this->db->get_where('status', ['id' => $mhs2['status_laporan_id']])->row_array() ?>
                                <tbody>
                                    <tr class="text-center">
                                        <th rowspan="2"><?= $no++  ?></th>
                                        <td><?= $mhs2['name_mhs_1']; ?></td>
                                        <td><?= $mhs2['npm_mhs_1']; ?></td>
                                        <td><?= $mhs2['kelas_mhs_1']; ?></td>
                                        <td rowspan="2"><?= $setatus['status']; ?></td>
                                        <td width="100" rowspan="2">
                                            <a href="<?= base_url('cordinator/detaillaporan/') . $mhs2['user_id'] ?>" class="btn btn-primary btn-xs">Lihat Detail</a>
                                        </td>
                                    </tr>

                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pengumpulan Laporan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form class="user" method="post" action="<?= base_url('cordinator/tambah_laporan') ?>">
                                <div class="modal-body">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->