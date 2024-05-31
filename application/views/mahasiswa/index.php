        <!-- ============================================================== -->
        <!-- ============================================================== -->
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
                            <h2 class="pageheader-title">Dashboard</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <h3>
                                    Selamat datang  <?= $user['name_mhs_1'] ; ?> di Sistem Informasi Bimbingan Proyek
                                </h3>
                            </center>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Judul Proyek</h5>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h3>
                                        <?= $user_data['judul_proyek']; ?>
                                    </h3>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <center>
                                <h5 class="card-header">Dosen Pembimbing</h5>
                            </center>
                            <div class="card-body">

                                <center>
                                    <h3>
                                        <?php if (isset($tes['name'])) {
                                            echo $tes['name'];;
                                        } ?>
                                    </h3>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->