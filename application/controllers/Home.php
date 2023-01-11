<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/Firebase/JWT/JWT.php';

use \Firebase\JWT\JWT;

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
    }

    public function index()
    {
        $this->template->load('layout_home', 'home/homepage');
    }
    public function cari_booking()
    {
        $this->template->load('layout_home', 'home/cari_booking');
    }

    public function findbooking()
    {
        $data = [
            'email' => $this->input->post('email'),
            'idbooking' => $this->input->post('idbooking')
        ];

        $cek['data'] = $this->M_home->findbooking($data);


        if ($cek['data']) {
            // if(empty($this->db->query("SELECT * FROM `transaksi` LEFT JOIN data_pembayaran USING (id_transaksi) WHERE id_pembayaran is NULL")))){

            // }
            $cek['totalharga'] = $this->M_home->getDataPembayaranSumByIdTransaksi($cek['data'][0]['id_transaksi']);
            $cek['data_pembayaran'] = $this->M_home->getDataPembayaranByTransaksi($cek['data'][0]['id_transaksi']);
            $cek['dollarharga'] = $this->converterToIDR($cek['data'][0]['harga']);
            if (empty($cek['data_pembayaran'])) {
                $cek['dollardana'] = '0';
                $cek['dollartotal'] = '0';
            } else {
                $cek['dollardana'] = $this->converterToIDR($cek['data_pembayaran'][0]['dana']);
                $cek['dollartotal'] = $this->converterToIDR($cek['data'][0]['harga'] - $cek['data_pembayaran'][0]['dana']);
            }
            $this->template->load('layout_home', 'home/detail_booking', $cek);
        } else {
            $this->session->set_flashdata('response', ' <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Gagal!</strong> Email atau ID Booking tidak ditemukan
          </div>');
            $this->template->load('layout_home', 'home/cari_booking');
        }
    }

    public function cari()
    {
        if (isset($_GET)) {
            $data = [
                'nama_kendaraan' => $_GET['kendaraan'],
                'tanggal_ambil' => $_GET['tanggalambil'],
                'tanggal_keluar' => $_GET['tanggalkembali'],
                'waktu' => $_GET['waktu'],
            ];
            $hasil['ready'] = $this->M_home->getAllKendaraanByDate($data);
            $hasil['rekomendasi'] = $this->M_home->getAllKendaraanReady($data);

            $hasil['tanggal'] = [
                'tanggal_ambil' => $_GET['tanggalambil'],
                'tanggal_keluar' => $_GET['tanggalkembali'],
                'waktu' => $_GET['waktu'],
            ];


            $this->template->load('layout_home', 'home/katalog_kendaraan', $hasil);
        } else {
            echo "gagal";
        }
    }
    public function katalog_kendaraan()
    {
        $this->template->load('layout_home', 'home/katalog_kendaraan');
    }
    public function converterToIDR($idr)
    {
        $response_json = $this->usdconvert();
        $response_object = json_decode($response_json);

        $base_price = $idr;
        $IDR_price = round(($base_price * $response_object->USD), 2);
        return $IDR_price;
    }
    public function usdconvert()
    {
        $data = [
            "IDR" => 1, "AED" => 0.000235, "AFN" => 0.00579, "ALL" => 0.00704, "AMD" => 0.0258, "ANG" => 0.000115, "AOA" => 0.0333, "ARS" => 0.0116, "AUD" => 9.4e-5, "AWG" => 0.000115, "AZN" => 0.000111, "BAM" => 0.000118, "BBD" => 0.000128, "BDT" => 0.00679, "BGN" => 0.000118, "BHD" => 2.4e-5, "BIF" => 0.135, "BMD" => 6.4e-5, "BND" => 8.6e-5, "BOB" => 0.00045, "BRL" => 0.000338, "BSD" => 6.4e-5, "BTN" => 0.00528, "BWP" => 0.000827, "BYN" => 0.00016, "BZD" => 0.000128, "CAD" => 8.6e-5, "CDF" => 0.134, "CHF" => 6.0e-5, "CLP" => 0.0551, "CNY" => 0.000438, "COP" => 0.321, "CRC" => 0.0384, "CUP" => 0.00154, "CVE" => 0.00666, "CZK" => 0.00146, "DJF" => 0.0114, "DKK" => 0.000451, "DOP" => 0.00365, "DZD" => 0.00892, "EGP" => 0.00172, "ERN" => 0.00096, "ETB" => 0.0035, "EUR" => 6.0e-5, "FJD" => 0.000143, "FKP" => 5.3e-5, "FOK" => 0.000451, "GBP" => 5.3e-5, "GEL" => 0.000176, "GGP" => 5.3e-5, "GHS" => 0.000673, "GIP" => 5.3e-5, "GMD" => 0.00411, "GNF" => 0.571, "GTQ" => 0.00051, "GYD" => 0.0137, "HKD" => 0.000499, "HNL" => 0.0016, "HRK" => 0.000455, "HTG" => 0.00963, "HUF" => 0.0241, "ILS" => 0.000225, "IMP" => 5.3e-5, "INR" => 0.00528, "IQD" => 0.0952, "IRR" => 2.86, "ISK" => 0.00926, "JEP" => 5.3e-5, "JMD" => 0.00986, "JOD" => 4.5e-5, "JPY" => 0.00851, "KES" => 0.00802, "KGS" => 0.0056, "KHR" => 0.27, "KID" => 9.4e-5, "KMF" => 0.0297, "KRW" => 0.0807, "KWD" => 2.0e-5, "KYD" => 5.3e-5, "KZT" => 0.0303, "LAK" => 1.11, "LBP" => 0.0964, "LKR" => 0.0235, "LRD" => 0.01, "LSL" => 0.0011, "LYD" => 0.000314, "MAD" => 0.000678, "MDL" => 0.00124, "MGA" => 0.294, "MKD" => 0.00371, "MMK" => 0.168, "MNT" => 0.225, "MOP" => 0.000514, "MRU" => 0.00239, "MUR" => 0.00282, "MVR" => 0.001, "MWK" => 0.0671, "MXN" => 0.00123, "MYR" => 0.000282, "MZN" => 0.00419, "NAD" => 0.0011, "NGN" => 0.0292, "NIO" => 0.00237, "NOK" => 0.000655, "NPR" => 0.00844, "NZD" => 0.000101, "OMR" => 2.5e-5, "PAB" => 6.4e-5, "PEN" => 0.000243, "PGK" => 0.000229, "PHP" => 0.00355, "PKR" => 0.0148, "PLN" => 0.000285, "PYG" => 0.475, "QAR" => 0.000233, "RON" => 0.000299, "RSD" => 0.00719, "RUB" => 0.00464, "RWF" => 0.0699, "SAR" => 0.00024, "SBD" => 0.000544, "SCR" => 0.000844, "SDG" => 0.0292, "SEK" => 0.000678, "SGD" => 8.6e-5, "SHP" => 5.3e-5, "SLE" => 0.00121, "SLL" => 1.21, "SOS" => 0.0371, "SRD" => 0.00207, "SSP" => 0.0435, "STN" => 0.00148, "SYP" => 0.163, "SZL" => 0.0011, "THB" => 0.00217, "TJS" => 0.000656, "TMT" => 0.000224, "TND" => 0.000203, "TOP" => 0.00015, "TRY" => 0.0012, "TTD" => 0.000435, "TVD" => 9.4e-5, "TWD" => 0.00196, "TZS" => 0.153, "UAH" => 0.0023, "UGX" => 0.244, "USD" => 6.4e-5, "UYU" => 0.00258, "UZS" => 0.741, "VES" => 0.00119, "VND" => 1.53, "VUV" => 0.00756, "WST" => 0.000175, "XAF" => 0.0396, "XCD" => 0.000173, "XDR" => 4.8e-5, "XOF" => 0.0396, "XPF" => 0.00721, "YER" => 0.0163, "ZAR" => 0.0011, "ZMW" => 0.0012, "ZWL" => 0.0447
        ];
        return json_encode($data);
    }

    public function detail_kendaraan()
    {
        $id = $_GET['id'];
        $data['tanggal'] = [
            'tanggal_ambil' => $_GET['tanggalambil'],
            'tanggal_keluar' => $_GET['tanggalkembali'],
            'waktu' => $_GET['waktu'],
        ];

        $data['kendaraan'] = $this->M_home->getKendaraanByID($id);
        $data['dollar'] = $this->converterToIDR($data['kendaraan'][0]['harga']);

        $this->template->load('layout_home', 'home/detail_kendaraan', $data);
    }
    public function pesanmobil()
    {
        $id = $_GET['id'];
        $data['tanggal'] = [
            'tanggal_ambil' => $_GET['tanggalambil'],
            'tanggal_keluar' => $_GET['tanggalkembali'],
            'waktu' => $_GET['waktu'],
        ];

        $data['kendaraan'] = $this->M_home->getKendaraanByID($id);

        $this->session->set_userdata($data['kendaraan'][0]);

        $data['dollar'] = $this->converterToIDR($data['kendaraan'][0]['harga']);

        $this->template->load('layout_home', 'home/form_pemesanan', $data);
    }

    public function booking()
    {
        $this->form_validation->set_rules(
            'nomorwa',
            'nomorwa',
            'required|min_length[12]|max_length[15]'
        );
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required|alpha');

        if ($this->form_validation->run() == FALSE) {
            echo 'failed';
        } else {
            $data = $_FILES['file'];
            $data_ext = explode('/', $data['name']);
            date_default_timezone_set("asia/jakarta");

            $config['upload_path']          = './templates/assets/img/identitas-client/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $config['max_width']            = 10240;
            $config['max_height']           = 76800;

            $this->load->library('upload', $config);


            if ($this->upload->do_upload('file')) {
                $gambar = $this->upload->data();
                $gambar = $data_ext;

                $datas = [
                    'id_client' => '',
                    'nama_client' => $_POST['nama'],
                    'email_client' => $_POST['email'],
                    'alamat_client' => $_POST['alamat'],
                    'no_contact' => $_POST['nomorwa'],
                    'identitas_client' => $gambar[0],
                ];

                $cek = $this->M_home->getClientIdByName($datas);
                if (empty($cek)) {

                    $this->M_home->addClients($datas);
                    $client = $this->M_home->getClientIdByName($datas);
                }

                $booking = [
                    'id_booking' => '',
                    'id_client' => $client[0]['id_client'],
                    'id_kendaraan' => $_POST['idkendaraan'],
                    'tanggal_booking' => date('Y-m-d h:i:s'),
                    'tanggal_ambil' => $_POST['tanggalambil'] . ' ' . $_POST['waktu'],
                    'tanggal_kembali' => $_POST['tanggalkembali'] . ' ' . $_POST['waktu'],
                    'status_reservasi' => 'Unpaid',
                ];

                $this->M_home->addReservasi($booking);

                $response = $this->M_home->getInvoice($booking);

                $transaksi = [
                    'id_transaksi' => '',
                    'id_booking' => '' . $response[0]['id_booking'] . '',
                    'id_admin' => NULL,
                    'tanggal_transaksi' => date('Y-m-d h:i:s'),
                    'total_harga' => $this->session->userdata('harga'),
                    'status_transaksi' => 'unpaid',
                    'status_kendaraan' => '',
                ];
                $cek1 = $this->M_home->addTransaksi($transaksi);

                $datasendwa = [
                    'nomor' => $this->formatnomor($datas['no_contact']),
                    'nama' => $response[0]['nama_client'],
                    'email' => $response[0]['email_client'],
                    'idbooking' => $response[0]['id_booking'],
                    'kendaraan' => $response[0]['nama_kendaraan'],
                    'tanggalbooking' => $response[0]['tanggal_booking'],
                    'tanggalambil' => $response[0]['tanggal_ambil'],
                ];

                $this->session->set_userdata('sendwa', $datasendwa);

                // $this->sendwa($datasendwa);

                echo json_encode($response);
            }
        }
    }
    public function id_booking_upload_pembayaran()
    {
        $data = $_FILES['file'];
        $data_ext = explode('/', $data['name']);
        $data_ext = str_replace(' ', '_', $data_ext);


        $config['upload_path']          = './templates/assets/img/data-pembayaran/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $gambar = $this->upload->data();
            $gambar = $data_ext;

            $cek = $this->input->post('id-transaksi');


            $data = [
                'id_pembayaran' => '',
                'id_transaksi' => $this->input->post('id-transaksi'),
                'id_client' => $this->input->post('id-client'),
                'jenis_pembayaran' => $this->input->post('jenis'),
                'metode_pembayaran' => $this->input->post('metode'),
                'tanggal_bayar' => date('Y-m-d H:i:s'),
                'dana' => '0',
                'gambar_pembayaran' => $gambar[0],
                'status_pembayaran' => 'pending',
            ];

            $this->M_home->addDataPembayaran($data);

            echo json_encode($data);
        }
    }

    public function reservasi_pembayaran()
    {
        $data = $_FILES['img'];
        $data_ext = explode('/', $data['name']);

        $config['upload_path']          = './templates/assets/img/data-pembayaran/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img')) {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];

            $id_booking = $_POST['id-booking'];
            $dataTransaksi = $this->M_home->getTransaksiByIdBooking($id_booking);

            $pembayaran = [
                'id_pembayaran' => NULL,
                'id_transaksi' => $dataTransaksi[0]['id_transaksi'],
                'id_client' => $_POST['id-client'],
                'jenis_pembayaran' => $_POST['jenis-pembayaran'],
                'tanggal_bayar' => date('Y-m-d h:i:s'),
                'metode_pembayaran' => $_POST['metode'],
                'gambar_pembayaran' => $gambar,
                'status_pembayaran' => 'pending',
            ];
            $cek = $this->M_home->addPembayaran($pembayaran);

            $status = [
                'status_reservasi' => 'pending',
            ];

            $this->M_home->updateInvoiceReservasi($id_booking, $status);

            if ($this->db->affected_rows($cek) >= 0) {

                $transaksi = [
                    'status_transaksi' => 'pending',
                ];
                $cek1 = $this->M_home->updateTransaksi($dataTransaksi[0]['id_transaksi'], $transaksi);

                if ($this->db->affected_rows($cek1) >= 0) {
                    redirect("home/success");
                } else {
                    redirect("home/error");
                }
            } else {
                redirect("home/error");
            }
        }
    }
    public function success()
    {
        // $data = $this->session->userdata('sendwa');
        // $this->sendwa($data);
        $this->session->unset_tempdata('sendwa');
        $this->load->view('response/success');
    }
    public function error()
    {
        $this->load->view('response/error');
    }

    public function sendwa($data)
    {
        include('WhatsappAPI.php');

        $wp = new WhatsappAPI("4013", "a2507050f19cb29d3238ed4a171bc08732c628bc");

        $number = $data['nomor'];
        $message = 'Halo ' . ucwords($data['nama']) . ' 😊
        
Terima kasih atas kepercayaannya terhadap layanan transbim.com
        
Kami informasikan bahwa invoice *#' . $data['idbooking'] . '* untuk reservasi kendaraan *' . ucwords($data['kendaraan']) . '* kakak telah terbit pada tanggal *' . $data['tanggalbooking'] . '*. 

Kakak dapat mengecek detail booking kakak pada halaman kelola booking. 😊
        
Saat ini pesanan anda akan segera kami proses, pembatalan berlaku untuk 48 jam kedepan H-2 sebelum pengambilan 😇
        
Silahkan menyelesaikan pembayaran invoice *#' . $data['idbooking'] . '* untuk melunasi pembelian kakak. ';


        // Send Text Message to number
        $status = $wp->sendText($number, $message);
        $this->session->unset_tempdata('sendwa');
    }
    public function formatnomor($nomorhp)
    {
        //Terlebih dahulu kita trim dl
        $nomorhp = trim($nomorhp);
        //bersihkan dari karakter yang tidak perlu
        $nomorhp = strip_tags($nomorhp);
        // Berishkan dari spasi
        $nomorhp = str_replace(" ", "", $nomorhp);
        // bersihkan dari bentuk seperti  (022) 66677788
        $nomorhp = str_replace("(", "", $nomorhp);
        // bersihkan dari format yang ada titik seperti 0811.222.333.4
        $nomorhp = str_replace(".", "", $nomorhp);

        //cek apakah mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($nomorhp))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($nomorhp), 0, 3) == '+62') {
                $nomorhp = trim($nomorhp);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr($nomorhp, 0, 1) == '0') {
                $nomorhp = '+62' . substr($nomorhp, 1);
            }
        }
        return $nomorhp;
    }
}
