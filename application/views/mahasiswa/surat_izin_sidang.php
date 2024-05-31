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
                     <?= $this->session->flashdata('message_mhs_tandatangan'); ?>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <!-- ============================================================== -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
         <style>
             .card {
                 margin: 0;
                 font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                 font-size: .8125rem;
                 font-weight: 400;
                 line-height: 1.5385;
                 color: #333;
                 text-align: left;
                 /* background-color: #eee */
             }

             .button {
                 --main-focus: #2d8cf0;
                 --font-color: #323232;
                 --bg-color-sub: #dedede;
                 --bg-color: #eee;
                 --main-color: #323232;
                 position: relative;
                 width: 150px;
                 height: 40px;
                 cursor: pointer;
                 display: flex;
                 align-items: center;
                 border: 2px solid var(--main-color);
                 box-shadow: 4px 4px var(--main-color);
                 background-color: var(--bg-color);
                 border-radius: 10px;
                 overflow: hidden;
             }

             .button,
             .button__icon,
             .button__text {
                 transition: all 0.3s;
             }

             .button .button__text {
                 transform: translateX(22px);
                 color: var(--font-color);
                 font-weight: 600;
             }

             .button .button__icon {
                 position: absolute;
                 transform: translateX(109px);
                 height: 100%;
                 width: 39px;
                 background-color: var(--bg-color-sub);
                 display: flex;
                 align-items: center;
                 justify-content: center;
             }

             .button .svg {
                 width: 20px;
                 fill: var(--main-color);
             }

             .button:hover {
                 background: var(--bg-color);
             }

             .button:hover .button__text {
                 color: transparent;
             }

             .button:hover .button__icon {
                 width: 148px;
                 transform: translateX(0);
             }

             .button:active {
                 transform: translate(3px, 3px);
                 box-shadow: 0px 0px var(--main-color);
             }
         </style>

         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="card">
                 <div class="card-body">
                     <button class="button" id="download" type="button">
                         <span class="button__text">Download</span>
                         <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" id="bdd05811-e15d-428c-bb53-8661459f9307" data-name="Layer 2" class="svg">
                                 <path d="M17.5,22.131a1.249,1.249,0,0,1-1.25-1.25V2.187a1.25,1.25,0,0,1,2.5,0V20.881A1.25,1.25,0,0,1,17.5,22.131Z"></path>
                                 <path d="M17.5,22.693a3.189,3.189,0,0,1-2.262-.936L8.487,15.006a1.249,1.249,0,0,1,1.767-1.767l6.751,6.751a.7.7,0,0,0,.99,0l6.751-6.751a1.25,1.25,0,0,1,1.768,1.767l-6.752,6.751A3.191,3.191,0,0,1,17.5,22.693Z"></path>
                                 <path d="M31.436,34.063H3.564A3.318,3.318,0,0,1,.25,30.749V22.011a1.25,1.25,0,0,1,2.5,0v8.738a.815.815,0,0,0,.814.814H31.436a.815.815,0,0,0,.814-.814V22.011a1.25,1.25,0,1,1,2.5,0v8.738A3.318,3.318,0,0,1,31.436,34.063Z"></path>
                             </svg></span>
                     </button>

                     <br>
                     <hr>


                     <div class="row justify-content-center mt-50 mb-50">
                         <div class="col-md-8">
                             <div class="border">
                                 <div class="container" style="padding: 15px;" id="invoice">
                                     <div class="header" style="text-align: center;">
                                         <h3>PERSETUJUAN DAN PERMOHONAN SIDANG PROYEK</h3>
                                     </div>
                                     <br>
                                     <div class="name">
                                         <p>Saya sebagai Pembimbing mahasiswa tersebut dibawah ini:</p>
                                         <table style="margin-left: 10px;margin-top: -15px;">
                                             <tr>
                                                 <td width='250px'>Nama Mahasiswa </td>
                                                 <td>:</td>
                                                 <td><?= $user['name_mhs_1']; ?></td>


                                             </tr>
                                             <tr>
                                                 <td>NIM </td>
                                                 <td> :</td>
                                                 <td><?= $user['npm_mhs_1']; ?></td>


                                             </tr>
                                             <tr>
                                                 <td>Judul Proyek</td>
                                                 <td> :</td>
                                                 <td colspan="3">
                                                     <?php if (isset($user_data['judul_proyek'])) {
                                                            echo $user_data['judul_proyek'];;
                                                        } ?>
                                                 </td>
                                             </tr>
                                             <tr>
                                                 <td>Nama Pembimbing</td>
                                                 <td> :</td>
                                                 <td colspan="3">
                                                     <?php if (isset($mhs2['name'])) {
                                                            echo $mhs2['name'];;
                                                        } ?>
                                                 </td>
                                             </tr>
                                         </table>
                                         <br>
                                         <p>Menyatakan bahwa mahasiswa tersebut telah menyelesaikan Alat/Proyek <?= $user['persentase_apliksai']; ?>%. Adapun penulisan laporan proyek telah diselesaikan seluruhnya <?= $user['persentase_laporan']; ?>%</p>
                                         <p>Dengan demikian saya mengajukan mahasiswa tersebut untuk mengikuti sidang Proyek. Apabila ternyata pernyataan saya tersebut tidak benar, maka saya menyetujui penundaan sidang termasuk pembatalan sidang Proyek untuk mahasiswa bimbingan saya tersebut sesuai aturan yang berlaku.</p>
                                     </div>
                                     <br>
                                     <br>
                                     <div class="tabel-mk signature-container">
                                         <span class="signature">Makassar, <?= $user['tanggal_surat']; ?></span><br>
                                         <br>
                                         <br>
                                     </div>
                                     <br>
                                     <br>
                                     <br>
                                     <div class="row justify-content-center">
                                         <table style="margin-top: -15px; margin-left: 10px;">
                                         </table>
                                         <br>
                                         <br>
                                         <br>

                                         <table class="text-center">
                                             <tr>
                                                 <td style="vertical-align: bottom;"><img width="100px" src="<?= base_url('assets/File/Tanda_tangan_mhs/') . $user['tanda_tanga_digital_mhs_1']; ?>"></td>
                                                 <td rowspan="3" class="px-4"></td>
                                                 <td style="vertical-align: bottom;"><img width="100px" src="<?= base_url('assets/File/Tanda_tangan_mhs/') . $user['tanda_tanga_digital_mhs_2']; ?>"></td>
                                                 <td rowspan="3" class="px-4"></td>
                                                 <td><img width="100px" src="<?= base_url('assets/File/tandatangan_dosen/') . $user['tanda_tangan']; ?>"></td>
                                             </tr>
                                             <tr>
                                                 <td>(<?= $user['name_mhs_1']; ?>)</td>

                                                 <td>(<?php if (isset($mhs2['name'])) {
                                                            echo $mhs2['name'];;
                                                        } ?>)</td>
                                             </tr>
                                             <tr>
                                                 <td>NIM : <?= $user['npm_mhs_1']; ?></td>

                                                 <td>NIK :
                                                     <?php if (isset($mhs2['NIK'])) {
                                                            echo $mhs2['NIK'];;
                                                        } ?>
                                                 </td>
                                             </tr>

                                         </table>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script>
         window.onload = function() {
             document.getElementById("download")
                 .addEventListener("click", () => {
                     const invoice = this.document.getElementById("invoice");
                     console.log(invoice);
                     console.log(window);
                     var opt = {
                         margin: 1,
                         filename: 'myfile.pdf',
                         image: {
                             type: 'jpeg',
                             quality: 0.98
                         },
                         html2canvas: {
                             scale: 2
                         },
                         jsPDF: {
                             unit: 'in',
                             format: 'a4',
                             orientation: 'portrait'
                         }
                     };
                     html2pdf().from(invoice).set(opt).save();
                 })
         }
     </script>

 </div>