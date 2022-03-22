<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>SST | JMC Indonesia</title>
        <!-- General CSS Files -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/components.css">
    </head>
    <body>
        <div id="app">
            <section class="section">
                <div class="d-flex flex-wrap align-items-stretch">
                    <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                        <div class="p-4 m-3">
                            <img src="assets/images/logo_jmc.png" alt="logo" height="40" class="mb-2 mt-2">
                            <h4 class="text-dark font-weight-bold">System & Software Testing</h4>
                            <p class="text-muted">JMC Indonesia</p>
                            <?php if(isset($_SESSION["error"]) && $_SESSION["error"] == '1'):?>
                            <div class="alert alert-danger">
                                Maaf username atau password salah!
                            </div>
                            <?php endif;?>
                            <form method="POST" action="auth.php">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your username
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark btn-lg btn-icon icon-right" tabindex="4">
                                    Login
                                    </button>
                                </div>
                                <!--<div class="mt-5 text-center">
                                    Belum memilik akun? <a href="register.php">Daftar Sekarang</a>
                                </div>-->
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="assets/images/login/jmc.jpg">
                        <!--<div class="absolute-bottom-left index-2">
                            <div class="text-dark p-5 pb-2">
                                <div class="mb-5 pb-3">
                                    <h1 class="mb-2 display-4 font-weight-bold">Selamat Datang</h1>
                                    <h5 class="font-weight-normal text-muted-transparent">
                                        <p>Jl. Prapanca, Tegal Senggotan, Tirtonirmolo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55181</p>
                                        <p>Website : https://jmc.co.id</p>
                                    </h5>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
        </div>
        <!-- General JS Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="assets/js/stisla.js"></script>
        <!-- JS Libraies -->
        <!-- Template JS File -->
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/custom.js"></script>
        <!-- Page Specific JS File -->
    </body>
</html>