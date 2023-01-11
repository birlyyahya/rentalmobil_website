<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= SITE_NAME . ' : Admin -  ' . ucwords($this->uri->segment(2)) ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/chocolat/dist/css/chocolat.css">
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/selectric/public/selectric.css">
    <link rel="stylesheet" href="<?= base_url() ?>templates/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>templates/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>templates/assets/css/components.css">
</head>

<body>
    <div class="col-12 p-0 bg-white">
        <?= $contents ?>
        <section id="navbar-footer content-justify-between">
            <nav class="bg-danger">
                <ul class="nav justify-content-center">
                    <li class="nav-item ">
                        <a class="nav-link active text-light" href="<?= base_url('home') ?>" style="font-weight: bolder;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('home') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('home') ?>">FAQ</a>
                    </li>
                </ul>
            </nav>
        </section>

        <footer class="main-footer bg-secondary mt-0 px-5 py-4 text-dark">
            <div class="footer-center w-85 m-auto">
                Rental Mobil ANNAS merupakan salah satu penyedia jasa layanan transportasi yang menawarkan jasa penyewaan kendaraan untuk konsumen yang dimana ada perjanjian atau kesepakatan antara penyewa dan pemilik dalam menyewa ataupun meminjam mobil untuk digunakan dalam beraktivitas <br>
                <p class="text-center mt-2">
                    Hak Cipta © 2022 Rental ANNAS transport mudah untuk beraktivitas anda, seluruh hak cipta
                </p>
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>templates/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url() ?>templates/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>templates/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/selectric/public/jquery.selectric.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?= base_url() ?>templates/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- Template JS File -->
    <script src="<?= base_url() ?>templates/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>templates/assets/js/custom.js"></script>



    <script>
        $(document).ready(function() {

            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 4000);

            const datas = document.querySelectorAll('#idbooking-modal,#nama-modal,#email-modal,#gender-modal,#nomorwa-modal,#id');

            $('#form-pemesanan').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: '<?= base_url('home/booking') ?>',
                    type: 'post',
                    mimeType: "multipart/form-data",
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    success: function(result) {
                        if (result == 'failed') {
                            swal("Gagal!", "Data input tidak valid!", "error");
                        } else {
                            $('#invoice1').modal('show');
                            var todo = JSON.parse(result);

                            console.log(todo);

                            $.each(todo, function(index, element) {
                                for (let i = 0; i < datas.length; i++) {
                                    datas[0].innerHTML = element.id_booking;
                                    datas[1].innerHTML = element.nama_client;
                                    datas[2].innerHTML = element.email_client;
                                    datas[3].innerHTML = 'laki-laki';
                                    datas[4].innerHTML = element.no_contact;
                                    datas[5].innerHTML = element.id_booking;
                                }
                                document.getElementById("id-booking-modal").setAttribute("value", element.id_booking);
                                document.getElementById("id-client-modal").setAttribute("value", element.id_client);
                                document.getElementById("id-transaksi-modal").setAttribute("value", element.id_transaksi);
                            })

                            event.preventDefault();
                        }

                    }
                });
            })
            $('#upload-pembayaran').click(function(e) {
                e.preventDefault();
                $('#invoice3').modal('show');

            })
            $('#form-pembayaran').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: '<?= base_url('home/id_booking_upload_pembayaran') ?>',
                    type: 'post',
                    mimeType: "multipart/form-data",
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    success: function(result) {
                        console.log(result);
                        swal("Berhasil!", "Pembayaran anda terkirim!", "success");
                        $('#invoice3').modal('hide');
                        setTimeout("location.reload(true);",4000);
                    }
                });
            })
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            $(document).on("click", ".browse", function() {
                var file = $(this).parents().find(".file");
                file.trigger("click");
            });
            $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);

                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("preview").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
            });
        })

        function metode(value) {
            document.querySelector("input[name='metode']").setAttribute("value", value);
        }
        function sortTable() {
            $('#element').filter(function() {
                const data = $(this).find('.elementData').sort(function(a, b) {
                    return +$(a).data('value') - +$(b).data('value');
                }).appendTo(data);
            });
        }

        function sortMeBy(arg, sel, elem, order) {
            var $selector = $(sel),
                $element = $selector.children(elem);

            $element.sort(function(a, b) {
                var an = parseInt(a.getAttribute(arg)),
                    bn = parseInt(b.getAttribute(arg));
                if (order == 'asc') {
                    if (an > bn)
                        return 1;
                    if (an < bn)
                        return -1;
                } else if (order == 'desc') {
                    if (an < bn)
                        return 1;
                    if (an > bn)
                        return -1;
                }
                return 0;
            });

            $element.detach().appendTo($selector);
        }
    </script>
    <!-- Page Specific JS File -->
    <script src="<?= base_url('templates/assets/js/page/features-post-create.js') ?>"></script>

</body>

</html>