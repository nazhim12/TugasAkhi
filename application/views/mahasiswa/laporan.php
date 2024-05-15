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
                     <h2 class="pageheader-title">Form Pengumpulan Laporan</h2>
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
                     <h5 class="mb-0">Status Pengumpulan</h5>
                 </div>
                 <div class="card-body">
                     <?= $this->session->flashdata('message_mhs_upload_laporan'); ?>
                     <table id="example2" class="table table-striped table-bordered" style="width:100%">
                         <tbody>
                             <tr>
                                 <td>Status Pengumpulan</td>
                                 <td><?= $setatus['status']; ?></td>

                             </tr>
                             
                     </table>
                     <hr>
                     <?php echo form_open_multipart('mahasiswa/upload_laporan'); ?>
                     <div class="form-group row mt-0">
                         <label class="col-12 col-sm-3 col-form-label text-sm-right"></label>
                         <div class="col-12 col-sm-8 col-lg-6">
                             <label for="laporan_proyek" class="form-label"><?= $user_data['laporan_proyek']; ?></label>
                             <input class="form-control" type="file" name="laporan_proyek" id="laporan_proyek" data-toggle="tooltip" data-placement="bottom" title="Maksimal 10MB">
                             <?= form_error('laporan_proyek', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                     </div>
                     <button type="submit" class="btn btn-primary btn-xs text-white float-right margin-right"><i class="fas fa-save"></i> Upload</button>
                 </div>
                 <?= form_close(); ?>
             </div>
         </div>
     </div>
 </div>
 <!-- ============================================================== -->
 <!-- end main wrapper -->