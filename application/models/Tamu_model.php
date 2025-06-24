<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Tamu_model extends CI_Model
{

  function getTamu(){
    $this->db->select('id_tamu, nama_tamu, alamat_tamu, identitas_tamu, kontak_tamu, asal_instansi, janji, divisi_id, keperluan, nama_divisi, DATE(waktu_masuk) as tgl_masuk, TIME(waktu_masuk) as jam_masuk, DATE(waktu_keluar) as tgl_keluar, TIME(waktu_keluar) as jam_keluar, pelayanan, kerapian, etika ');
    $this->db->from('tbl_tamu a');
    $this->db->join('tbl_divisi b','b.id_divisi = a.divisi_id');
    $this->db->order_by('id_tamu','DESC');
    $query = $this->db->get();

    return $query->result();
  }
  function getDataMobil(){
    $this->db->select('*');
    $this->db->from('tbl_kendaraan');
    $this->db->where('jenis_kendaraan','mobil');
    $query = $this->db->get();

    return $query->result();
  }

  function getDataMontor(){
    $this->db->select('*');
    $this->db->from('tbl_kendaraan');
    $this->db->where('jenis_kendaraan','montor');
    $query = $this->db->get();

    return $query->result();
  }

  function getDataKendaraanById($id){

    $this->db->select('*');
    $this->db->from('tbl_kendaraan');
    $this->db->where('id_kendaraan',$id);
    $query = $this->db->get();
    $result = $query->row();
    return $result;
  }

  function getDataPerawatanByIdKendaraan($id){
    $this->db->select('DATE(tgl_perawatan) as tanggal, TIME(tgl_perawatan) as waktu, detail_perawatan, id_perawatan_kendaraan');
    $this->db->from('tbl_perawatan_kendaraan a');
    $this->db->join('tbl_kendaraan b', 'b.id_kendaraan = a.kendaraan_id');
    $this->db->where('id_kendaraan',$id);
    $query = $this->db->get();

    return $query->result();
  }
}