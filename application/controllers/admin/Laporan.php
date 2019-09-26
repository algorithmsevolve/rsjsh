<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('laporan_model');
    $this->load->model('komentar_model');
  }

  function show_laporan_mk()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $parameter = 'Menunggu Konfirmasi';
    $data['title'] = "Laporan Menunggu Konfirmasi";
    $data['laporan_air'] = $this->laporan_model->get_laporan_air($parameter);
    $data['laporan_bangunan'] = $this->laporan_model->get_laporan_bangunan($parameter);
    $data['laporan_furnitur'] = $this->laporan_model->get_laporan_furnitur($parameter);
    $data['laporan_listrik'] = $this->laporan_model->get_laporan_listrik($parameter);
    $data['laporan_peralatan'] = $this->laporan_model->get_laporan_peralatan($parameter);
    $this->load->view('admin/show_laporan_v.php', $data);
  }

  function show_laporan_dk()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $parameter = 'Sedang Dikerjakan';
    $data['title'] = "Laporan Sedang Dikerjakan";
    $data['laporan_air'] = $this->laporan_model->get_laporan_air($parameter);
    $data['laporan_bangunan'] = $this->laporan_model->get_laporan_bangunan($parameter);
    $data['laporan_furnitur'] = $this->laporan_model->get_laporan_furnitur($parameter);
    $data['laporan_listrik'] = $this->laporan_model->get_laporan_listrik($parameter);
    $data['laporan_peralatan'] = $this->laporan_model->get_laporan_peralatan($parameter);
    $this->load->view('admin/show_laporan_v.php', $data);
  }

  function show_laporan_s()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $parameter = 'Selesai';
    $data['title'] = "Laporan Selesai";
    $data['laporan_air'] = $this->laporan_model->get_laporan_air($parameter);
    $data['laporan_bangunan'] = $this->laporan_model->get_laporan_bangunan($parameter);
    $data['laporan_furnitur'] = $this->laporan_model->get_laporan_furnitur($parameter);
    $data['laporan_listrik'] = $this->laporan_model->get_laporan_listrik($parameter);
    $data['laporan_peralatan'] = $this->laporan_model->get_laporan_peralatan($parameter);
    $this->load->view('admin/show_laporan_v.php', $data);
  }

  function show_laporan_semua()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    //laporan selesai
    $parameter_s = 'Selesai';
    $data['laporan_air_s'] = $this->laporan_model->get_laporan_air($parameter_s);
    $data['laporan_bangunan_s'] = $this->laporan_model->get_laporan_bangunan($parameter_s);
    $data['laporan_furnitur_s'] = $this->laporan_model->get_laporan_furnitur($parameter_s);
    $data['laporan_listrik_s'] = $this->laporan_model->get_laporan_listrik($parameter_s);
    $data['laporan_peralatan_s'] = $this->laporan_model->get_laporan_peralatan($parameter_s);

    //laporan menunggu konfirmasi
    $parameter_mk = 'Menunggu Konfirmasi';
    $data['laporan_air_mk'] = $this->laporan_model->get_laporan_air($parameter_mk);
    $data['laporan_bangunan_mk'] = $this->laporan_model->get_laporan_bangunan($parameter_mk);
    $data['laporan_furnitur_mk'] = $this->laporan_model->get_laporan_furnitur($parameter_mk);
    $data['laporan_listrik_mk'] = $this->laporan_model->get_laporan_listrik($parameter_mk);
    $data['laporan_peralatan_mk'] = $this->laporan_model->get_laporan_peralatan($parameter_mk);

    //laporan sedang dikerjakan
    $parameter_sd = 'Sedang Dikerjakan';
    $data['laporan_air_sd'] = $this->laporan_model->get_laporan_air($parameter_sd);
    $data['laporan_bangunan_sd'] = $this->laporan_model->get_laporan_bangunan($parameter_sd);
    $data['laporan_furnitur_sd'] = $this->laporan_model->get_laporan_furnitur($parameter_sd);
    $data['laporan_listrik_sd'] = $this->laporan_model->get_laporan_listrik($parameter_sd);
    $data['laporan_peralatan_sd'] = $this->laporan_model->get_laporan_peralatan($parameter_sd);

    $this->load->view('admin/show_semua_laporan_v.php', $data);
  }

  function show_laporan()
  {
    $data['new_msg'] = $this->komentar_model->jumlah_komentar_0();
    $nomor_laporan = $this->input->get('id');
    $jenis_laporan = $this->input->get('jenis_laporan');
    $data['laporan'] = $this->laporan_model->get_laporan($jenis_laporan, $nomor_laporan);
    $data['pesan'] = $this->komentar_model->get_pesan($nomor_laporan);
    $this->load->view('admin/show_detail_laporan_v.php', $data);
  }
}


/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */
