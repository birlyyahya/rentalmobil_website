    <div class="bg-white">
        <nav class="navbar navbar-expand-lg bg-transparent main-navbar p-0 shadow-sm" style="position: relative; left:0;">
            <div class="container px-0">
                <div class="container-fluid p-0">
                    <a href="index.html" class="navbar-brand sidebar-gone-hide text-dark">Rental ANNAS</a>
                    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                    <ul class="navbar-nav navbar-right">
                        <ul class="navbar-nav mr-5">
                            <li class="nav-item"><a href="#" class="nav-link  text-dark">FAQ</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-dark">About</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-dark">Server Status</a></li>
                        </ul>
                        <button class="btn btn-danger">Kelola Booking</button>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- main content -->
        <div class="container pt-5 pb-5">
            <div class="row border p-3 mb-5">
                <div class="col-5">
                    <div class="card bg-transparent mb-0">
                        <div class="card-header">
                            <h6 class="text-dark">
                                Yogyakarta
                            </h6>
                        </div>
                        <div class="card-body mt-0 pt-0">
                            20 November 2022 > 21 November 2022
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <hr class="my-3" style="border-left:3px solid; width: 2px; height:60%;">
                </div>
                <div class="col-5">
                    <div class="card mb-0 text-right">
                        <div class="card-header justify-content-end">
                            <p>
                                20 November 2022 > 21 November 2022
                            </p>
                        </div>
                        <div class="card-body mt-0 pt-0">
                            <h6 class="text-dark">8 Mobil Tersedia</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3 pl-0">
                    <div class="card p-2 border">
                        <div class="card-header">
                            <h6>Filter</h6>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="d-block">Spesifikasi Kendaraan</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        AC
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        5+ Seats
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="d-block">Mesin Kendaraan</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Manual</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Otomatis</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?= base_url('templates') ?>/assets/img/news/jdm.png" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-9">
                    <div class="d-flex flex-column">
                        <div class="form-group">
                            <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Sortir Dengan</label>
                            <div class="selectgroup w-100 col-sm-12 col-md-9">
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                    <span class="selectgroup-button">Direkomendasikan</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="100" class="selectgroup-input">
                                    <span class="selectgroup-button">Harga Termurah</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="100" class="selectgroup-input">
                                    <span class="selectgroup-button">Harga Termahal</span>
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="row" style="height: 850px; overflow-y:auto;">
                            <?php foreach ($data as $d) : ?>
                                <div class="col-12">
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="<?= base_url('templates') ?>/assets/img/products/audi.png" alt="" class="w-100">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h5 class="card-title"><?= ucwords($d['nama_kendaraan']) ?><sup>2019</sup></h5>
                                                            <span><?= ucwords($d['nama_merek']) ?></span>
                                                            <div class="row mt-2">
                                                                <div class="col-12">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p><i class="fa fa-user mr-2"></i> <?= ucwords($d['seats']) ?> Kursi</p>
                                                                        <p><i class="fa fa-suitcase mr-2"></i> 20L</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <p><i class="fa fa-car mr-2"></i> <?= ucwords($d['mesin']) ?></p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <p><i class="fa fa-gauge mr-2"></i> <?= ucwords($d['kilometer']) ?> ++</p>
                                                                </div>
                                                            </div>
                                                            <p class="card-text"><small class="text-muted"><i class="fa fa-location-pin mr-2"></i> Yogyakarta</small></p>
                                                        </div>
                                                        <div class="col-5 text-right align-self-end">
                                                            <p> <b>Harga Per-hari</b></p>
                                                            <h5>Rp <?= number_format($d['harga'],2,'.') ?></h5>
                                                            <a  href="<?= base_url('home/detail_kendaraan?id=').$d['id_kendaraan'].'&tanggalambil='.$tanggal['tanggal_ambil'].'&tanggalkembali='.$tanggal['tanggal_keluar'].'&waktu='.$tanggal['waktu'] ?>" class="btn btn-danger">Booking</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>