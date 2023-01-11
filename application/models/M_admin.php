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
    public function addMerek($data)
    {
        $this->db->insert('merek_kendaraan',$data);
    }
    public function hapusMerek($id)
    {
        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        $this->db->where('id_merek',$id);
        $this->db->delete('merek_kendaraan');
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');
    }
    public function getAllKendaraan()
    {
        $this->db->join('reservasi','id_kendaraan','left');
        $this->db->join('merek_kendaraan','id_merek','left');
        $this->db->join('transaksi','id_booking','left');
        $this->db->group_by('id_kendaraan');
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
        $result = $this->db->query("SELECT * FROM kendaraan LEFT JOIN merek_kendaraan USING(id_merek) LEFT JOIN reservasi using (id_kendaraan) LEFT JOIN transaksi using(id_booking) WHERE NOT EXISTS (SELECT id_kendaraan FROM reservasi where reservasi.id_kendaraan=kendaraan.id_kendaraan ) OR status_kendaraan = 'ready' OR status_kendaraan is NULL OR id_transaksi is NULL ");
        return $result->result_array();
    }
    public function deleteKendaraan($id)
    {
        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        $this->db->where('id_kendaraan',$id);
        $this->db->delete('kendaraan');
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');
    }
    public function getAllMerek()
    {
        $result = $this->db->get('merek_kendaraan');
        return $result->result_array();

    }
    public function getDataPembayaranSumByIdTransaksi($id)
    {
        $this->db->select_sum('dana','dibayarkan');
        $this->db->where('id_transaksi',$id);
        return $this->db->get('data_pembayaran')->result_array();

    }
    public function getAllKendaraanByDate()
    {
        $result = $this->db->query("SELECT * FROM `reservasi` WHERE tanggal_kembali NOT BETWEEN '2022-12-14 18:24:10' AND '2022-12-15 18:23:10'");
        return $result->result_array();
    }
    public function getDataPembayaranByIdTransaksi($id)
    {
        $this->db->where('id_transaksi',$id);
        return $this->db->get('data_pembayaran')->result_array();
    }
    public function getBilling($data)
    {
        $this->db->join('transaksi','id_booking','LEFT');
        $this->db->join('client','id_client','LEFT');
        $this->db->join('kendaraan','id_kendaraan','LEFT');
        $this->db->join('merek_kendaraan','id_merek','LEFT');
        $this->db->where('status_transaksi',$data);
        return $this->db->get('reservasi')->result_array();
    }
    public function getAllDataPembayaranPending()
    {
        $this->db->JOIN('transaksi','id_transaksi','LEFT');
        $this->db->JOIN('client','id_client','LEFT');
        $this->db->where("status_pembayaran = 'pending'");
        return $this->db->get('data_pembayaran')->result_array();
    }
    public function getAllDataPembayaran()
    {
        $this->db->JOIN('transaksi','id_transaksi','LEFT');
        $this->db->JOIN('client','id_client','LEFT');
        return $this->db->get('data_pembayaran')->result_array();
    }
    public function getTransaksiByIdBooking($id)
    {
        $this->db->select('id_transaksi');
        $this->db->where('id_booking',$id);
        return $this->db->get('transaksi')->result_array();
    }
    public function KonfirmDataPembayaranToTransaksi($idPembayaran,$idTransaksi)
    {
        $this->db->set('id_transaksi',$idTransaksi);
        $this->db->where('id_pembayaran',$idPembayaran);
        $this->db->update('data_pembayaran');
    }
    public function updateTransaksiStatus($id,$data)
    {
        $this->db->set($data);
        $this->db->where('id_transaksi',$id);
        $this->db->update('transaksi');
    }
    public function updatePembayaranStatus($id,$data)
    {
        $this->db->set($data);
        $this->db->where('id_pembayaran',$id);
        $this->db->update('data_pembayaran');
    }
    public function updateReservasiStatus($id,$data)
    {
        $this->db->set('status_reservasi',$data);
        $this->db->where('id_booking',$id);
        $this->db->update('reservasi');
    }
    public function getAllClients()
    {
        $this->db->join('reservasi','id_client','LEFT');
        $this->db->join('transaksi','id_booking','LEFT');
        return $this->db->get('client')->result_array();
    }
    
    function checkInvoice($data)
    {
        return $this->db->query("SELECT id_transaksi, total_harga, SUM(dana) as dibayar from transaksi JOIN data_pembayaran USING(id_transaksi) WHERE id_transaksi = ".$data['idTransaksi']." HAVING SUM(dana) >= total_harga ")->result_array();
    }
}
