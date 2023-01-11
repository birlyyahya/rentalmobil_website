<div class="hero text-white hero-bg-image hero-bg-parallax pt-4" data-background="<?= base_url('templates') ?>/assets/img/unsplash/hero_booking.png">
    <nav class="navbar navbar-expand-lg bg-transparent main-navbar p-0" style="position: relative; left:0;">
        <div class="container-fluid p-0">
            <a  href="<?= base_url('home') ?>" class="navbar-brand sidebar-gone-hide">Rental ANNAS</a>
            <a  href="<?= base_url('home') ?>" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
            <ul class="navbar-nav navbar-right">
                <ul class="navbar-nav mr-5">
                    <li class="nav-item active"><a href="<?= base_url('home/') ?>" class="nav-link">FAQ</a></li>
                    <li class="nav-item"><a href="<?= base_url('home/') ?>" class="nav-link">About</a></li>
                </ul>
                <a href="<?= base_url('home/cari_booking') ?>" class="btn btn-danger">Kelola Booking</a>
            </ul>
        </div>
    </nav>
    <div class="hero-inner text-md-left text-sm-center mt-5 p-5 w-50 align-self-end">
        <form class="border border-secondary p-5" action="<?= base_url('home/findbooking') ?>" method="POST">
            <div class="card-header">
                <h4>Kelola Pesanan</h4>
                <p class="lead">Kelola pesanan anda dengan mencari ID pesanan anda</p>
                <br>
                <?php if (!empty($this->session->flashdata('response'))) {
                    echo $this->session->flashdata('response');
                } ?>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="text-light">Email</label>
                    <input type="text" class="form-control" required name="email">
                </div>
                <div class="form-group">
                    <label class="text-light">ID Booking</label>
                    <input type="text" class="form-control" required name="idbooking">
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-secondary btn-lg btn-block text-dark fw-bold">Cari Pesanan</button>
            </div>
        </form>
    </div>
</div>