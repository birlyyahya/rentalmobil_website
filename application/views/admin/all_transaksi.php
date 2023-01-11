<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>All Transaksi</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?= $this->session->userdata('message'); ?>
                    <table class="table table-md">
                        <tr>
                            <th>#</th>
                            <th>Invoice</th>
                            <th>Status</th>
                            <th>Nama Client</th>
                            <th>Jenis Pembayaran</th>
                            <th>Metode Pembayaran</th>
                            <th>Tanggal Bayar</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($pembayaran as $p) : ?>
                            <form action="<?= base_url('admin/pembayaran'); ?>" method="post">
                                <input type="hidden" name="idPembayaran" value="<?= $p['id_pembayaran'] ?>">
                                <input type="hidden" name="jenis" class="form-control currency" value="<?= $p['jenis_pembayaran'] ?>">
                                <input type="hidden" name="invoice" class="form-control currency" placeholder="<?= $p['id_booking'] ?>" value="<?= $p['id_booking'] ?>">
                                <input type="hidden" name="jumlah" class="form-control currency" placeholder="Jumlah" value="0">
                                <input type="hidden" name="status" class="form-control currency" placeholder="" value="pending">
                                <input type="hidden" name="nowa" class="form-control currency" placeholder="" value="<?= $p['no_contact'] ?>">
                                <tr>
                                    <td><?= $no ?></td>
                                    <td>
                                        #<?= $p['id_booking'] ?>
                                    </td>
                                    <?php
                                    if ($p['status_pembayaran'] == "diterima") {
                                    ?>
                                        <td class="badge badge-success">
                                            <?= ucwords($p['status_pembayaran']) ?>

                                        </td>
                                    <?php
                                    } else {
                                    ?>
                                    <td class="badge badge-danger">
                                            <?= ucwords($p['status_pembayaran']) ?>

                                        </td>
                                    <?php

                                    }
                                    ?>
                                    <td><?= $p['nama_client'] ?></td>
                                    <td><?= $p['jenis_pembayaran'] ?></td>
                                    <td><?= $p['metode_pembayaran'] ?></td>
                                    <td><?= $p['tanggal_bayar'] ?></td>
                                    <td>
                                        <div class="gallery">
                                            <div class="gallery-item" data-image="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $p['gambar_pembayaran'] ?>" data-title="Image 1" href="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $p['gambar_pembayaran'] ?>" title="Image 1" style="background-image: url(&quot;assets/img/news/img01.jpg&quot;);"></div>
                                        </div>
                                    </td>
                                    <td><button type="submit" class="btn btn-danger"><i class="fa fa-minus"></i></button></td>
                                </tr>
                            </form>
                        <?php $no++;
                        endforeach; ?>
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
    </div>
</div>