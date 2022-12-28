<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= SITE_NAME . ' : Admin -  ' . ucwords($this->uri->segment(2)) ?></title>

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
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/izitoast/dist/css/iziToast.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>templates/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>templates/assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Template update is available now!
                                        <div class="time text-primary">2 Min Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-success text-white">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-danger text-white">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Low disk space. Let's clean it!
                                        <div class="time">17 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Welcome to Stisla template!
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= ucwords($this->session->userdata('user')); ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('admin/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Dashboard</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <?php include 'sidebar.php'; ?>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <?= $contents ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
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
    <script src="<?= base_url() ?>templates/node_modules/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/izitoast/dist/js/iziToast.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>templates/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>templates/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url('templates/assets/js/page/') . $javascript ?>"></script>

    <script>
        function filter(obj) {
            var id = obj.id;
            $('#label,#nama,#merek,#seat,#kilometer,#tahun,#harga,#status').text('');
            $.ajax({
                url: '<?= base_url('admin/getKendaraanFilter') ?>',
                method: 'POST',
                data: {
                    filter: id
                },
                success: function(result) {
                    $('#list_items').html(result);
                    console.log(result);
                    window.history.pushState("Data", "Title", "<?php echo base_url(); ?>admin/kendaraan/mobil?="+id);
                }
            });
        }

        function filter_ready(obj) {
            var id = obj.id;
            $('#label,#nama,#merek,#seat,#kilometer,#tahun,#harga,#status').text('');
            $.ajax({
                url: '<?= base_url('admin/getAllKendaraanReady') ?>',
                method: 'POST',
                data: {
                    filter: id
                },
                success: function(result) {
                    $('#list_items').html(result);
                    window.history.pushState("Details", "Title", "<?php echo base_url(); ?>admin/kendaraan/mobil?="+id);
                }
            });
        }
    </script>
</body>

</html>