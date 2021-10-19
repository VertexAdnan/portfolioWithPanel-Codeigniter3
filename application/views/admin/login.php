<div class="section-authentication-login d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="col-12 col-lg-10 mx-auto">
            <div class="card radius-15">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <form method="post" action="<?= base_url('girisyap') ?>">
                            <div class="card-body p-md-5">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/admin/') ?>assets/images/logo-icon.png" width="80" alt="">
                                </div>
                                <div class="form-group mt-4">
                                    <label>Kullanıcı Adı</label>
                                    <input type="text" class="form-control" name="username" placeholder="Kullanıcı Adı" />
                                </div>
                                <div class="form-group">
                                    <label>Şifre</label>
                                    <input type="password" class="form-control" name="password" placeholder="Şifre" />
                                </div>
                                <div class="btn-group mt-3 w-100">
                                    <button type="submit" name="login" class="btn btn-light btn-block">Giriş</button>
                                    <button type="submit" name="login" class="btn btn-light"><i class="lni lni-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?= base_url('assets/admin/') ?>assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</div>