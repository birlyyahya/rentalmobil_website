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
    <?php foreach ($data as $dat) : ?>
        <!-- main content -->
        <div class="container px-0 py-5">
            <div class="d-flex justify-content-between">
                <div class="nav flex-column">
                    <h5>ID BOOKING #<?= $dat['id_booking'] ?>

                        <?php if ($dat['status_transaksi'] == 'unpaid') {
                        ?>
                            <span class="badge badge-secondary"><?= strtoupper($dat['status_transaksi']); ?></span>
                        <?php
                        } else if ($dat['status_transaksi'] == 'pending') {
                        ?>
                            <span class="badge badge-warning"><?= strtoupper($dat['status_transaksi']); ?></span>

                        <?php
                        } else if ($dat['status_transaksi'] == 'booked') {
                        ?>
                            <span class="badge badge-primary"><?= strtoupper($dat['status_transaksi']); ?></span>

                        <?php
                        } else if ($dat['status_transaksi'] == 'paid') {
                        ?>
                            <span class="badge badge-success"><?= strtoupper($dat['status_transaksi']); ?></span>
                        <?php
                        } else {
                        ?>

                            <span class="badge badge-danger"><?= strtoupper($dat['status_transaksi']); ?></span>
                        <?php
                        } ?>
                    </h5>
                    <a href="">Detail Booking</a>
                </div>
                <div class="date flex-column">
                    <small>Tanggal Dibuat</small>
                    <h5><?php echo preg_replace("/\s{1}\d{2}:\d{2}\:\d{2}/", '', $dat['tanggal_booking']);
                        ?></h5>
                    <h6 class="text-right"><?php $date = new \DateTime($dat['tanggal_booking']);
                                            echo $date->format("H:i:s");
                                            ?></h6>
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
                                <img src="<?= base_url('templates') ?>/assets/img/products/<?= $dat['gambar'] ?>" alt="" class="w-100">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="card-title"><?= ucwords($dat['nama_kendaraan']); ?> <sup><?= $dat['tahun'] ?></sup></h5>
                                            <span><?= ucwords($dat['nama_merek']); ?></span>
                                            <div class="row">
                                                <div class="col-12 pt-3">
                                                    <div class="d-flex justify-content-between">
                                                        <p><i class="fa fa-user mr-2"></i> <?= $dat['seats']; ?> Kursi</p>
                                                        <p><i class="fa fa-gas-pump mr-2"></i> 43L</p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <p><i class="fa fa-car mr-2"></i> <?= $dat['mesin']; ?></p>
                                                </div>
                                                <div class="col-12">
                                                    <p><i class="fa fa-gauge mr-2"></i> <?= $dat['kilometer']; ?>+</p>
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
                            <div class="section col-6">
                                <div class="section-title mt-0">Identitas</div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class=" flex-column  mt-4">
                                            <label for="">Nama</label>
                                            <p><b><?= $dat['nama_client'] ?></b></p>
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
                                            <p style="overflow-x:auto;"><b><?= $dat['email_client'] ?></b></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class=" flex-column  mt-4">
                                            <label for="">Nomor</label>
                                            <p><b><?= $dat['no_contact'] ?></b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class=" flex-column  mt-4">
                                            <label for="">Alamat</label>
                                            <p><b><?= $dat['alamat_client'] ?></b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="">Foto Identitas</label>
                                <img src="<?= base_url('templates') ?>/assets/img/identitas-client/<?= $dat['identitas_client'] ?>" alt="" class="w-100">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="section col-12">
                                <div class="section-title mt-0">Riwayat transaksi</div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Jenis Pembayaran</th>
                                            <th scope="col">Metode Pembayaran</th>
                                            <th scope="col">Status Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($data_pembayaran as $d) : ?>
                                            <tr>
                                                <th scope="row"><?= $no ?></th>
                                                <td><?= $d['jenis_pembayaran'] ?></td>
                                                <td><?= $d['metode_pembayaran'] ?></td>
                                                <?php if ($d['status_pembayaran'] == 'pending') {
                                                ?>
                                                    <td><span class="text-primary"><i class="fa fa-clock fa-xl"></i></span> Menunggu Persetujuan</td>
                                                <?php
                                                } else if ($d['status_pembayaran'] == 'diterima') {
                                                ?>
                                                    <td><span class="text-primary"><i class="fa fa-circle-check fa-xl"></i></span> Diterima</td>
                                                <?php
                                                } else if ($d['status_pembayaran'] == 'cancel') {
                                                ?>
                                                    <td><span class="text-danger"><i class="fa fa-money-bill-transfer fa-xl"></i></span> Refund</td>
                                                <?php
                                                } else {
                                                ?>
                                                    <td><span class="text-danger"><i class="fa fa-times fa-xl"></i></span> Ditolak</td>
                                                <?php
                                                } ?>
                                            </tr>
                                        <?php $no++;
                                        endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <section>
                                <button class="btn btn-secondary px-5 py-3" style="line-height: 20px;"><b>Batalkan</b><br></button>
                            </section>
                            <section>
                                <button class="btn btn-warning px-5 py-3" style="line-height: 20px;"><b>Edit</b></button>
                            </section>
                            <section>
                                <button class="btn btn-danger px-5" style="line-height: 20px;" id="upload-pembayaran"><b>Upload</b><br>Pembayaran</button>
                            </section>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card p-2 border">
                            <div class="card-header">
                                <h6>Invoice #<?= $dat['id_booking']; ?></h6>
                            </div>
                            <hr>
                            <div class="card-body">
                                <p class="text-right m-0 p-1"> <sub>
                                        Harga Per-hari
                                    </sub></p>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0">Harga Sewa</p>
                                    <h5 class="m-0">Rp <?= number_format($dat['harga'], 2, '.'); ?></h5>
                                </div>
                                <p class="text-right m-0 p-1">
                                    <sup><b>$<?= ($dollarharga) ?></b></sup>
                                </p>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0">Uang Muka</p>
                                    <h5 class="m-0">- Rp <?php 
                                                            if ($data_pembayaran == NULL) {
                                                                echo '0';
                                                            } else {
                                                                echo number_format($data_pembayaran[0]['dana'], 2, '.');
                                                            } ?></h5>
                                </div>
                                <p class="text-right m-0 p-1">
                                    <sup><b>$<?= $dollardana ?></b></sup>
                                </p>
                                <p>Promo</p>
                                <p class="text-muted fa-sm">Harga sudah termasuk bensin</p>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h6>Dibayar</h6>
                                    <h5>- Rp <?= number_format($totalharga[0]['dibayarkan'], 2, '.'); ?></h5>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h6>Total Harga</h6>
                                    <h5>Rp <?= number_format($dat['harga'] - $totalharga[0]['dibayarkan'], 2, '.'); ?></h5>
                                </div>
                                <p class="text-right">
                                    <sup><b>$<?= $dollartotal ?></b></sup>
                                </p>
                            </div>
                        </div>
                        <section class="pt-2 pb-5">
                            <div class="col-12 p-0">
                                <div class="py-3" style="border: 3px solid #FFD600; background-color:rgba(255,193,33,0.25);">
                                    <span class="text-dark"><i class="fa fa-circle-check fa-lg mx-3"></i><b>Jatuh tempo : </b> <?php echo date('Y-m-d', strtotime($dat['tanggal_booking'] . '+ 2 days')) ?></span>
                                </div>
                            </div>
                        </section>
                        <div class="card border" style="border-radius: 20px; background-color:#C1D8ED;">
                            <div class="card-header">
                                <h4>Bukti Pembayaran</h4>
                            </div>
                            <div class="card-body">
                                <div class="gallery gallery-fw" data-item-height="100">
                                    <?php
                                    if (count($data_pembayaran) <= 1) {
                                        foreach ($data_pembayaran as $data) {
                                    ?>
                                            <div class="gallery-item" data-image="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data['gambar_pembayaran']; ?>" data-title="Image 1" href="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data['gambar_pembayaran']; ?>" title="Image 1" style="height: 100px; background-image: url(<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data['gambar_pembayaran']; ?>);"></div>
                                        <?php
                                        }
                                    } else {
                                        $i = 0;
                                        while ($i < count($data_pembayaran)) {
                                        ?>
                                            <div class="gallery-item" data-image="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data_pembayaran[$i]['gambar_pembayaran']; ?>" data-title="Image 1" href="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data_pembayaran[$i]['gambar_pembayaran']; ?>" title="Image 1" style="height: 100px; background-image: url(<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data_pembayaran[$i]['gambar_pembayaran']; ?>);"></div>

                                            <?php if ($i = 1) {
                                            ?>
                                                <div class="gallery-item gallery-more" data-image="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data_pembayaran[$i]['gambar_pembayaran']; ?>" data-title="Image 3" href="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data_pembayaran[$i]['gambar_pembayaran']; ?>" title="Image 3" style="height: 100px; background-image: url(<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data_pembayaran[$i]['gambar_pembayaran']; ?>">
                                                    <div style="line-height: 100px;">+<?= count($data_pembayaran) ?></div>
                                                </div>
                                                <?php if ($i = 2 || $i > 2) {
                                                ?>
                                                    <div class="gallery-item gallery-hide" data-image="<?= base_url('templates/') ?>assets/img/news/img01.jpg" data-title="Image 4" href="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data_pembayaran[$i]['gambar_pembayaran']; ?>" title="Image 4" style="height: 100px; background-image: url(<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $data_pembayaran[$i]['gambar_pembayaran']; ?>"></div>
                                                <?php
                                                } else {
                                                    continue;
                                                } ?>

                                            <?php
                                            } else {
                                                continue;
                                            } ?>
                                    <?php
                                            $i++;
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="invoice3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="invoice m-0">
                <form id="form-pembayaran" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $dat['id_client'] ?>" name="id-client">
                    <input type="hidden" value="<?= $dat['id_transaksi'] ?>" name="id-transaksi">
                    <div class="invoice-print">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Metode Pembayaran</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control selectric" name="metode">
                                    <option value="BCA">BCA</option>
                                    <option value="BNI">BNI</option>
                                    <option value="DANA">DANA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Jenis Pembayaran</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control selectric" name="jenis">
                                    <option value="DP 50%">DP 50%</option>
                                    <option value="Lunas 100%">Lunas 100%</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-center col-12 col-md-12 col-lg-12">Upload Bukti Pembayaran</label>
                                <div class="col-sm-12 col-md-12">
                                    <div id="image-preview" class="image-preview m-auto">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="file" id="image-upload" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-md-right">
                        <div class="float-lg-right mb-lg-0 mb-3">
                            <button type="submit" class="btn btn-primary btn-icon icon-right"><i class="fas fa-credit-card"></i> Process Payment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>