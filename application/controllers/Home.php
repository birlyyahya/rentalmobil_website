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
    public function cari()
    {
        if (isset($_GET)) {
            $data = [
                'nama_kendaraan' => $_GET['kendaraan'],
                'tanggal_ambil' => $_GET['tanggalambil'],
                'tanggal_keluar' => $_GET['tanggalkembali'],
                'waktu' => $_GET['waktu'],
            ];
            $result = $this->M_home->getAllKendaraanByDate($data);
            $result2 = $this->M_home->getAllKendaraanReady($data);

            $hasil['data'] = array_merge($result, $result2);
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
        $req_url = 'https://api.exchangerate-api.com/v4/latest/IDR';
        $response_json = file_get_contents($req_url);
        $response_object = json_decode($response_json);

        // YOUR APPLICATION CODE HERE, e.g.
        $base_price = $idr; // Your price in USD
        $IDR_price = round(($base_price * $response_object->rates->USD), 2);
        return $IDR_price;
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
        $data['dollar'] = $this->converterToIDR($data['kendaraan'][0]['harga']);

        $this->template->load('layout_home', 'home/form_pemesanan',$data);
    }
    public function idbooking()
    {
        $this->template->load('layout_home', 'home/detail_booking');
    }
    public function booking()
    {
        $data = $_FILES['file'];
        $data_ext = explode('/', $data['name']);
        date_default_timezone_set("asia/jakarta");

        $config['upload_path']          = './templates/assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $gambar = $this->upload->data();
            $gambar = $data_ext;

            $datas = array(
                'id_kendaraan' => '',
                'nama_client' => $_POST['nama'],
                'alamat_client' => $_POST['alamat'],
                'no_contact' => $_POST['nomorwa'],
                'identitas_client' => $gambar[0],
            );
            
            // $result = $this->M_home->addClients($datas);
            
            $client = $this->M_home->getClientIdByName($_POST['nama']);
            
            $booking = [
                'id_booking' => '',
                'id_client' => $client,
                'id_admin' => '',
                'id_kendaraan' => $_POST['idkendaraan'],
                'tanggal_booking' => date('Y-m-d h:i:sa'),
                'tanggal_ambil' => $_POST['tanggalambil'].' '.$_POST['waktu'],
                'tanggal_kembali' => $_POST['tanggalkembali'].' '.$_POST['waktu'],
                'dp' => '',
                'status_reservasi' => 'Unpaid',
            ];

            // $this->M_home->addReservasi($booking);
            
            echo json_encode($booking);
        }
    }
}
