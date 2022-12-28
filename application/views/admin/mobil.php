<section class="section">
    <div class="section-header">
        <h1>Kendaraan</h1>
        <div class="section-header-button">
            <a href="<?= base_url('admin/tambah') ?>" class="btn btn-primary">Tambah Kendaraan</a>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Posts</a></div>
            <div class="breadcrumb-item">All Posts</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">List Kendraan</h2>
        <p class="section-lead">
            You can manage all posts, such as editing, deleting and more.
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url('admin/kendaraan') ?>">All <span class="badge badge-white">5</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="cursor: pointer;" onclick="filter_ready(this)" id="ready">Ready <span class="badge badge-primary">1</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="cursor: pointer;" onclick="filter(this)" id="booked">Booked <span class="badge badge-primary">1</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="cursor: pointer;" onclick="filter(this)" id="away">Away <span class="badge badge-primary">0</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>All Posts</h4>
                        <?= $this->session->flashdata('response'); ?>
                    </div>
                    <div class="card-body">
                        <div class="float-left">
                            <select class="form-control selectric">
                                <option>Action For Selected</option>
                                <option>Move to Draft</option>
                                <option>Move to Pending</option>
                                <option>Delete Pemanently</option>
                            </select>
                        </div>
                        <div class="float-right">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="clearfix mb-3"></div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th class="text-center pt-2">
                                        <div class="custom-checkbox custom-checkbox-table custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Nama Kendaraan</th>
                                    <th>Merek</th>
                                    <th>Seats</th>
                                    <th>Kilometer</th>
                                    <th>Tahun</th>
                                    <th>harga</th>
                                    <th>Status</th>
                                </tr>
                                <tbody class="table table-stripped" id="list_items">
                                    <?php foreach ($kendaraan as $mobil) : ?>
                                        <tr class="p-2">
                                            <td>
                                                <div class="custom-checkbox custom-control" id="label">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                                    <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td class="text-capitalize" id="nama"><?= ucwords($mobil['nama_kendaraan']) ?>
                                                <div class="table-links">
                                                    <a href="#">View</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="#" class="text-danger">Trash</a>
                                                </div>
                                            </td>
                                            <td class="text-capitalize" id="merek">
                                                <a href="<?= base_url('admin/merek') ?>"><?= ucwords($mobil['nama_merek']) ?></a>
                                            </td>
                                            <td id="seat">
                                                <?= ucwords($mobil['seats']) ?> Seats
                                            </td>
                                            <td id="kilometer"><?= ucwords($mobil['kilometer']) ?></td>
                                            <td id="tahun">
                                                <?= ucwords($mobil['tahun']) ?>
                                            </td>
                                            <td id="harga">
                                                <div class="alert alert-warning text-capitalize m-0">Rp <?= number_format($mobil['harga'], 2, '.') ?></div>
                                            </td>
                                            <td id="status">
                                                <?php if (!empty($mobil['status_kendaraan'])) { ?>
                                                    <div class="badge badge-success text-capitalize m-0"><?= ucwords($mobil['status_kendaraan']) ?></div>
                                                <?php } else { ?>
                                                    <div class="badge badge-primary m-0">Ready</div>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="float-right">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>