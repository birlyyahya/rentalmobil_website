    <!-- Main content -->
    <div class="hero text-white hero-bg-image hero-bg-parallax pt-4" data-background="<?= base_url('templates') ?>/assets/img/unsplash/hero_home.png">
        <nav class="navbar navbar-expand-lg bg-transparent main-navbar p-0" style="position: relative; left:0;">
            <div class="container-fluid p-0">
                <a href="index.html" class="navbar-brand sidebar-gone-hide">Rental ANNAS</a>
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                <ul class="navbar-nav navbar-right">
                    <ul class="navbar-nav mr-5">
                        <li class="nav-item active"><a href="<?= base_url('home/') ?>" class="nav-link">FAQ</a></li>
                        <li class="nav-item"><a href="<?= base_url('home/') ?>" class="nav-link">About</a></li>
                    </ul>
                    <a href="<?= base_url('home/cari_booking') ?>" class="btn btn-danger">Kelola Booking</a>
                </ul>
            </div>
        </nav>
        <div class="hero-inner text-md-left text-sm-center mt-5 p-5 w-md-50 w-sm-100 ml-auto">
            <h1>Rental Pilihan Anda</h1>
            <h5>Murah, Terpercaya, Fleksibel</h5>
            <p class="lead">Rental Annas merupakan penyedia jasa transportasi konsumen <br> dimana ada janji atau kesepakatan antara penyewa dan pemilik <br> untuk digunakan dalam memudahkan aktivitas anda</p>
            <div class="mt-4">
                <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
            </div>
        </div>
    </div>
    <div class="navbar-wrapper">
        <nav class="navbar bg-secondary justify-content-center rounded w-75" style="left: 50%; right:50%; transform:translate(-50%, -50%); top:-20;">
            <form class="form-inline" style="flex:auto;" method="GET" action="<?= base_url('home/cari') ?>">
                <div class="input-group w-50">
                    <input class="form-control p-4" name="kendaraan" type="search" placeholder="Cari Mobil..." aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text m-0 p-4">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
                <input type="date" class="form-control ml-3 mr-2 rounded" name="tanggalambil" style="width:13%;">
                <input type="date" class="form-control mx-2 rounded" name="tanggalkembali" style="width:13%;">
                <input type="time" class="form-control mx-2 rounded" name="waktu" style="width:10%;">
                <button class="btn-lg btn-danger px-4">Cari</button>
            </form>
        </nav>
    </div>
    <div class="section" style="margin-top:80px">
        <div id="todo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card bg-transparent shadow-none">
                            <div class="card-header pb-1">
                                <b>
                                    Kelola Pesanan Dengan Cepat
                                </b>
                            </div>
                            <div class="card-body pt-0">
                                Kelola pesanan atau batalkan pesanan anda secara cepat dan gratis hingga 48 jam sebelum pengambilan
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card bg-transparent shadow-none">
                            <div class="card-header pb-1">
                                <b>
                                    Jaminan Harga Yang Sesuai
                                </b>
                            </div>
                            <div class="card-body pt-0">
                                Menemukan harga yang lebih murah? anda dapat menegoisasikan kembali kepada kami dengan kesepakatan bersama
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card bg-transparent shadow-none">
                            <div class="card-header pb-1">
                                <b>
                                    Kelola Pesanan Dengan Cepat
                                </b>
                            </div>
                            <div class="card-body pt-0">
                                Kelola pesanan atau batalkan pesanan anda secara cepat dan gratis hingga 48 jam sebelum pengambilan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="subscribe" class="mb-5 p-3">
        <div class="container bg-white">
            <div class="row shadow">
                <div class="col-md-6 col-sm-12 p-3">
                    <div class="card card-large-icons bg-transparent shadow-none mb-0">
                        <div class="card-icon  text-white">
                            <img src="<?= base_url('templates') ?>/assets/img/drawkit/gift.svg" alt="" class="w-100">
                        </div>
                        <div class="card-body">
                            <h4>Berlangganan <br> untuk penawaran dan penawaran eklusif dari kami </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 p-3">
                    <div class="card  bg-transparent shadow-none mb-0">
                        <div class="card-header pb-0 ml-3 ">
                            <h6>
                                Daftarkan Sekarang!
                            </h6>
                        </div>
                        <div class="card-body pt-0 pb-0">
                            <div class="input-group">
                                <input class="form-control p-4" type="search" placeholder="Email anda" aria-label="Search" style="border-radius: 25px;">
                                <div class="input-group-prepend position-relative">
                                    <div class="input-group-text bg-danger text-white rounded-circle position-absolute" style="left:-60px; top:4px; z-index:99;">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="article" class="mb-5 p-3">
        <div class="container px-0">
            <div class="section-title">
                <h6 class="section-lead">Informasi Tambahan</h6>
                <hr style="width: 15%;display: inline-block;border-top: 4px solid; margin-top:5px; ">
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="<?= base_url('') ?>templates/assets/img/news/temple.png" style="background-image: url(<?= base_url('') ?>templates/assets/img/news/temple.png);">
                            </div>
                            <div class="article-title">
                                <h2><a href="#">Temple Yogyakarta</a></h2>
                            </div>
                        </div>
                        <div class="article-details">
                            <p>DIndonesia's cultural hub has a rich history, as the birthplace of batik
                                and home to UNESCO Heritage temples, but the thriving arts scene is
                                what's attracting new visitors.
                            </p>
                            <div class="article-cta">
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="<?= base_url('') ?>templates/assets/img/news/malioboro.png" style="background-image: url(<?= base_url('') ?>templates/assets/img/news/malioboro.png);">
                            </div>
                            <div class="article-title">
                                <h2><a href="#">Malioboro</a></h2>
                            </div>
                        </div>
                        <div class="article-details">
                            <p>Dengan segudang penghargaan yang dimilikinya kota Yogyakarta adalah kota yang terus menerus berubah dengan perkembangan jaman walaupun sarat dengan nilai bud…
                            </p>
                            <div class="article-cta">
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="<?= base_url('') ?>templates/assets/img/news/kraton.png" style="background-image: url('<?= base_url() ?>templates/assets/img/news/kraton.png');">
                            </div>
                            <div class="article-title">
                                <h2><a href="#">Kraton Yogyakarta</a></h2>
                            </div>
                        </div>
                        <div class="article-details">
                            <p>Keraton Ngayogyakarta Hadiningrat atau Keraton Yogyakarta merupakan istana resmi Kesultanan Ngayogyakarta Hadiningrat yang kini berlokasi di Kota Yogyakarta
                            </p>
                            <div class="article-cta">
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="container px-0">
        <div class="row">
            <section id="banner" class="col-4 pl-0">
                <div class="card">
                    <div class="card-image">
                        <img class="d-block w-100" src="<?= base_url('templates') ?>/assets/img/news/cyber.png">
                    </div>
                </div>
            </section>
            <section id="faq" class="col-8">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h4>Pertanyaan yang sering diajukan</h4>
                        <a href="https://wa.me/6285158551580?&text=Halo, saya ingin bertanya tentang transbim..."  target="_blank">
                            <button class="btn btn-danger">Hubungi Kami</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div id="accordion">
                                    <div class="accordion">
                                        <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="false">
                                            <h4>Apa yang saya perluka untuk menyewa?</h4>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion">
                                            <p class="mb-0">Persyaratan yang diperlukan untuk menyewa dengan meninggalkan minimal 3 identitas, seperti KTP, NPWP, KTA, BPJS, dsb </p>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-2" aria-expanded="false">
                                            <h4>Bisakah saya memesan kendaraan untuk orang lain?</h4>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                            <p class="mb-0">Tidak bisa dikarenakan kami akan melakukan verifikasi dari identitas yang diinputkan pada form dengan orang saat pengambilan kendaraan.</p>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-3" aria-expanded="false">
                                            <h4>Bagaimana cara mengupload bukti pembayaran?</h4>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                            <p class="mb-0">Untuk upload bukti pembayaran customer bisa mengirimkan bukti melalui Whatsapp contact person yang tersedia atau melalui halaman detail booking.</p>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-4" aria-expanded="false">
                                            <h4>Apakah saya bisa membatalkan bookingan saya?</h4>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                                            <p class="mb-0">Customer bisa membatalkan pemesanan sebelum 2 hari / 48 jam sebelum tanggal penggunaan.</p>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-5" aria-expanded="false">
                                            <h4>Apa saja ketentuan dan kebijakan dalam menyewa kendaraan?</h4>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-5" data-parent="#accordion">
                                            <p class="mb-0">
                                                1. Penyewa wajib memberikan data diri secara lengkap kepada Annas Rental Mobil sesuai persyaratan yang sudah disetujui di awal yang akan disimpan oleh pemilik sewa selama masa penyewaan<br>
                                                2. Adanya ketentuan denda sewa jika melebihi batas waktu sewa<br>
                                                3. Adanya aturan wilayah pemakaian kendaraan sesuai perjanjian yaitu dalam lingkup Daerah Istimewa Yogyakarta <br>
                                                4. Pihak sewa mobil berhak menolak pelanggan sesuai kriteria pelanggan<br>
                                                5. Ketika mengirimkan kendaraan kami akan mencocokan dokumen yang sebelumnya kami terima dengan dokumen asli yang diberikan penyewa.. Apabila dokumen asli dengan dokumen yang sebelumnya di kirimkan ke Annas Rental Mobil tidak sesuai. Maka Annas Rental Mobil berhak untuk tidak memberikan dan membatalkan penyewaan. <br>
                                                6. Adanya aturan tentang denda asuransi mobil jika terjadi kerusakan ringan atau kerusakan berat<br>
                                                7. Durasi penyewaan dianggap digunakan secara full dan tidak bisa dipotong untuk digunakan di lain waktu </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <img src="<?= base_url('templates') ?>/assets/img/drawkit/faq.png" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Main Content -->