<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/Firebase/JWT/JWT.php';

use \Firebase\JWT\JWT;

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
    private $secret_key = "rentalmobil2023";
    public function dashboard()
    {
        if ($this->cektoken() == true) {
            $data['javascript'] = 'index-0.js';
            $this->template->load('layout_admin', 'admin/dashboard', $data);
        } else {
            redirect('admin/login');
        }
    }

    public function cektoken()
    {
        if (!empty($this->session->userdata('token'))) {
            JWT::decode($this->session->userdata('token'), $this->secret_key, array('HS256'));
            return true;
        } else {
            return false;
        }
    }
    public function index()
    {
        if ($this->cektoken() == false) {
            $this->load->view('admin/login');
        } else {
            redirect('admin/dashboard');
        }
    }
    public function login()
    {
        $this->load->library('form_validation');
        $data = array(
            "username" => $this->input->post("username"),
            "password" => md5($this->input->post("password"))
        );
        $date = new DateTime();
        $this->form_validation->set_rules('username', 'username', 'required|trim|callback_username_check');
        $this->form_validation->set_rules('password', 'password1', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
        } else {
            $result = $this->M_admin->cekLoginAdmin($data);
            if (empty($result)) {
                $this->load->view('admin/login');
                $this->session->set_flashdata('gagal', 'Username atau Kata Sandi Salah');
            } else {
                $payload['id'] = $result['id_admin'];
                $payload['username'] = $result['username'];
                $payload['namaadmin'] = $result['nama_admin'];
                $payload['role'] = $result['role'];
                $payload['iat'] = $date->getTimestamp();
                $payload['exp'] = $date->getTimestamp() + 36000;

                $akses = array(
                    "user" => $payload['username'],
                    "id" => $payload['id'],
                    "token" => JWT::encode($payload, $this->secret_key)
                );
                $this->session->set_userdata($akses);
                redirect('admin/dashboard');
            }
        }
    }
    public function username_check($str)
    {
        $result = $this->M_admin->cekUser($str);
        if (empty($result)) {
            $this->form_validation->set_message('username_check', 'Username Tidak ditemukan');
            return FALSE;
        } else {
            return TRUE;
        }
    }


    public function kendaraan()
    {
        if ($this->cektoken() == true) {
            $data['javascript'] = 'components-table.js';
            $data['away'] = $this->M_admin->getAllKendaraanFilter('away');
            $data['booked'] = $this->M_admin->getAllKendaraanFilter('booked');
            $data['ready'] = $this->M_admin->getAllKendaraanReady();
            $data['kendaraan'] = $this->M_admin->getAllKendaraan();
            $this->template->load('layout_admin', 'admin/mobil', $data);
        } else {
            redirect('admin/login');
        }
    }
    public function getKendaraanFilter()
    {
        $filter = $_POST['filter'];
        $data = $this->M_admin->getAllKendaraanFilter($filter);

        foreach ($data as $m) {
            echo '<tr>';
            echo '<td>
            <div class="custom-checkbox custom-control"  id="label">
                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
            </div>
        </td>';
            echo '<td class="text-capitalize" id="nama">' . $m['nama_kendaraan'] . '<div class="table-links">
                    <div class="bullet"></div>
                    <a href="' . base_url("admin/editKendaraan/") . $m['id_kendaraan'] . '">Edit</a>
                    <div class="bullet"></div>
                    <a href="#" class="text-danger">Trash</a>
                </div></td>';
            echo '<td class="text-capitalize" id="merek"><a href="">' . $m['nama_merek'] . '</a></td>';
            echo '<td id="seat">' . $m['tanggal_transaksi'] . '</td>';
            echo '<td id="kilometer">' . $m['tanggal_ambil'] . '</td>';
            echo '<td id="tahun">' . $m['tanggal_kembali'] . '</td>';
            echo '<td id="harga"><div class="alert alert-warning text-capitalize m-0" >Rp ' . number_format($m['harga']) . ' </div></td>';
            echo '<td id="status">
                <div class="badge badge-success  ">' . ucwords($filter) . '</div></td>';
            echo '</tr>';
        }
    }
    public function getAllKendaraanReady()
    {
        $data = $this->M_admin->getAllKendaraanReady();
        foreach ($data as $m) {
            echo '<tr>';
            echo '<td>
            <div class="custom-checkbox custom-control"  id="label">
                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
            </div>
        </td>';
            echo '<td class="text-capitalize" id="nama">' . $m['nama_kendaraan'] . '<div class="table-links">
                    <div class="bullet"></div>
                    <a href="' . base_url("admin/editKendaraan/") . $m['id_kendaraan'] . '">Edit</a>
                    <div class="bullet"></div>
                    <a href="#" class="text-danger">Trash</a>
                </div></td>';
            echo '<td class="text-capitalize" id="merek"><a href="">' . $m['nama_merek'] . '</a></td>';
            echo '<td id="seat">' . $m['seats'] . '</td>';
            echo '<td id="kilometer">' . $m['kilometer'] . '</td>';
            echo '<td id="tahun">' . $m['tahun'] . '</td>';
            echo '<td id="harga"><div class="alert alert-warning text-capitalize m-0" >Rp ' . number_format($m['harga']) . ' </div></td>';
            echo '<td id="status">
                <div class="badge badge-primary text-capitalize">Ready</div></td>';
            echo '</tr>';
        }
    }
    public function editKendaraan($id)
    {
    }
    public function deleteKendaraan($id)
    {
        if ($this->cektoken() == true) {
            $cek = $this->M_admin->deleteKendaraan($id);

            if ($this->db->affected_rows($cek) >= 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success message">Hapus Kendaraan Berhasil!</div>');
                redirect('admin/kendaraan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger message">Hapus Kendaraan Gagal!</div>');
                redirect('admin/kendaraan');
            }
        } else {
            redirect('admin/login');
        }
    }

    public function tambahkendaraan()
    {
        if ($this->cektoken() == true) {
            $data['javascript'] = 'features-post-create.js';
            $data['merek'] = $this->M_admin->getAllMerek();
            $this->template->load('layout_admin', 'admin/tambahkendaraan', $data);
        } else {
            redirect('admin/login');
        }
    }
    public function addkendaraan()
    {
        $config['upload_path']          = './templates/assets/img/products/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];

            $data = [
                'id_kendaraan' => '',
                'nama_kendaraan' => $this->input->post('namakendaraan'),
                'id_merek' => $this->input->post('merek'),
                'seats' => $this->input->post('seat'),
                'kilometer' => $this->input->post('kilometer'),
                'mesin' => $this->input->post('mesin'),
                'kondisi' => $this->input->post('keterangan'),
                'tahun' => $this->input->post('tahun'),
                'harga' => $this->input->post('harga'),
                'gambar' => $gambar,
            ];
            $cek = $this->M_admin->addKendaraan($data);

            if ($this->db->affected_rows($cek) >= 0) {
                $this->session->set_flashdata('response', '
                <div class="alert alert-success alert-dismissible show fade message">
                      <div class="alert-body">
                          <span>×</span>
                        </button>
                        <i class="fa fa-check"></i> <b>Success</b> Ditambahkan
                      </div>
                    </div>
                ');
                redirect('admin/kendaraan');
            } else {
                echo "alert('Gagal Ditambahkan!')";
            }
        }
    }
    public function billing($filter)
    {
        if ($this->cektoken() == true) {
            $data['javascript'] = 'bootstrap-modal.js';
            $data['transaksi'] = $filter;
            $no = 0;
            foreach ($data['transaksi'] as $d) {
                $data['dana'][$no] = $this->M_admin->getDataPembayaranSumByIdTransaksi($d['id_transaksi']);
                $no++;
            }
            $this->template->load('layout_admin', 'admin/billing', $data);
        } else {
            redirect('admin/login');
        }
    }
    public function getBilling($data)
    {

        $filter = $this->M_admin->getBilling($data);
        $this->billing($filter);
    }
    public function getDataPembayaranByIdTransaksi()
    {
        $id = $_POST['detail'];
        $data = $this->M_admin->getDataPembayaranByIdTransaksi($id);

        foreach ($data as $d) {
            echo $d['jenis_pembayaran'] . ' - ' . $d['metode_pembayaran'] . '<br>';
        };
    }
    public function data_pembayaran()
    {
        $data['pembayaran'] = $this->M_admin->getAllDataPembayaranPending();
        $this->template->load('layout_admin', 'admin/data_pembayaran', $data);
    }
    public function all_transaksi()
    {
        $data['pembayaran'] = $this->M_admin->getAllDataPembayaran();
        $this->template->load('layout_admin', 'admin/all_transaksi', $data);
    }
    public function pembayaran()
    {
        $invoice = $_POST['invoice'];
        $idPembayaran = $_POST['idPembayaran'];
        $status = $_POST['status'];
        $jenis = $_POST['jenis'];
        $jumlah = $_POST['jumlah'];


        $idTransaksi = $this->M_admin->getTransaksiByIdBooking($invoice);

        if ($jenis == 'DP 50%') {
            if ($status == 'cancel') {
                $statusPembayaran = [
                    'dana' => '0',
                    'status_pembayaran' => 'ditolak'
                ];
                $statusReservasi = 'cancel';
                $statusTransaksi = [
                    'status_transaksi' => 'cancel',
                    'status_kendaraan' => NULL
                ];
            } else if ($status == 'paid') {
                $statusReservasi = 'paid';
                $statusTransaksi = [
                    'status_transaksi' => 'booked',
                    'status_kendaraan' => 'booked'
                ];
                $statusPembayaran = [
                    'dana' => $jumlah,
                    'status_pembayaran' => 'diterima'
                ];
            } else if ($status == 'invalid') {
                $statusReservasi = 'unpaid';
                $statusTransaksi = [
                    'status_transaksi' => 'unpaid',
                    'status_kendaraan' => NULL
                ];
                $statusPembayaran = [
                    'dana' => '0',
                    'status_pembayaran' => 'ditolak'
                ];
            } else {
                $statusReservasi = 'unpaid';
                $statusTransaksi = [
                    'status_transaksi' => 'unpaid',
                    'status_kendaraan' => NULL
                ];
                $statusPembayaran = [
                    'dana' => '0',
                    'status_pembayaran' => 'pending'
                ];
            };
        } else {
            if ($status == 'cancel') {
                $$statusPembayaran = [
                    'dana' => '0',
                    'status_pembayaran' => 'ditolak'
                ];
                $statusReservasi = 'cancel';
                $statusTransaksi = [
                    'status_transaksi' => 'cancel',
                    'status_kendaraan' => NULL
                ];
            } else if ($status == 'paid') {
                $statusReservasi = 'paid';
                $statusTransaksi = [
                    'status_transaksi' => 'paid',
                    'status_kendaraan' => 'booked'
                ];
                $statusPembayaran = [
                    'dana' => $jumlah,
                    'status_pembayaran' => 'diterima'
                ];
            } else if ($status == 'invalid') {
                $statusReservasi = 'unpaid';
                $statusTransaksi = [
                    'status_transaksi' => 'unpaid',
                    'status_kendaraan' => NULL
                ];
                $statusPembayaran = [
                    'dana' => '0',
                    'status_pembayaran' => 'ditolak'
                ];
            } else {
                $statusReservasi = 'unpaid';
                $statusTransaksi = [
                    'status_transaksi' => 'unpaid',
                    'status_kendaraan' => NULL
                ];
                $statusPembayaran = [
                    'dana' => '0',
                    'status_pembayaran' => 'pending'
                ];
            }
        }


        $this->M_admin->updateTransaksiStatus($idTransaksi[0]['id_transaksi'], $statusTransaksi);
        $this->M_admin->updateReservasiStatus($invoice, $statusReservasi);
        $this->M_admin->updatePembayaranStatus($idPembayaran, $statusPembayaran);

        $result = $this->M_admin->KonfirmDataPembayaranToTransaksi($idPembayaran, $idTransaksi[0]['id_transaksi']);


        if ($this->db->affected_rows($result) >= 0) {
            if ($status == 'pending') {
                $this->session->set_flashdata('message', '<div class="alert alert-danger message">Pembayaran diurungkan </div>');
                redirect("admin/all_transaksi");
            } else {
                $data = [
                    'jumlah' => $jumlah,
                    'idTransaksi' => $idTransaksi[0]['id_transaksi'],
                    'idPembayaran' => $idPembayaran,
                    'idBooking' => $invoice,
                ];

                $cek = $this->checkInvoice($data);

                $this->session->set_flashdata('message', '<div class="alert alert-success message">Konfirmasi Pembayaran Berhasil!</div>');
                $sendwa = [
                    'nowa' => $_POST['nowa'],
                    'idbooking' => $invoice,
                    'jenis' => $jenis,
                    'status' => ucwords($statusPembayaran['status_pembayaran']),
                    'jumlah' => number_format($jumlah, 2, '.'),
                ];
                // $this->sendWaKonfirmasi($sendwa);
                redirect("admin/data_pembayaran");
            }
        }
    }
    public function checkInvoice($data)
    {
        $cek = $this->M_admin->checkInvoice($data);

        if (!empty($cek)) {
            $statusTransaksi = [
                'status_transaksi' => 'paid',
                'status_kendaraan' => 'booked'
            ];
            $this->M_admin->updateTransaksiStatus($data['idTransaksi'], $statusTransaksi);

            return true;
        } else {
            return false;
        }
    }

    public function sendWaKonfirmasi($data)
    {
        include('WhatsappAPI.php');

        $wp = new WhatsappAPI("4013", "a2507050f19cb29d3238ed4a171bc08732c628bc");

        $number = $data['nowa'];
        $message = 'Halo kak, 😊
        
Kami informasikan Pembayaran *' . $data['jenis'] . '* sebesar Rp ' . $data['jumlah'] . ' pada invoice *#' . $data['idbooking'] . '* telah *' . $data['status'] . '*
        
Untuk mengecek invoice pembayaran terdapat pada halaman kelola booking 😇 

Atau kakak dapat mengakses pada link berikut : aurospace.store
';


        // Send Text Message to number
        $status = $wp->sendText($number, $message);
        $this->session->unset_tempdata('sendwa');
    }
    public function merek()
    {
        if ($this->cektoken() == true) {
            $data['javascript'] = 'bootstrap-modal.js';
            $data['merek'] = $this->M_admin->getAllMerek();
            $this->template->load('layout_admin', 'admin/merek', $data);
        } else {
            redirect('admin/login');
        }
    }
    public function tambahmerek()
    {
        if ($this->cektoken() == true) {
            $this->template->load('layout_admin', 'admin/tambahmerek');
        } else {
            redirect('admin/login');
        }
    }
    public function action_tambahmerek()
    {
        $data = [
            'id_merek' => '',
            'nama_merek' => $_POST['merek'],
        ];
        var_dump($data);
        $cek = $this->M_admin->addMerek($data);

        if ($this->db->affected_rows($cek) >= 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success message">Menambakan Merek Berhasil!</div>');
            redirect('admin/merek');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger message">Menambahakan Merek Gaga;!</div>');
            redirect('admin/merek');
        }
    }
    public function action_hapusmerek($id)
    {

        $cek = $this->M_admin->hapusMerek($id);
        if ($this->db->affected_rows($cek) >= 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success message">Hapus Merek Berhasil!</div>');
            redirect('admin/merek');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger message">Hapus Merek Gaga;!</div>');
            redirect('admin/merek');
        }
    }
    public function clients()
    {
        if ($this->cektoken() == true) {
            $data['javascript'] = 'bootstrap-modal.js';

            $data['client'] = $this->M_admin->getAllClients();

            $this->template->load('layout_admin', 'admin/clients', $data);
        } else {
            redirect('admin/login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
