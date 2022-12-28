<?php

class M_admin extends CI_Model
{
    public function cekLoginAdmin($data)
    {
        $this->db->where($data);
        $result = $this->db->get('admin');
        return $result->row_array();
    }
    public function cekUser($data)
    {
        $this->db->where('username',$data);
        $result = $this->db->get('admin');
        return $result->row_array();
    }
    public function addKendaraan($data)
    {
        $this->db->insert('kendaraan',$data);
    }
    public function getAllKendaraan()
    {
        $this->db->join('reservasi','id_kendaraan','left');
        $this->db->join('merek_kendaraan','id_merek','left');
        $this->db->join('transaksi','id_booking','left');
        $result = $this->db->get('kendaraan');
        return $result->result_array();
    }
    public function getAllKendaraanFilter($filter)
    {
        $this->db->join('reservasi','id_kendaraan','left');
        $this->db->join('merek_kendaraan','id_merek','left');
        $this->db->join('transaksi','id_booking','left');
        $this->db->where('status_kendaraan',$filter);
        $result = $this->db->get('kendaraan');
        return $result->result_array();
    }
    public function getAllKendaraanReady()
    {
        $result = $this->db->query('SELECT * FROM kendaraan LEFT JOIN merek_kendaraan USING(id_merek) WHERE NOT EXISTS (SELECT id_booking FROM reservasi where reservasi.id_kendaraan=kendaraan.id_kendaraan)');
        return $result->result_array();
    }
    public function getAllMerek()
    {
        $result = $this->db->get('merek_kendaraan');
        return $result->result_array();

    }
    public function getAllKendaraanByDate()
    {
        $result = $this->db->query("SELECT * FROM `reservasi` WHERE tanggal_kembali NOT BETWEEN '2022-12-14 18:24:10'AND '2022-12-15 18:23:10'");
        return $result->result_array();
    }
}
