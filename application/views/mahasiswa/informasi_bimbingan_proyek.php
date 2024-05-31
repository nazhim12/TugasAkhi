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
                     <h2 class="pageheader-title">Informasi Dosen Pembimbing</h2>
                     <hr>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <!-- ============================================================== -->
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
                 <div class="card-header">
                     <center>
                         <h5 class="mb-0"> Dosen Pembimbing</h5>
                     </center>
                 </div>
                 <div class="card-body">
                     <table id="example2" class="table table-striped table-bordered" style="width: 100%;">
                         <tbody>
                             <tr>
                             <tr>
                                 <td width="200px">Nama Mahasiswa 1</td>
                                 <td><?= $user['name_mhs_1']; ?></td>
                             </tr>
                             <tr>
                                 <td width="200px">NIM</td>
                                 <td><?= $user['npm_mhs_1']; ?></td>
                             </tr>
                             <tr>
                                 <td width="200px">Kelas</td>
                                 <td><?= $user['kelas_mhs_1']; ?></td>
                             </tr>
                            
                            
                             <tr>
                                 <td width="200px">Judul</td>
                                 <td><?= $user_data['judul_proyek']; ?></td>
                             </tr>
                             <tr>
                                 <td width="200px">Dosen Pembimbing</td>
                                 <td><?php if (isset($tes['name'])) {
                                            echo $tes['name'];;
                                        } ?></td>
                             </tr>
                             <tr>
                                 <td width="200px">No Telpon</td>
                                 <td><?php if (isset($tes['no_telpon'])) {
                                            echo $tes['no_telpon'];;
                                        } ?></td>
                             </tr>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- ============================================================== -->
 <!-- end main wrapper -->