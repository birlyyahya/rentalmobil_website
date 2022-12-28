<div class="card">
    <div class="card-header justify-content-between">
        <h4>Setting Merek Kendaraan</h4>
        <a href="" class="btn btn-primary">Tambah merek</a>
    </div>
    <div class="card-body">
        <ul class="list-group">
            <?php foreach($merek as $m): ?>
            <li class="list-group-item d-flex justify-content-between">
                <b><?= ucwords($m['nama_merek']) ?></b>
                <div class="d-flex">
                    <button class="btn btn-danger btn-icon mx-2">
                        <i class="fas fa-times"></i>
                    </button>
                    <button class="btn btn-success btn-icon mx-2">
                        <i class="fas fa-pen"></i>
                    </button>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>