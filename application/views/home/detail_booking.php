<div class="bg-white">
    <nav class="navbar navbar-expand-lg bg-transparent main-navbar p-0 shadow-sm" style="position: relative; left:0;">
        <div class="container px-0">
            <div class="container-fluid p-0">
                <a href="<?= base_url('home/') ?>" class="navbar-brand sidebar-gone-hide text-dark">Rental ANNAS</a>
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                <ul class="navbar-nav navbar-right">
                    <ul class="navbar-nav mr-5">
                        <li class="nav-item"><a href="<?= base_url('home/') ?>" class="nav-link  text-dark">FAQ</a></li>
                        <li class="nav-item"><a href="<?= base_url('home/') ?>" class="nav-link text-dark">About</a></li>
                    </ul>
                    <a href="<?= base_url('home/cari_booking') ?>" class="btn btn-danger">Kelola Booking</a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- main content -->
    <div class="container px-0 py-5">
        <div class="d-flex justify-content-between">
            <div class="nav flex-column">
                <h5>ID BOOKING X123SP12 <span class="badge badge-secondary">Belum Lunas</span> </h5>
                <a href="">Detail Booking</a>
            </div>
            <div class="date flex-column">
                <small>Tanggal Dibuat</small>
                <h5>15 November 2022</h5>
                <h6 class="text-right">15:49:21</h6>
            </div>
        </div>
        <section class="py-4">
            <div class="col-12 pl-0">
                <div class="p-2" style="border: 3px solid #C1D8ED; background-color: rgba(192,216,237, 0.25);">
                    <span class="text-dark"><i class="fa fa-circle-check fa-lg mx-3"></i>Pembatalan gratis hingga 48 Jam sebelum pengambilan</span>
                </div>
            </div>
        </section>
        <section>
            <div class="row mb-5">
                <div class="col-8">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?= base_url('templates') ?>/assets/img/products/audi.png" alt="" class="w-100">
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="card-title">Audi Jeep Q3 <sup>2019</sup></h5>
                                        <span>Audi AG</span>
                                        <div class="row">
                                            <div class="col-12 pt-3">
                                                <div class="d-flex justify-content-between">
                                                    <p><i class="fa fa-user mr-2"></i> 5 Kursi</p>
                                                    <p><i class="fa fa-suitcase mr-2"></i> 20L</p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p><i class="fa fa-car mr-2"></i> Automatic</p>
                                            </div>
                                            <div class="col-12">
                                                <p><i class="fa fa-gauge mr-2"></i> 50000+</p>
                                            </div>
                                        </div>
                                        <p class="card-text"><small class="text-muted"><i class="fa fa-location-pin mr-2"></i> Yogyakarta</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <h6>Identitas</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class=" flex-column  mt-4">
                                        <label for="">Nama</label>
                                        <p><b>Muhammad bIrly Yahya</b></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class=" flex-column  mt-4">
                                        <label for="">Jenis Kelamin</label>
                                        <p><b>Laki-laki</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class=" flex-column  mt-4">
                                        <label for="">Email</label>
                                        <p><b>birly@gmail.com</b></p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class=" flex-column  mt-4">
                                        <label for="">Nomo</label>
                                        <p><b>081917005215</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class=" flex-column  mt-4">
                                        <label for="">Alamat</label>
                                        <p><b>Muhammad bIrly Yahya</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="">Foto Identitas</label>
                            <img src="<?= base_url('templates') ?>/assets/img/example-image.jpg" alt="" class="w-100">
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <section >
                            <button class="btn btn-secondary px-5 py-3" style="line-height: 20px;"><b>Batalkan</b><br></button>
                        </section>
                        <section >
                            <button class="btn btn-warning px-5 py-3" style="line-height: 20px;"><b>Edit</b></button>
                        </section>
                        <section >
                            <button class="btn btn-danger px-5" style="line-height: 20px;"><b>Upload</b><br>Pembayaran</button>
                        </section>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card p-2 border">
                        <div class="card-header">
                            <h6>Invoice #1202910</h6>
                        </div>
                        <hr>
                        <div class="card-body">
                            <p class="text-right m-0 p-1"> <sub>
                                    Harga Per-hari
                                </sub></p>
                            <div class="d-flex justify-content-between">
                                <p class="m-0">Harga Sewa</p>
                                <h5 class="m-0">Rp 450.000</h5>
                            </div>
                            <p class="text-right m-0 p-1">
                                <sup><b>$12.89</b></sup>
                            </p>
                            <br>
                            <div class="d-flex justify-content-between">
                                <p class="m-0">Uang Muka</p>
                                <h5 class="m-0">Rp 200.000</h5>
                            </div>
                            <p class="text-right m-0 p-1">
                                <sup><b>$28.81</b></sup>
                            </p>
                            <p>Promo</p>
                            <p class="text-muted fa-sm">Harga sudah termasuk bensin</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <h6>Total Harga</h6>
                                <h5>Rp 250.000</h5>
                            </div>
                            <p class="text-right">
                                <sup><b>$16.12</b></sup>
                            </p>
                        </div>
                    </div>
                    <section class="pt-2 pb-5">
                        <div class="col-12 p-0">
                            <div class="py-3" style="border: 3px solid #FFD600; background-color:rgba(255,193,33,0.25);">
                                <span class="text-dark"><i class="fa fa-circle-check fa-lg mx-3"></i><b>Jatuh tempo : </b> 18-11-2022</span>
                            </div>
                        </div>
                    </section>
                    <div class="card border" style="border-radius: 20px; background-color:#C1D8ED;">
                        <div class="card-header">
                            <h4>Bukti Pembayaran</h4>
                        </div>
                        <div class="card-body">
                            <div class="gallery gallery-fw" data-item-height="100">
                                <div class="gallery-item" data-image="<?= base_url('templates/')?>assets/img/news/img09.jpg" data-title="Image 1" href="<?= base_url('templates/')?>assets/img/news/img09.jpg" title="Image 1" style="height: 100px; background-image: url(<?= base_url('templates/')?>assets/img/news/img09.jpg;);"></div>
                                <div class="gallery-item" data-image="<?= base_url('templates/')?>assets/img/news/img10.jpg" data-title="Image 2" href="<?= base_url('templates/')?>assets/img/news/img10.jpg" title="Image 2" style="height: 100px; background-image: url(<?= base_url('templates/')?>assets/img/news/img10.jpg;);"></div>
                                <div class="gallery-item gallery-more" data-image="<?= base_url('templates/')?>assets/img/news/img08.jpg" data-title="Image 3" href="<?= base_url('templates/')?>assets/img/news/img08.jpg" title="Image 3" style="height: 100px; background-image: url(<?= base_url('templates/')?>assets/img/news/img08.jpg);">
                                    <div style="line-height: 100px;">+2</div>
                                </div>
                                <div class="gallery-item gallery-hide" data-image="<?= base_url('templates/')?>assets/img/news/img01.jpg" data-title="Image 4" href="<?= base_url('templates/')?>assets/img/news/img01.jpg" title="Image 4" style="height: 100px; background-image: url(<?= base_url('templates/')?>assets/img/news/img01.jpg);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="invoice1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="invoice m-0">
                <div class="invoice-print">
                </div>
                <hr>
                <div class="text-md-right">
                    <div class="float-lg-left mb-lg-0 mb-3">
                        <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process Payment</button>
                        <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                    </div>
                    <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
                </div>
            </div>
        </div>
    </div>
</div>