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
        <h5>Form Pesanan</h5>
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
                    <form id="form-pemesanan" method="post" enctype="multipart/form-data">
                        <div class="row border py-5 px-3">
                            <div class="col-6">
                                <p><i class="fa fa-exclamation mr-2"></i> Isi form sesuai dengan Identitas anda</p>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="nama" class="form-control phone-number" id="nama">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <select class="selectric form-control" id="gender" name="gender">
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="email" name="email" class="form-control phone-number" id="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Whatsapp</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="nomorwa" class="form-control phone-number" id="nomorwa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-map-location"></i>
                                            </div>
                                        </div>
                                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 align-self-center">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-center col-12 col-md-12 col-lg-12">Identitas (SIM/KTP)</label>
                                    <div class="col-sm-12 col-md-12">
                                        <div id="image-preview" class="image-preview m-auto">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="file" id="image-upload" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="pt-5 pb-3">
                            <div class="col-12 p-0">
                                <div class="py-3" style="border: 3px solid #FFD600; background-color:rgba(255,193,33,0.25);">
                                    <span class="text-dark"><i class="fa fa-exclamation-circle fa-lg mx-3"></i><b>Penting : </b> Asuransi anda tidak termasuk</span>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <input type="hidden" name="idkendaraan" value="<?= $kendaraan[0]['id_kendaraan'] ?>">
                        <input type="hidden" name="tanggalambil" value="<?= $tanggal['tanggal_ambil'] ?>">
                        <input type="hidden" name="tanggalkembali" value="<?= $tanggal['tanggal_keluar'] ?>">
                        <input type="hidden" name="waktu" value="<?= $tanggal['waktu'] ?>">
                        <section class="text-right">
                            <button data-toggle="modal" class="btn btn-danger px-5" id="open-modal" style="line-height: 20px;"><b>Bayar</b><br>Sekarang</button>
                        </section>
                    </form>
                </div>
                <div class="col-4">
                    <div class="card position-relative" style="height: 15vw;">
                        <h6 class="card-title m-0"><?= ucwords($kendaraan[0]['nama_kendaraan']) ?> <sup><?= ucwords($kendaraan[0]['tahun']) ?> </sup></h6>
                        <span><?= ucwords($kendaraan[0]['nama_merek']) ?> </span>
                        <div class="card-image position-absolute" style="-webkit-transform: scaleX(-1);transform: scaleX(-1);">
                            <img src="<?= base_url('templates') ?>/assets/img/products/audi.png" alt="" class="w-75">
                        </div>
                    </div>
                    <div class="card p-2 border">
                        <div class="card-header pb-0" style="min-height: 40px;">
                            <h6>Rincian Harga</h6>
                        </div>
                        <hr>
                        <div class="card-body pt-0">
                            <p class="text-right m-0 p-1"> <sub>
                                    Harga Per-hari
                                </sub></p>
                            <div class="d-flex justify-content-between">
                                <p class="m-0">Harga Sewa</p>
                                <h5 class="m-0">Rp <?= number_format($kendaraan[0]['harga'], 2, ',', '.') ?></h5>
                            </div>
                            <p class="text-right m-0 p-1">
                                <sup><b>$<?= $dollar ?></b></sup>
                            </p>
                            <p>Promo</p>
                            <p class="text-muted fa-sm">Harga sudah termasuk bensin</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <h6>Total Harga</h6>
                                <h5>Rp <?= number_format($kendaraan[0]['harga'], 2, ',', '.') ?></h5>
                            </div>
                            <p class="text-right">
                                <sup><b>$<?= $dollar ?></b></sup>
                            </p>
                        </div>
                    </div>
                    <div class="card border" style="border-radius: 20px; background-color:#C1D8ED;">
                        <div class="card-header border-0 py-2 ml-3 text-dark" style="min-height: 40px;"><b>Gunakan Kode Promo</b></div>
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
<div class="modal fade" tabindex="-1" role="dialog" id="invoice1">
    <div class="modal-dialog" role="document" style="max-width: 700px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="invoice m-0">
                <form action="">

                </form>
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="<?= base_url() ?>templates/assets/img/drawkit/Checkmark.svg" alt="">
                        <h6 class="text-center text-dark"><b>PESANAN ANDA BERHASIL DIBUAT</b></h6>
                        <p class="text-center text-dark mb-0"><b>ID BOOKING</b></p>
                        <small class="text-center text-dark"><b><?= date('d M Y') ?></b></small>
                    </div>
                </div>
                <div class="invoice-print mt-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <p id="nama-modal"> <b>Muhammad Birly Yahya</b> </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Email</label>
                                <p id="email-modal"> <b>birlypecker123@gmail.com</b> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <p id="gender-modal"> <b>Laki-laki</b> </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <p id="nomorwa-modal"> <b>Jakarta</b> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6>Invoice #19282</h6>
                        </div>
                        <div class="col-6">
                                <select class="selectric form-control" id="gender" name="gender">
                                    <option value="laki-laki">Uang Muka 50%</option>
                                    <option value="perempuan">Lunas 100%</option>
                                </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="dropdown" style="display: grid;">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Easy Dropdown
                                </button>
                                <div class="dropdown-menu w-100" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-selected="false">BCA</a>
                                    <a class="dropdown-item" active show id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-selected="true">BNI</a>
                                    <a class="dropdown-item" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab">DANA</a>
                                </div>
                            </div>
                            <div class="col-12 p-0">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                        <p class="text-center mt-2"> <b>9696 0812329128</b> </p>
                                        1. Buka menu transaksi<br>
                                        2. klik transfer<br>
                                        3. Klik BCA transfer<br>
                                        4. Masukan Kode <b>9696 0812329128</b><br>
                                        5. Periksa kembali rincian pembayaran<br>
                                        6. Masukan pin untuk melakukan konfirmasi   <br>
                                    </div>
                                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                        Deserunt cupidatat anim ullamco ut dolor anim sint nulla amet incididunt tempor ad ut pariatur officia culpa laboris occaecat. Dolor in nisi aliquip in non magna amet nisi sed commodo proident anim deserunt nulla veniam occaecat reprehenderit esse ut eu culpa fugiat nostrud pariatur adipisicing incididunt consequat nisi non amet.
                                    </div>
                                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                        In quis non esse eiusmod sunt fugiat magna pariatur officia anim ex officia nostrud amet nisi pariatur eu est id ut exercitation ex ad reprehenderit dolore nostrud sit ut culpa consequat magna ad labore proident ad qui et tempor exercitation in aute veniam et velit dolore irure qui ex magna ex culpa enim anim ea mollit consequat ullamco exercitation in.
                                    </div>
                                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                        Lorem ipsum culpa in ad velit dolore anim labore incididunt do aliqua sit veniam commodo elit dolore do labore occaecat laborum sed quis proident fugiat sunt pariatur. Cupidatat ut fugiat anim ut dolore excepteur ut voluptate dolore excepteur mollit commodo.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div id="image-preview" class="image-preview" style="width:100%;">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="file" id="image-upload" />
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-md-right">
                    <div class="float-lg-left mb-lg-0 mb-3">
                        <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process Payment</button>
                        <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>