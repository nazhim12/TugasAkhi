 <!-- wrapper  -->
 <!-- ============================================================== -->
 <div class="dashboard-wrapper">
 	<div class="container-fluid dashboard-content">
 		<!-- ============================================================== -->
 		<!-- pageheader -->
 		<?php
			$mhs = $this->db->get_where('user', ['role_id' => 3])->result_Array();

			?>
 		<!-- ============================================================== -->
 		<div class="row">
 			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 				<div class="page-header">
 					<h2 class="pageheader-title">Data Mahasiswa</h2>
 					<hr>
 				</div>
 			</div>
 		</div>
 		<!-- ============================================================== -->
 		<!-- end pageheader -->
 		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 			<div class="card">
 				<div class="card-body">

 					<h4 class="card-title">Data Mahasiswa</h4>
 					<br>
 					<?= $this->session->flashdata('message_cor_data_mhs'); ?>
 					<table class="table table-bordered">
 						<thead>
 							<tr class="text-center">
 								<th scope="col-lg-2">No</th>
 								<th scope="col">Nama</th>
 								<th scope="col">NPM</th>
 								<th scope="col">Kelas</th>
 								<th scope="col">No. Telpon</th>
 								<th scope="col">Aksi</th>
 							</tr>
 						</thead>
 						<?php $no = 1; ?>
 						<?php foreach ($mhs as  $m) : ?>
 							<tbody>
 								<tr class="text-center">
 									<th rowspan="2"><?= $no++  ?></th>
 									<td><?= $m['name_mhs_1']; ?></td>
 									<td><?= $m['npm_mhs_1']; ?></td>
 									<td><?= $m['kelas_mhs_1']; ?></td>
 									<td><?= $m['no_telpon_mhs_1']; ?></td>
 									<td width="160" rowspan="2">
 										<a href="<?= base_url('cordinator/akun_mahasiswa_edit/') ?><?= $m['mhs_id'] ?>" class="btn btn-info btn-xs text-white" data-toggle="modal" data-target="#editModal<?= $m['mhs_id']; ?>"><i class="fas fa-edit"></i> Edit</a>
 										<a href="<?= base_url('cordinator/akun_mahasiswa_hapus/') ?><?= $m['mhs_id'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
 									</td>
 								</tr>

 							</tbody>
 						<?php endforeach; ?>
 					</table>
 				</div>

 			</div>
 		</div>
 		<!-- modal edit -->
 		<?php foreach ($mhs as $m) : ?>

 			<div class="modal fade" id="editModal<?= $m['mhs_id']; ?>" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
 				<div class="modal-dialog">
 					<div class="modal-content">
 						<div class="modal-header">
 							<h5 class="modal-title" id="editModal">Edit Data Mahasiswa</h5>
 							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 								<span aria-hidden="true">&times;</span>
 							</button>
 						</div>
 						<div class="modal-body">
 							<form class="user" method="post" action="<?= base_url('cordinator/akun_mahasiswa_edit/') ?><?= $m['mhs_id'] ?>">
 								<div class="form-group">
 									<input class="form-control form-control-lg" type="text" name="name_mhs_1" value="<?= $m['name_mhs_1']; ?>" placeholder="Nama Mahasiswa " autocomplete="off">

 								</div>
 								<div class="form-group">
 									<input class="form-control form-control-lg" type="text" name="npm_mhs_1" value="<?= $m['npm_mhs_1']; ?>" placeholder="NIM Mahasiswa " autocomplete="off">

 								</div>
 								<div class="form-group">
 									<select class="form-control" id="kelas_mhs_1" name="kelas_mhs_1">
 										<option disabled selected value>Kelas</option>
 										<option value="S2 Bahasa Indonesia">S2 Bahasa Indonesia</option>
 										<option value="S2 Ilmu Linguistik">S2 Ilmu Linguistik</option>
 										<option value="S2 Bahasa Inggris">S2 Bahasa Inggris</option>
 										<option value="S2 Arkeologi">S2 Arkeologi</option>
 										<option value="S2 Sejarah">S2 Sejarah</option>
 										<option value="S2 Kajian Budaya">S2 Kajian Budaya</option>
 									</select>

 								</div>
 								<hr>

 								<div class="form-group row">
 									<div class="col-sm-6 mb-3 mb-sm-0">
 										<input type="text" class="form-control form-control-user" name="user_id" id="user_id" placeholder="User ID" value="<?= $m['user_id']; ?>">
 									</div>
 									<div class="col-sm-6">
 										<input type="password" class="form-control form-control-user" name="password" id="password" placeholder="masukan baru Password">
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
 		<?php endforeach; ?>