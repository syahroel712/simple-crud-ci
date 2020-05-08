<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kategoriController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->load->library('template');
        $this->load->model('kategoriModel');
        // $this->load->library('session');
        // $this->load->model('M_admin');
        // $this->load->library('pagination');
        // $this->load->model('M_count');
        // $this->load->helper('tgl_indo_helper');
    }
    public function tampilKategori()
    {
        $data['kategori'] = $this->kategoriModel->ambilData();
        // var_dump($data);
        // exit;
        $this->template->utama('kategori/index', $data);
    }
    public function tambahkategori()
    {
        $this->template->utama('kategori/tambah');
    }
    public function addkategori()
    {

        $data = [
            'kategori_nama' => $this->input->post('kategori_nama'),
            'kategori_icon' => ""
        ];

        if ($_FILES['kategori_icon']['size'] != 0) {
            $data['kategori_icon'] = fileUpload($_FILES['kategori_icon'], "img/kategori/");
        }
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        $this->kategoriModel->tambahData($data);
        redirect('tampil-kategori');
    }
    public function editkategori($id)
    {
        $id = $this->uri->segment(2);
        $data['kategori'] = $this->kategoriModel->ambilData($id);
        $this->template->utama('kategori/edit', $data);
    }
    public function updatekategori()
    {
        $id = $this->input->post('kategori_id');
        $row = $this->kategoriModel->ambilData($id);
        $data = [
            'kategori_nama' => $this->input->post('kategori_nama'),
            'kategori_icon' => ""
        ];

        if ($_FILES['kategori_icon']['size'] != 0) {
            unlink("img/kategori/" . $row['kategori_icon']);
            $data['kategori_icon'] = fileUpload($_FILES['kategori_icon'], "img/kategori/");
        } else {
            $data['kategori_icon'] = $this->input->post('kategori_icon_lama');
        }
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        $this->kategoriModel->editData($id, $data);
        redirect('tampil-kategori');
    }
    public function hapuskategori()
    {
        $id = $this->uri->segment(2);
        $row = $this->kategoriModel->ambilData($id);
        unlink("img/kategori/" . $row['kategori_icon']);
        $this->kategoriModel->hapusData($id);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('tampil-kategori');
    }
}
