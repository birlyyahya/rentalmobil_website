<?php

class M_home extends CI_Model
{

    public function getAllKendaraan()
    {
        $this->db->join('reservasi', 'id_kendaraan', 'left');
        $this->db->join('merek_kendaraan', 'id_merek', 'left');
        $this->db->join('transaksi', 'id_booking', 'left');
        $result = $this->db->get('kendaraan');
        return $result->result_array();
    }
    public function getDataPembayaranSumByIdTransaksi($id)
    {
        $this->db->select_sum('dana', 'dibayarkan');
        $this->db->where('id_transaksi', $id);
        return $this->db->get('data_pembayaran')->result_array();
    }
    public function getAllKendaraanReady($data)
    {
        $result = $this->db->query("SELECT * FROM kendaraan LEFT JOIN merek_kendaraan USING(id_merek) LEFT JOIN reservasi using (id_kendaraan) WHERE NOT EXISTS (SELECT id_kendaraan FROM reservasi where reservasi.id_kendaraan=kendaraan.id_kendaraan ) AND nama_kendaraan NOT LIKE '%" . $data['nama_kendaraan'] . "%' OR nama_kendaraan NOT LIKE '%" . $data['nama_kendaraan'] . "%'AND tanggal_ambil NOT BETWEEN '" . $data['tanggal_ambil'] . " " . $data['waktu'] . ":00' AND '" . $data['tanggal_keluar'] . " " . $data['waktu'] . ":00' ");
        return $result->result_array();
    }

    public function getAllKendaraanByDate($data)
    {
        $result = $this->db->query("SELECT * FROM `kendaraan` LEFT JOIN merek_kendaraan USING(id_merek) LEFT JOIN reservasi USING(id_kendaraan) WHERE NOT EXISTS (SELECT id_kendaraan FROM reservasi where reservasi.id_kendaraan=kendaraan.id_kendaraan ) AND nama_kendaraan LIKE '%" . $data['nama_kendaraan'] . "%' OR nama_kendaraan LIKE '%" . $data['nama_kendaraan'] . "%' AND tanggal_ambil NOT BETWEEN '" . $data['tanggal_ambil'] . " " . $data['waktu'] . ":00' AND '" . $data['tanggal_keluar'] . " " . $data['waktu'] . ":00' OR status_reservasi = 'cancel'");
        return $result->result_array();
    }

    public function getKendaraanByID($id)
    {
        $this->db->join('merek_kendaraan', 'id_merek', 'left');
        $this->db->where('id_kendaraan', $id);
        $result = $this->db->get('kendaraan');
        return $result->result_array();
    }
    public function addClients($data)
    {
        $this->db->insert('client', $data);
    }
    public function getClientIdByName($data)
    {
        $this->db->where('email_client', $data['email_client']);
        $this->db->where('nama_client', $data['nama_client']);
        $this->db->where('no_contact', $data['no_contact']);
        $response = $this->db->get('client')->result_array();
        return $response;
    }
    public function addReservasi($data)
    {
        $this->db->insert('reservasi', $data);
    }
    public function getInvoice($data)
    {
        $this->db->join('client', 'id_client', 'left');
        $this->db->join('kendaraan', 'id_kendaraan', 'left');
        $this->db->where('tanggal_booking', $data['tanggal_booking']);
        $this->db->where('id_client', $data['id_client']);
        $this->db->where('id_kendaraan', $data['id_kendaraan']);
        return $this->db->get('reservasi')->result_array();
    }
    public function updateInvoiceReservasi($id_booking, $data)
    {
        $this->db->set($data);
        $this->db->where('id_booking', $id_booking);
        $this->db->update('reservasi');
    }
    public function usercheck($data)
    {
        $this->db->where('nama_client', $data['nama_client']);
        $this->db->where('email_client', $data['email_client']);
        $this->db->where('no_contact', $data['no_contact']);
        $response = $this->db->get('client')->result_array();
        return $response;
    }
    public function addPembayaran($data)
    {
        $this->db->insert('data_pembayaran', $data);
    }

    public function addTransaksi($data)
    {
        $this->db->insert('transaksi', $data);
    }
    public function getTransaksiByIdBooking($id)
    {
        $this->db->where('id_booking', $id);
        return $this->db->get('transaksi')->result_array();
    }
    public function updateTransaksi($id_booking, $data)
    {
        $this->db->set($data);
        $this->db->where('id_transaksi', $id_booking);
        return $this->db->update('transaksi');
    }
    public function findbooking($data)
    {
        $this->db->join('client', 'id_client', 'left');
        $this->db->join('kendaraan', 'id_kendaraan', 'left');
        $this->db->join('transaksi', 'id_booking', 'left');
        $this->db->join('merek_kendaraan', 'id_merek', 'left');
        $this->db->where('email_client', $data['email']);
        $this->db->where('id_booking', $data['idbooking']);
        return $this->db->get('reservasi')->result_array();
    }
    public function getDataPembayaranByTransaksi($data)
    {
        $this->db->where('id_transaksi', $data);
        return $this->db->get('data_pembayaran')->result_array();
    }

    public function addDataPembayaran($data)
    {
        $this->db->insert('data_pembayaran', $data);
    }
}
