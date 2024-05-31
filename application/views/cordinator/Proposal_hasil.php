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
                    <h2 class="pageheader-title">Proposal Proyek</h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <?php $mhs = $this->db->get_where('user', ['role_id' => 3])->result_Array();

        $mhs2 = "SELECT * FROM user JOIN user_data 
        ON user . data_id  = user_data . data_id
            WHERE user . role_id = 3  ";

        $num = "SELECT * FROM user JOIN user_data 
        ON user . data_id  = user_data . data_id
        WHERE user . role_id = 3 AND user_data . status_proposal_id = 2 ";

        $jadimhs = $this->db->query($mhs2)->result_Array();
        $nummhs = $this->db->query($num)->num_rows();

        // var_dump($mhs);
        // die;
        ?>

        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                   
                    <h5 class="mb-0">Data Pengumpulan Proposal</h5>
                    <br>
                    <?= $this->session->flashdata('message_cor_proposal'); ?>
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
                                <?php $setatus = $this->db->get_where('status_proposal', ['id' => $mhs2['status_proposal_id']])->row_array() ?>
                                <tbody>
                                    <tr class="text-center">
                                        <th rowspan="2"><?= $no++  ?></th>
                                        <td><?= $mhs2['name_mhs_1']; ?></td>
                                        <td><?= $mhs2['npm_mhs_1']; ?></td>
                                        <td><?= $mhs2['kelas_mhs_1']; ?></td>
                                        <td rowspan="2"><?= $setatus['status']; ?></td>
                                        <td width="100" rowspan="2">
                                            <a href=" <?= base_url('cordinator/detailproposal/') . $mhs2['user_id'] ?>" class="btn btn-primary btn-xs">Lihat Detail</a>
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
                                <h5 class="modal-title" id="exampleModalLabel">Pengumpulan Proposal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="user" method="post" action="<?= base_url('cordinator/tambah_proposal') ?>">
                                    <div class="form-group">
                                        <label for="tanggal_pengumpulan_proposal" class="col-form-label">Batas Waktu</label>
                                        <input type="date" name="tanggal_pengumpulan_proposal" class="form-control" id="tanggal_pengumpulan_proposal">
                                    </div>
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