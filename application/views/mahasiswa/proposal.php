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
                     <h2 class="pageheader-title">Form Pengumpulan Proposal</h2>
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
                     <?= $this->session->flashdata('message_mhs_upload_proposal'); ?>
                     <table id="example2" class="table table-striped table-bordered" style="width:100%">
                         <tbody>
                             <tr>
                                 <td>Status Pengumpulan</td>
                                 <td><?= $setatus['status']; ?></td>
                             </tr>
                             <tr>
                                 <td>Status judul Proyek</td>
                                 <td><?= $setatus1['status']; ?> <button type="button" class="btn btn-primary btn-xs text-white float-right margin-right" data-toggle="modal" data-target="#tambahModal">Ganti judul</button></td>
                             </tr>

                     </table>
                     <hr>
                     <?php echo form_open_multipart('mahasiswa/upload_proposal'); ?>
                     <div class="form-group row">
                         <label class="col-12 col-sm-3 col-form-label text-sm-right">Judul Proyek</label>
                         <div class="col-12 col-sm-8 col-lg-6">
                             <input type="text" required="" name="judul_proyek" placeholder="" class="form-control" value="<?= $user_data['judul_proyek']; ?>">
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-12 col-sm-3 col-form-label text-sm-right">Keterangan</label>
                         <div class="col-12 col-sm-8 col-lg-6">
                             <textarea required="" placeholder="" name="keterangan_judul" class="form-control"><?= $user_data['keterangan_judul']; ?> </textarea>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-12 col-sm-3 col-form-label text-sm-right"></label>
                         <div class="col-12 col-sm-8 col-lg-6">
                             <label for="proposal_proyek" class="form-label"><?= $user_data['proposal_proyek']; ?></label>
                             <input type="file" required="" name="proposal_proyek" class="form-control" id="proposal_proyek" data-toggle="tooltip" data-placement="bottom" title="Maksimal 10MB">
                         </div>
                     </div>
                     <style>
                         .btn {
                             position: relative;
                             outline: 0;
                             border: 1px solid transparent;
                             background-color: #488aec;
                             color: #ffffff;
                             font-size: 0.75rem;
                             line-height: 1rem;
                             font-weight: 700;
                             text-transform: uppercase;
                             padding: 0.75rem 1.5rem;
                             border-radius: 0.5rem;
                             cursor: pointer;
                             display: flex;
                             flex-direction: column;
                             align-items: center;
                             justify-content: center;
                             vertical-align: middle;
                             overflow: hidden;
                             box-shadow: 0 4px 6px -1px #488aec31, 0 2px 4px -1px #488aec17;
                         }

                         .btn span {
                             height: 100%;
                             width: 100%;
                             display: flex;
                             align-items: center;
                             justify-content: center;
                             gap: 0.75rem;
                             transition: all .4s ease;
                         }

                         button svg {
                             width: 1.25rem;
                             height: 1.25rem;
                         }

                         .btn span:nth-child(2),
                         .btn span:nth-child(3) {
                             position: absolute;
                             top: 40px;
                             color: #fff;
                         }

                         .btn span:nth-child(2) {
                             background-color: #488aec;
                         }

                         .btn span:nth-child(3) {
                             background-color: #488aec;
                         }

                         .btn:hover {
                             box-shadow: 0 10px 15px -3px #488aec4f, 0 4px 6px -2px #488aec17;
                         }

                         .btn:hover span:nth-child(2),
                         .btn:focus span:nth-child(3) {
                             top: 0;
                         }

                         .btn:focus {
                             box-shadow: none;
                         }
                     </style>
                     <button class="btn">
                         <span>
                             Submit
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                 <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                 <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                 <g id="SVGRepo_iconCarrier">
                                     <path fill="#ffffff" d="M20.33 3.66996C20.1408 3.48213 19.9035 3.35008 19.6442 3.28833C19.3849 3.22659 19.1135 3.23753 18.86 3.31996L4.23 8.19996C3.95867 8.28593 3.71891 8.45039 3.54099 8.67255C3.36307 8.89471 3.25498 9.16462 3.23037 9.44818C3.20576 9.73174 3.26573 10.0162 3.40271 10.2657C3.5397 10.5152 3.74754 10.7185 4 10.85L10.07 13.85L13.07 19.94C13.1906 20.1783 13.3751 20.3785 13.6029 20.518C13.8307 20.6575 14.0929 20.7309 14.36 20.73H14.46C14.7461 20.7089 15.0192 20.6023 15.2439 20.4239C15.4686 20.2456 15.6345 20.0038 15.72 19.73L20.67 5.13996C20.7584 4.88789 20.7734 4.6159 20.7132 4.35565C20.653 4.09541 20.5201 3.85762 20.33 3.66996ZM4.85 9.57996L17.62 5.31996L10.53 12.41L4.85 9.57996ZM14.43 19.15L11.59 13.47L18.68 6.37996L14.43 19.15Z"></path>
                                 </g>
                             </svg>
                         </span>
                         <span>
                             Sure ?
                         </span>
                         <span>
                             Done !
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                 <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                 <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                 <g id="SVGRepo_iconCarrier">
                                     <path stroke-linecap="round" stroke-width="2" stroke="#ffffff" d="M8.00011 13L12.2278 16.3821C12.6557 16.7245 13.2794 16.6586 13.6264 16.2345L22.0001 6"></path>
                                     <path fill="#ffffff" d="M11.1892 12.2368L15.774 6.63327C16.1237 6.20582 16.0607 5.5758 15.6332 5.22607C15.2058 4.87635 14.5758 4.93935 14.226 5.36679L9.65273 10.9564L11.1892 12.2368ZM8.02292 16.1068L6.48641 14.8263L5.83309 15.6248L2.6 13.2C2.15817 12.8687 1.53137 12.9582 1.2 13.4C0.868627 13.8419 0.95817 14.4687 1.4 14.8L4.63309 17.2248C5.49047 17.8679 6.70234 17.7208 7.381 16.8913L8.02292 16.1068Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                 </g>
                             </svg>
                         </span>
                     </button>

                     <?= form_close(); ?>
                 </div>
             </div>
         </div>
         <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Ganti Judul Proyek</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <form class="user" method="post" action="<?= base_url('mahasiswa/ubah_judul') ?>">
                         <div class="modal-body">
                             <div class="form-group">
                                 <label for="judul_proyek" class="col-form-label">Judul Proyek</label>
                                 <input type="text" name="judul_proyek" class="form-control" placeholder="Masukkan Judul Proyek Baru" id="judul_proyek">
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

     <!-- ============================================================== -->
     <!-- end main wrapper -->