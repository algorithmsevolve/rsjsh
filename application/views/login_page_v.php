<!DOCTYPE html>
<html lang="en" class="grey darken-3">

<head>
    <title>RSJHS - Dashboard Laporan Infrastruktur</title>
    <?php $this->load->view('partials/css.php') ?>
</head>

<body>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 white-text center">
                    <h4>Login <?php echo ucfirst($divisi); ?></h4>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col s12">
                    <div class="col s6 offset-s3 white z-depth-4 login-style" style="padding:40px;">
                        <form action="<?php echo base_url('login/login_user?divisi=' . $divisi); ?>" method="POST" class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="divisi" value="pegawai" hidden>
                                    <input id="username" type="number" class="validate" name="username">
                                    <label for="username">NIP (Nomor Induk Pegawai)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate" name="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <?php 
                            $masuk = $this->input->get('masuk');
                            if ($masuk !=NULL) : ?>
                                <h6 class="red-text">Salah tjuy, yang bener lah!!!!!!!!!!!!!!!!</h6> <br>
                            <?php endif; ?>
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>

                            <div class="row">
                                <div class="col s12">
                                    <p>Belum memiliki akun? <a href="<?php echo base_url('login/register?divisi='.$divisi); ?>"> Daftar Sekarang.</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('partials/js.php') ?>
</body>

</html>