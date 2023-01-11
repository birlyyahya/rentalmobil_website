    <div class="card">
        <div class="card-header">
            <h4>Billings</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>Invoice</th>
                        <th>Name</th>
                        <th>Tanggal</th>
                        <th>Kendaraan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($transaksi as $t) : ?>
                        <tr>
                            <td>#<?= $t['id_booking'] ?></td>
                            <td><?= $t['nama_client'] ?></td>
                            <td><?= $t['tanggal_booking'] ?></td>
                            <td><?= $t['nama_kendaraan'] ?></td>
                            <td>
                                <?php if ($t['status_transaksi'] == 'pending') {
                                ?>
                                    <div class="badge badge-warning"><?= ucwords($t['status_transaksi']) ?></div>
                                <?php
                                } else if ($t['status_transaksi'] == 'unpaid') {
                                ?>
                                    <div class="badge badge-danger"><?= ucwords($t['status_transaksi']) ?></div>
                                <?php
                                } else if ($t['status_transaksi'] ==  'paid') {
                                ?>
                                    <div class="badge badge-success"><?= ucwords($t['status_transaksi']) ?></div>
                                <?php
                                } else if ($t['status_transaksi'] ==  'booked') {
                                ?>
                                    <div class="badge badge-info"><?= ucwords($t['status_transaksi']) ?></div>
                                <?php
                                } else {
                                ?>
                                    <div class="badge badge-secondary"><?= ucwords($t['status_transaksi']) ?></div>
                                <?php
                                } ?>
                            </td>
                            <td><a data-toggle="modal" onclick="detailTransaksi('<?= $t['id_booking'] ?>','<?= $t['id_transaksi'] ?>')" class="btn btn-secondary">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <?php
    $no = 0;
    foreach ($transaksi as $d) : ?>
        <div class="modal fade" tabindex="-1" role="dialog" id="invoice<?= $d['id_booking'] ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="invoice m-0">
                        <div class="invoice-print">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="invoice-title">
                                        <h2>Invoice</h2>
                                        <div class="invoice-number">Order #<?= $d['id_booking'] ?></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <address>
                                                <strong>Billed To:</strong><br>
                                                <?= $d['nama_client'] ?><br>
                                                <?= $d['no_contact'] ?><br>
                                                <?= $d['alamat_client'] ?><br>
                                                Indonesia
                                            </address>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" id="payment">
                                            <address>
                                                <strong>Payment History:</strong><br>
                                                -<br>
                                                -
                                            </address>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                            <address>
                                                <strong>Order Date:</strong><br>
                                                <?= $d['tanggal_booking'] ?><br><br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="section-title">Order Summary</div>
                                    <p class="section-lead">All items here cannot be deleted.</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-md">
                                            <tr>
                                                <th data-width="40">#</th>
                                                <th>Item</th>
                                                <th class="text-center">Merek</th>
                                                <th class="text-right">Totals</th>
                                            </tr>
                                            <tr>
                                                <td><?= $d['id_booking'] ?></td>
                                                <td><?= $d['nama_kendaraan'] ?></td>
                                                <td class="text-center"><?= $d['nama_merek'] ?></td>
                                                <td class="text-right"><?= number_format($d['harga'], 2, '.') ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12 d-flex">
                                            <div class="invoice-detail-item">
                                                <div class="invoice-detail-name">Dibayar</div>
                                                <div class="invoice-detail-value"><?= number_format($dana[$no][0]['dibayarkan'], 2, '.') ?></div>
                                            </div>
                                            <div class="invoice-detail-item ml-4">
                                                <div class="invoice-detail-name">Diskon</div>
                                                <div class="invoice-detail-value">-</div>
                                            </div>
                                            <hr class="mt-2 mb-2 mr-5">
                                            <div class="invoice-detail-item text-right">
                                                <div class="invoice-detail-name">Total</div>
                                                <div class="invoice-detail-value invoice-detail-value-lg"><?= number_format($d['harga']-$dana[$no][0]['dibayarkan'], 2, '.') ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php if ($d['status_transaksi'] == 'paid') {
                        ?>
                            <div class="text-md-right">
                                <div class="float-lg-left mb-lg-0 mb-3">
                                    <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Make this payment unpaid</button>
                                </div>
                                <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Cancel</button>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="text-md-right">
                                <div class="float-lg-left mb-lg-0 mb-3">
                                    <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Paid</button>
                                    <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                                </div>
                                <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i>Pending</button>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php $no++;
    endforeach; ?>