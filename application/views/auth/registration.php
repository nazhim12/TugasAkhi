    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <div class="container" style="margin-top: 230px;">
    	<div class="row justify-content-center">
    		<div class="col-7">
    			<div class="card">
    				<div class="card-header text-center">
    					<h3 class="mb-1">Form Registrasi</h3>
    					<p>Silahkan Masukan Data Dengan Benar!</p>
    				</div>
    				<form class="user" method="post" action="<?= base_url('auth/registration') ?>">
    					<div class="card-body">
    						<div class="form-group">
    							<input class="form-control form-control-lg" type="text" name="name_mhs_1" value="<?= set_value('name_mhs_1') ?>" placeholder="Nama Mahasiswa " autocomplete="off">
    							<?= form_error('name_mhs_1', '<small class="text-danger pl-3">', '</small>'); ?>

    						</div>
    						<div class="form-group">
    							<input class="form-control form-control-lg" type="text" name="npm_mhs_1" value="<?= set_value('npm_mhs_1') ?>" placeholder="NIM Mahasiswa " autocomplete="off">
    							<?= form_error('npm_mhs_1', '<small class="text-danger pl-3">', '</small>'); ?>
    						</div>
    						<div class="form-group">
    							<select class="form-control" value="<?= set_value('kelas_mhs_1') ?>" id="kelas_mhs_1" name="kelas_mhs_1">
    								<option disabled selected value>Kelas</option>
    								<option value="S2 Bahasa Indonesia">S2 Bahasa Indonesia</option>
    								<option value="S2 Ilmu Linguistik">S2 Ilmu Linguistik</option>
    								<option value="S2 Bahasa Inggris">S2 Bahasa Inggris</option>
    								<option value="S2 Arkeologi">S2 Arkeologi</option>
    								<option value="S2 Sejarah">S2 Sejarah</option>
    								<option value="S2 Kajian Budaya">S2 Kajian Budaya</option>
    							</select>
    							<?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
    						</div>
    						<hr>

    						<hr>
    						<div class="form-group">
    							<input class="form-control form-control-lg" type="text" readonly name="katagori_proyek" value="Tesis" placeholder="katagori proyek" autocomplete="off">
    							<!-- <select class="form-control" id="katagori_proyek" name="katagori_proyek">
                                <option disabled selected value>Kategori Proyek</option>
                                <option value="Proyek 2">Proyek 2</option>
                            </select> -->
    							<?= form_error('katagori_proyek', '<small class="text-danger pl-3">', '</small>'); ?>
    						</div>
    						<hr>
    						<div class="form-group row">
    							<div class="col-sm-6 mb-3 mb-sm-0">
    								<input type="text" class="form-control form-control-user" id="exampleInputId_User" placeholder="User ID" name="user_id">
    								<?= form_error('user_id', '<small class="text-danger pl-3">', '</small>'); ?>
    							</div>
    							<div class="col-sm-6">
    								<div class="input-group">
    									<input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Password" name="password">
    									<div class="input-group-append">
    										<span class="input-group-text">
    											<i class="fa fa-eye" id="showPassword"></i>
    										</span>
    									</div>
    								</div>
    								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
    							</div>

    						</div>
    						<style>
    							button {
    								--primary-color: #645bff;
    								--secondary-color: #fff;
    								--hover-color: #111;
    								--arrow-width: 10px;
    								--arrow-stroke: 2px;
    								box-sizing: border-box;
    								border: 0;
    								border-radius: 20px;
    								color: var(--secondary-color);
    								padding: 1em 1.8em;
    								background: var(--primary-color);
    								display: flex;
    								transition: 0.2s background;
    								align-items: center;
    								gap: 0.6em;
    								font-weight: bold;
    							}

    							button .arrow-wrapper {
    								display: flex;
    								justify-content: center;
    								align-items: center;
    							}

    							button .arrow {
    								margin-top: 1px;
    								width: var(--arrow-width);
    								background: var(--primary-color);
    								height: var(--arrow-stroke);
    								position: relative;
    								transition: 0.2s;
    							}

    							button .arrow::before {
    								content: "";
    								box-sizing: border-box;
    								position: absolute;
    								border: solid var(--secondary-color);
    								border-width: 0 var(--arrow-stroke) var(--arrow-stroke) 0;
    								display: inline-block;
    								top: -3px;
    								right: 3px;
    								transition: 0.2s;
    								padding: 3px;
    								transform: rotate(-45deg);
    							}

    							button:hover {
    								background-color: var(--hover-color);
    							}

    							button:hover .arrow {
    								background: var(--secondary-color);
    							}

    							button:hover .arrow:before {
    								right: 0;
    							}
    						</style>
    						<button>
    							Sign up
    							<div class="arrow-wrapper">
    								<div class="arrow"></div>

    							</div>
    						</button>

    					</div>
    				</form>
    				<div class="card-footer bg-white text-center">
    					<p>Sudah Memiliki Akun? <a href="<?= base_url('auth') ?>" class="text-secondary">Login
    							Disini!</a></p>
    					<p><a href="<?= base_url('') ?>" class="text-secondary">Kembali Ke Halaman Utama</a></p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <script>
    	document.getElementById("showPassword").addEventListener("click", function() {
    		var passwordInput = document.getElementById("exampleRepeatPassword");
    		if (passwordInput.type === "password") {
    			passwordInput.type = "text";
    			this.classList.remove('fa-eye');
    			this.classList.add('fa-eye-slash');
    		} else {
    			passwordInput.type = "password";
    			this.classList.remove('fa-eye-slash');
    			this.classList.add('fa-eye');
    		}
    	});
    </script>