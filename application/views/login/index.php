<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5 login-card-modern" id="card">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex login-left-pane">
                            <div class="p-5 w-100 text-center">
                            <div class="judul">
                                <img width="120px" src="<?= base_url() ?>assets/icon/books.png" alt="" class="mb-4" style="filter: drop-shadow(0px 10px 15px rgba(0,0,0,0.2));">
                            </div>
                                <div class="spinner">
                                    <div class="double-bounce1"></div>
                                    <div class="double-bounce2"></div>
                                </div>
                                <div class="judul">
                                    <hr class="border-light" style="border-top: 1px solid rgba(255,255,255,0.2);">
                                    <h1 class="h3 text-white font-weight-bold mb-2">SISTEM INFORMASI</h1>
                                    <h1 class="h4 text-white-50 mb-4">PERPUSWEB</h1>
                                    <hr class="border-light" style="border-top: 1px solid rgba(255,255,255,0.2);">
                                    <p class="mt-4 text-white-50 small">Kelola perpustakaan Anda dengan lebih mudah, cepat, dan efisien.</p>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-6 bg-white">
                            <div class="p-5 d-flex flex-column justify-content-center" style="min-height: 500px;">
                                <div class="text-center mb-5">
                                    <h1 class="h3 text-gray-900 font-weight-bold mb-2">Selamat Datang 👋</h1>
                                    <p class="text-muted">Silakan masuk ke akun Anda</p>
                                </div>
                                <form class="user">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control form-control-user"
                                            id="user" name="user" aria-describedby="usernameHelp"
                                            placeholder="Username" autocomplete="off">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control form-control-user"
                                            id="pwd" name="pwd" placeholder="Password">
                                    </div>
                                    <a href="#" onclick="proses_login()" id="login"
                                        class="btn btn-primary btn-user btn-block mt-5 py-3 shadow-sm" style="border-radius: 15px; font-size: 1rem;">
                                        Login Sekarang
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/login.js"></script>
<?php if($this->session->flashdata('Pesan')): ?>
<?= $this->session->flashdata('Pesan'); ?>
<?php else: ?>
<script>
$(document).ready(function() {

    let timerInterval
    Swal.fire({
        title: 'Memuat...',
        timer: 1000,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
        onClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        $("#card").addClass("bounceIn");
    })
});
</script>
<?php endif; ?>