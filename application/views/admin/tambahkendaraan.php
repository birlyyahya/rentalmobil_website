<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Kendaraan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="<?= base_url('admin/kendaraan') ?>">Kendaraan</a></div>
            <div class="breadcrumb-item">Tambah Kendaraan</div>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/addKendaraan') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kendaraan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="namakendaraan">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Merek</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="merek">
                                        <?php foreach($merek as $m ): ?>
                                        <option value="<?= $m['id_merek'] ?>"><?= $m['nama_merek']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Seat</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="seat">
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tahun Mobil</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="tahun">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kilometer Mobil</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="kilometer">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mesin</label>
                                <div class="selectgroup w-100 col-sm-12 col-md-7">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="mesin" value="Automatic" class="selectgroup-input" checked="">
                                        <span class="selectgroup-button">A</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="mesin" value="Manual" class="selectgroup-input">
                                        <span class="selectgroup-button">M</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="harga" placeholder="Harga Per-Hari">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote-simple" name="keterangan"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="file" id="image-upload" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Create Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>