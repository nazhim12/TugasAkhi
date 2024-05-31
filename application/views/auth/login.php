<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center fa-5x"><i class="fas fa-user-circle"></i><span class="splash-description">Selamat Datang, Silahkan Login!</span>
        </div>

        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                <div class="form-group">
                    <input class="form-control form-control-lg" name="user_id" id="user_id" type="text" placeholder="User ID" autocomplete="off">
                    <?= form_error('user_id', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="input-group">
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
        <button class="btn btn-block btn-primary" type="submit">Login</button>
        </form>
    </div>
    <div class="card-footer bg-white text-center">
        <p>Belum Memiliki Akun? <a href="<?= base_url('auth/registration') ?>" class="text-secondary">Register Disini!</a></p>
        <p><a href="<?= base_url('') ?>" class="text-secondary">Kembali Ke Halaman Utama</a></p>
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