<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Payment Gateway</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?= $this->session->userdata('message'); ?>
                    <table class="table table-md">
                        <tr>
                            <th>Invoice</th>
                            <th>Status</th>
                            <th>Jumlah Dana</th>
                            <th>Nama Client</th>
                            <th>Jenis Pembayaran</th>
                            <th>Bank</th>
                            <th>Tanggal Bayar</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($pembayaran as $p) : ?>
                            <form action="<?= base_url('admin/pembayaran'); ?>" method="post">
                                <input type="hidden" name="idPembayaran" value="<?= $p['id_pembayaran'] ?>">
                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    $
                                                </div>
                                            </div>
                                            <input type="text" name="invoice" class="form-control currency" placeholder="<?= $p['id_booking'] ?>" value="<?= $p['id_booking'] ?>">
                                            <input type="hidden" name="jenis" class="form-control currency" value="<?= $p['jenis_pembayaran'] ?>">
                                            <input type="hidden" name="nowa" class="form-control currency" placeholder="" value="<?= $p['no_contact'] ?>">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" name="status" style="width: 105px;">
                                                <option value="paid">Paid</option>
                                                <option value="unvalid">Invalid</option>
                                                <option value="cancel">Cancel</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    $
                                                </div>
                                            </div>
                                            <input type="text" name="jumlah" class="form-control currency" placeholder="Jumlah">
                                        </div>
                                    </td>
                                    <td><?= $p['nama_client'] ?></td>
                                    <td><?= $p['jenis_pembayaran'] ?></td>
                                    <td><?= $p['metode_pembayaran'] ?></td>
                                    <td><?= $p['tanggal_bayar'] ?></td>
                                    <td>
                                        <div class="gallery">
                                            <div class="gallery-item" data-image="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $p['gambar_pembayaran'] ?>" data-title="Image 1" href="<?= base_url('templates/') ?>assets/img/data-pembayaran/<?= $p['gambar_pembayaran'] ?>" title="Image 1" style="background-image: url(&quot;assets/img/news/img01.jpg&quot;);"></div>
                                        </div>
                                    </td>
                                    <td><button type="submit" class="btn btn-primary"><i class="fa fa-check"></i></button></td>
                                </tr>
                            </form>
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
    </div>
</div>