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
        $this->cektoken();
    }
    private $secret_key = "rentalmobil2022";
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
    public function wp_admin()
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
            if (!empty($this->input->post('filter'))) {
                $data['kendaraan'] = $this->getAllKendaraanReady();
                $this->template->load('layout_admin', 'admin/mobil', $data);
            } else {
                $data['kendaraan'] = $this->M_admin->getAllKendaraan();
                $this->template->load('layout_admin', 'admin/mobil', $data);
            }
        } else {
            redirect('admin/login');
        }
    }
    public function getKendaraanFilter()
    {
        $filter = $_POST['filter'];
        $data = $this->M_admin->getAllKendaraanFilter($filter);

        foreach($data as $m){
            echo '<tr>';
            echo '<td>
            <div class="custom-checkbox custom-control"  id="label">
                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
            </div>
        </td>';
            echo '<td class="text-capitalize" id="nama">'.$m['nama_kendaraan'].'<div class="table-links">
                    <a href="#">View</a>
                    <div class="bullet"></div>
                    <a href="#">Edit</a>
                    <div class="bullet"></div>
                    <a href="#" class="text-danger">Trash</a>
                </div></td>';
            echo '<td class="text-capitalize" id="merek"><a href="">'.$m['nama_merek'].'</a></td>';
            echo '<td id="seat">'.$m['seats'].'</td>';
            echo '<td id="kilometer">'.$m['kilometer'].'</td>';
            echo '<td id="tahun">'.$m['tahun'].'</td>';
            echo '<td id="harga"><div class="alert alert-warning text-capitalize m-0" >Rp '.number_format($m['harga']).' </div></td>';
            echo '<td id="status">
                <div class="badge badge-success  ">'.$filter.'</div></td>';
            echo '</tr>';
        }
    }
    public function getAllKendaraanReady()
    {
        $data = $this->M_admin->getAllKendaraanReady();
        foreach($data as $m){
            echo '<tr>';
            echo '<td>
            <div class="custom-checkbox custom-control"  id="label">
                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
            </div>
        </td>';
            echo '<td class="text-capitalize" id="nama">'.$m['nama_kendaraan'].'<div class="table-links">
                    <a href="#">View</a>
                    <div class="bullet"></div>
                    <a href="#">Edit</a>
                    <div class="bullet"></div>
                    <a href="#" class="text-danger">Trash</a>
                </div></td>';
            echo '<td class="text-capitalize" id="merek"><a href="">'.$m['nama_merek'].'</a></td>';
            echo '<td id="seat">'.$m['seats'].'</td>';
            echo '<td id="kilometer">'.$m['kilometer'].'</td>';
            echo '<td id="tahun">'.$m['tahun'].'</td>';
            echo '<td id="harga"><div class="alert alert-warning text-capitalize m-0" >Rp '.number_format($m['harga']).' </div></td>';
            echo '<td id="status">
                <div class="badge badge-primary text-capitalize">Ready</div></td>';
            echo '</tr>';
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
                <div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
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
    public function billing()
    {
        if ($this->cektoken() == true) {
            $data['javascript'] = 'bootstrap-modal.js';
            $this->template->load('layout_admin', 'admin/billing', $data);
        } else {
            redirect('admin/login');
        }
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
    public function clients()
    {
        if ($this->cektoken() == true) {
            $data['javascript'] = 'bootstrap-modal.js';
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
