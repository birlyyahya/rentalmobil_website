<?php

class M_home extends CI_Model
{

    public function getAllKendaraan()
    {
        $this->db->join('reservasi','id_kendaraan','left');
        $this->db->join('merek_kendaraan','id_merek','left');
        $this->db->join('transaksi','id_booking','left');
        $result = $this->db->get('kendaraan');
        return $result->result_array();
    }

    public function getAllKendaraanReady()
    {
        $result = $this->db->query('SELECT * FROM kendaraan LEFT JOIN merek_kendaraan USING(id_merek) WHERE NOT EXISTS (SELECT id_booking FROM reservasi where reservasi.id_kendaraan=kendaraan.id_kendaraan)');
        return $result->result_array();
    }
 
    public function getAllKendaraanByDate($data)
    {
        $result = $this->db->query("SELECT * FROM `kendaraan` LEFT JOIN merek_kendaraan USING(id_merek) LEFT JOIN reservasi USING(id_kendaraan) WHERE nama_kendaraan= '".$data['nama_kendaraan']."' AND tanggal_kembali NOT BETWEEN '".$data['tanggal_ambil']." ".$data['waktu'].":10' AND '".$data['tanggal_keluar']." ".$data['waktu'].":10'");
        return $result->result_array();
    }

    public function getKendaraanByID($id)
    {
        $this->db->join('merek_kendaraan','id_merek','left');
        $this->db->where('id_kendaraan',$id);
        $result = $this->db->get('kendaraan');
        return $result->result_array();
    }
    public function addClients($data)
    {
        $this->db->insert('client',$data);
        
    }
    public function getClientIdByName($data)
    {
        $this->db->where('nama_client',$data);
        $response = $this->db->get('client');
        return $response->result_array();

    }
}
