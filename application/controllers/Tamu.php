<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * @author : Tri Cahya Wibawa
 * @version : 1.0
 * @since : 11 Februari 2024
 */

class Tamu extends BaseController
{

  public function __construct()
  {
      parent::__construct();
      $this->load->model('tamu_model');
      $this->load->model('crud_model');
  }

  public function index(){
    $this->global['pageTitle'] = 'Buku Tamu Mirota KSM';
    $this->global['pageHeader'] = 'Formulir Pencatatan Tamu';
    
    $data['divisi']= $this->crud_model->lihatdata('tbl_divisi');

    $this->loadViews("tamu/formulir", $this->global, $data, NULL);
  }

  public function save(){
    $nama_tamu = $this->input->post('nama_tamu');
    $alamat_tamu = $this->input->post('alamat_tamu');
    $kontak_tamu = $this->input->post('kontak_tamu');
    $identitas_tamu = $this->input->post('identitas_tamu');
    $asal_instansi = $this->input->post('asal_instansi');
    $janji = $this->input->post('janji');
    $divisi_id = $this->input->post('divisi_id');
    $keperluan = $this->input->post('keperluan');
    $pelayanan = $this->input->post('ratingpelayanan');
    $kerapian = $this->input->post('ratingkerapian');
    $etika = $this->input->post('ratingetika');


    $data = array(
      'nama_tamu' => $nama_tamu,
      'alamat_tamu' => $alamat_tamu,
      'kontak_tamu' => $kontak_tamu,
      'identitas_tamu' => $identitas_tamu,
      'asal_instansi' => $asal_instansi,
      'nama_tamu' => $nama_tamu,
      'janji' => $janji,
      'divisi_id' => $divisi_id,
      'keperluan' => $keperluan,
      'pelayanan' => $pelayanan,
      'kerapian' => $kerapian,
      'etika' => $etika,
      'waktu_masuk' => DATE('Y-m-d H:i:s')
    );

    $query = $this->crud_model->input($data, 'tbl_tamu');

    $this->set_notifikasi_swal('success','Berhasil','Data Berhasil Disimpan');
    redirect('tamu');
  }

  public function getDataTamu(){
    $data = $this->tamu_model->getTamu();
    echo json_encode($data);
  }

  public function bukutamu(){
    $this->global['pageTitle'] = 'Daftar Pengunjung';
    $this->global['pageHeader'] = 'Buku Tamu Mirota KSM';

    $this->loadViews("tamu/data", $this->global, NULL);
  }

  public function penilaiantamu(){
    $this->global['pageTitle'] = 'Daftar Pengunjung';
    $this->global['pageHeader'] = 'Buku Tamu Mirota KSM';

    $data['list_data'] = $this->tamu_model->getTamu();

    $this->loadViews("tamu/penilaian", $this->global, $data, NULL);
  }

  public function keluar(){
    $id_tamu = $this->input->post('id_tamu');
    $waktu_keluar = DATE('Y-m-d H:i:s');

    $where = array(
      'id_tamu' => $id_tamu
    );

    $data = array(
      'waktu_keluar' => $waktu_keluar
    );

    $query = $this->crud_model->update($where, $data, 'tbl_tamu');

    echo json_encode($data);
  }

}