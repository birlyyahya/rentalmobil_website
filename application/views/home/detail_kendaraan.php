<div class="bg-white">
    <nav class="navbar navbar-expand-lg bg-transparent main-navbar p-0 shadow-sm" style="position: relative; left:0;">
        <div class="container px-0">
            <div class="container-fluid p-0">
                <a href="<?= base_url('home/cari_booking') ?>" class="navbar-brand sidebar-gone-hide text-dark">Rental ANNAS</a>
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
        <h5>Detail Kendaraan</h5>
        <a href="">Kembali</a>
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
                                        <h5 class="card-title"><?= ucwords($kendaraan[0]['nama_kendaraan']) ?><sup><?= $kendaraan[0]['tahun'] ?></sup></h5>
                                        <span><?= ucwords($kendaraan[0]['nama_merek']) ?></span>
                                        <div class="row">
                                            <div class="col-12 pt-3">
                                                <div class="d-flex justify-content-between">
                                                    <p><i class="fa fa-user mr-2"></i> <?= ucwords($kendaraan[0]['seats']) ?> Kursi</p>
                                                    <p><i class="fa fa-suitcase mr-2"></i> 20L</p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p><i class="fa fa-car mr-2"></i> <?= ucwords($kendaraan[0]['mesin']) ?></p>
                                            </div>
                                            <div class="col-12">
                                                <p><i class="fa fa-gauge mr-2"></i> <?= ucwords($kendaraan[0]['kilometer']) ?>+</p>
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
                            <h6>Spesifikasi Kendaraan</h6>
                            <div class="d-flex justify-content-between mt-4">
                                <p><i class="fa fa-check mr-2 text-danger"></i>AC</p>
                                <p><i class="fa fa-check mr-2 text-danger"></i>Bagasi ++</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p><i class="fa fa-check mr-2 text-danger"></i>Spion</p>
                                <p><i class="fa fa-check mr-2 text-danger"></i>TV Digital</p>
                            </div>
                            <hr>
                            <h6>Termasuk Dalam Harga</h6>
                            <div class="row mt-4">
                                <p class="col-12"><i class="fa fa-check mr-2 text-danger"></i>Supir</p>
                                <p class="col-12"><i class="fa fa-check mr-2 text-danger"></i>Bensin</p>
                                <p class="col-12"><i class="fa fa-check mr-2 text-danger"></i>Asuransi Mobil</p>
                                <p class="col-12"><i class="fa fa-check mr-2 text-danger"></i>Pembatalan Gratis hingga 48 jam</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="<?= base_url('templates') ?>/assets/img/drawkit/Approve-request.svg" alt="" class="w-100">
                        </div>
                    </div>
                    <section class="pt-5 pb-3">
                        <div class="col-12 p-0">
                            <div class="py-3" style="border: 3px solid #FFD600; background-color:rgba(255,193,33,0.25);">
                                <span class="text-dark"><i class="fa fa-circle-check fa-lg mx-3"></i><b>Penting : </b> Asuransi anda tidak termasuk</span>
                            </div>
                        </div>
                    </section>
                    <hr>
                    <section class="text-right">
                        <a  href="<?= base_url('home/pesanmobil?id=').$kendaraan[0]['id_kendaraan'].'&tanggalambil='.$tanggal['tanggal_ambil'].'&tanggalkembali='.$tanggal['tanggal_keluar'].'&waktu='.$tanggal['waktu'] ?>" class="btn btn-danger px-5" style="line-height: 20px;"><b>Booking</b><br>Sekarang</a>
                    </section>
                </div>
                <div class="col-4">
                    <div class="card p-2 border">
                        <div class="card-header">
                            <h6>Rincian Harga</h6>
                        </div>
                        <hr>
                        <div class="card-body">
                            <p class="text-right m-0 p-1"> <sub>
                                    Harga Per-hari
                                </sub></p>
                            <div class="d-flex justify-content-between">
                                <p class="m-0">Harga Sewa</p>
                                <h5 class="m-0">Rp <?= number_format($kendaraan[0]['harga'],2,',','.') ?></h5>
                            </div>
                            <p class="text-right m-0 p-1">
                                <sup><b>$<?= $dollar?>    </b></sup>
                            </p>
                            <p>Promo</p>
                            <p class="text-muted fa-sm">Harga sudah termasuk bensin</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <h6>Total Harga</h6>
                                <h5>Rp <?= number_format($kendaraan[0]['harga'],2,',','.')?></h5>
                            </div>
                            <p class="text-right">
                                <sup><b>$<?= $dollar?></b></sup>
                            </p>
                        </div>
                    </div>
                    <div class="card border" style="border-radius: 20px; background-color:#C1D8ED;">
                        <div class="card-header border-0 pb-0 ml-3">Gunakan Kode Promo</div>
                        <div class="card-body pt-0">
                            <form action="">
                                <div class="d-flex">
                                    <input type="text" class="form-control" style="border-radius: 20px;" placeholder="Masukan kode promo">
                                    <button class="btn btn-danger ml-2">Terapkan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="<?= base_url('templates') ?>/assets/img/news/mitsu.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</div>