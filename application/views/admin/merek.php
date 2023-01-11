<div class="card">
    <div class="card-header justify-content-between">
        <h4>Setting Merek Kendaraan</h4>
        <a href="<?= base_url('admin/tambahmerek') ?>" class="btn btn-primary">Tambah merek</a>
    </div>
    <div class="card-body">
        <?php if (!empty($this->session->userdata('message'))) {
            echo $this->session->userdata('message');;
        } ?>
        <ul class="list-group">
            <?php foreach ($merek as $m) : ?>
                <li class="list-group-item d-flex justify-content-between">
                    <b><?= ucwords($m['nama_merek']) ?></b>
                    <div class="d-flex">
                        <a onclick="return confirm('Are you sure you want to delete?');" href="<?= base_url('admin/action_hapusmerek/') . $m['id_merek'] ?>" class="btn btn-danger btn-icon mx-2">
                            <i class="fas fa-times"></i>
                        </a>
                        <a href="<?= base_url('admin/action_editmerek/') . $m['id_merek'] ?>" class="btn btn-success btn-icon mx-2">
                            <i class="fas fa-pen"></i>
                        </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>