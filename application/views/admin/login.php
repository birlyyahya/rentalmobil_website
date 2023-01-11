<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= SITE_NAME . ' - ' . $this->uri->segment(1) ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/chocolat/dist/css/chocolat.css">
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/selectric/public/selectric.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>templates/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>templates/assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <!-- Main Content -->
            <section class="section">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                            <div class="login-brand">
                                <img src="<?= base_url('templates') ?>/assets/img/unsplash/Rental_ANNAS.png" alt="logo" width="100" class="shadow-light rounded-circle">
                            </div>

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Login</h4>
                                </div>
                                <?php if (!empty(validation_errors())) { ?>
                                    <div class="error px-4 py-0">
                                        <div class="alert alert-danger alert-dismissible show fade m-0">
                                            <div class="alert-body">
                                                <button class="close" data-dismiss="alert">
                                                    <span>&times;</span>
                                                </button>
                                                <?php echo validation_errors(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else if (!empty($this->session->flashdata('gagal'))) { ?>
                                    <div class="error px-4 py-0">
                                        <div class="alert alert-danger alert-dismissible show fade m-0">
                                            <div class="alert-body">
                                                <button class="close" data-dismiss="alert">
                                                    <span>&times;</span>
                                                </button>
                                                <?php echo $this->session->flashdata('gagal'); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="card-body">
                                    <?= form_open('admin/login') ?>
                                    <div class="form-group">
                                        <label for="username">username</label>
                                        <input id="username" type="name" class="form-control" name="username" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your Username
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password1" type="password" class="form-control" name="password" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="simple-footer">
                                Copyright &copy; Stisla 2018
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>templates/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url() ?>templates/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>templates/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/selectric/public/jquery.selectric.min.js"></script>


    <!-- Template JS File -->
    <script src="<?= base_url() ?>templates/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>templates/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url('templates/assets/js/page/') . $javascript ?>"></script>
</body>

</html>