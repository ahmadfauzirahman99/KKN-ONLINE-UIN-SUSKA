<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="text-center">
                <a href="<?= $this->url->get('module/admin/login') ?>">
                        <span><img src="<?= $this->url->get('img/uinsuska.png') ?>" alt=""
                                   height="150"></span>
                </a>
                <p class=" mt-2 mb-4"><b>LPPM Lembaga Penelitian dan Pengabdian</b></p>
            </div>
            <div class="card">

                <div class="card-body p-4">

                    <div class="text-center mb-4">
                        <h4 class="text-uppercase mt-0"><b>Hi!</b> Silahkan Masuk</h4>
                    </div>

                    <form action="<?= $this->url->get('proses/login') ?>" method="post">

                        <div class="form-group mb-3">
                            <label for="emailaddress">Kode Akun / Nik / Nim / Email</label>
                            <input class="form-control" type="text" id="emailaddress" name="masuk[]" required=""
                                   placeholder="Masukan Kode Akun / Nik / Nim">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" required="" name="masuk[]" id="password"
                                   placeholder="Masukan password">
                        </div>

                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                            </div>
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"> Log In</button>
                        </div>

                    </form>

                </div> <!-- end card-body -->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div>
