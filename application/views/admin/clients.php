<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>List Clients</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Nomor</th>
                            <th>Email</th>
                            <th>Tanggal Order</th>
                            <th>Tanggal Ambil - Drop</th>
                            <th>Kendaraan</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach($client as $c): ?>
                        <tr>
                            <td><?= $c['id_client'] ?></td>
                            <td><?= $c['nama_client'] ?></td>
                            <td><?= $c['no_contact'] ?></td>
                            <td><?= $c['email_client'] ?></td>
                            <td><?= $c['tanggal_booking'] ?></td>
                            <td><?php $data = date_create($c['tanggal_ambil']); echo date_format($data, 'Y-m-d') ?> - <?php $data = date_create($c['tanggal_ambil']); echo date_format($data, 'Y-m-d') ?></td>
                            <td>
                                Nissan
                            </td>
                            <td><a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
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
    </div>
</div>