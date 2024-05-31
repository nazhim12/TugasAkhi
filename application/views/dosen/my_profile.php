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
                     <h2 class="pageheader-title">My Profile</h2>
                     <hr>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <!-- ============================================================== -->
         <div class="row">
             <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                 <div class="card">
                     <h5 class="card-header">Data Dosen</h5>
                     <div class="card-body">
                         <?= $this->session->flashdata('message_dos_my_profile'); ?>
                         <form action="#" id="basicform" data-parsley-validate="">
                             <div class="form-group">
                                 <label for="inputUserName">Nama Lengkap</label>
                                 <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroupPrepend">
                                         <i class="fas fa-fw fa-user"></i>
                                     </span>
                                     <input id="inputUserName" type="text" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" readonly value="<?= $admin['name']; ?>">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="inputNPM">NIK</label>
                                 <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroupPrepend">
                                         <i class="fas fa-fw fa-id-badge"></i>
                                     </span>
                                     <input id="inputNPM" type="text" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" readonly value="<?= $admin['NIK']; ?>">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="inputEmail">Email</label>
                                 <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroupPrepend">
                                         <i class="fas fa-fw fa-at"></i>
                                     </span>
                                     <input id="inputEmail" type="text" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" readonly value="<?= $admin['email']; ?>">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="inpuNoTelpon">No. Telpon</label>
                                 <div class="input-group-prepend">
                                     <span class="input-group-text" id="inputGroupPrepend">
                                         <i class="fas fa-fw fa-phone"></i>
                                     </span>
                                     <input id="inputNoTelpon" type="number" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" readonly value="<?= $admin['no_telpon']; ?>">
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-6 pl-0">
                                     <p class="text-center">
                                         <button type="button" class="btn btn-space btn-primary" data-toggle="modal" data-target="#tambahModal">Ubah Profil</button>
                                     </p>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <form class="user" method="post" action="<?= base_url('dosen/edit_my_profile') ?>">
                                     <div class="form-group">
                                         <label for="name_ds">Nama Lengkap</label>
                                         <div class="input-group-prepend">
                                             <span class="input-group-text" id="inputGroupPrepend">
                                                 <i class="fas fa-fw fa-user"></i>
                                             </span>
                                             <input id="name_ds" name="name" type="text" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" value="<?= $admin['name']; ?>">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="NIK">NIK</label>
                                         <div class="input-group-prepend">
                                             <span class="input-group-text" id="inputGroupPrepend">
                                                 <i class="fas fa-fw fa-id-badge"></i>
                                             </span>
                                             <input id="NIK" type="text" name="NIK" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" value="<?= $admin['NIK']; ?>">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="email_ds">Email</label>
                                         <div class="input-group-prepend">
                                             <span class="input-group-text" id="inputGroupPrepend">
                                                 <i class="fas fa-fw fa-at"></i>
                                             </span>
                                             <input id="email_ds" type="text" name="email" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" value="<?= $admin['email']; ?>">
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="NoTelpon">No. Telpon</label>
                                         <div class="input-group-prepend">
                                             <span class="input-group-text" id="inputGroupPrepend">
                                                 <i class="fas fa-fw fa-phone"></i>
                                             </span>
                                             <input id="inputNoTelpon" type="number" name="no_telpon" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" value="<?= $admin['no_telpon']; ?>">
                                         </div>
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
 </div>
 <!-- ============================================================== -->
 <!-- end main wrapper -->