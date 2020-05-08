<?php
defined('BASEPATH') or exit('No direct script access allowed');

class postingController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->load->library('template');
        $this->load->model('postingModel');
        $this->load->model('kategoriModel');
        // $this->load->library('session');
        // $this->load->model('M_admin');
        // $this->load->library('pagination');
        // $this->load->model('M_count');
        // $this->load->helper('tgl_indo_helper');
    }
    public function tampilPosting()
    {
        $data['posting'] = $this->postingModel->ambilDataPosting();
        $this->template->utama('posting/index', $data);
    }
    public function tambahPosting()
    {
        $data['kategori'] = $this->kategoriModel->ambilData();
        $this->template->utama('posting/tambah', $data);
    }
    public function addPosting()
    {

        $data = [
            'posting_judul' => $this->input->post('posting_judul'),
            'posting_lokasi' => $this->input->post('posting_lokasi'),
            'posting_url' => $this->input->post('posting_url'),
            'posting_cover' => "",
            'posting_isi' => $this->input->post('posting_isi'),
            'kategori_id' => $this->input->post('kategori_id')
        ];

        if ($_FILES['posting_cover']['size'] != 0) {
            $data['posting_cover'] = fileUpload($_FILES['posting_cover'], "img/posting/");
        }
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        $this->postingModel->tambahData($data);
        redirect('tampil-posting');
    }
    public function editPosting($id)
    {
        $id = $this->uri->segment(2);
        $data['posting'] = $this->postingModel->ambilData($id);
        $data['kategori'] = $this->kategoriModel->ambilData();
        $this->template->utama('posting/edit', $data);
    }
    public function updatePosting()
    {
        $id = $this->input->post('posting_id');
        $row = $this->postingModel->ambilData($id);
        $data = [
            'posting_judul' => $this->input->post('posting_judul'),
            'posting_lokasi' => $this->input->post('posting_lokasi'),
            'posting_url' => $this->input->post('posting_url'),
            'posting_cover' => "",
            'posting_isi' => $this->input->post('posting_isi'),
            'kategori_id' => $this->input->post('kategori_id')
        ];

        if ($_FILES['posting_cover']['size'] != 0) {
            unlink("img/posting/" . $row['posting_cover']);
            $data['posting_cover'] = fileUpload($_FILES['posting_cover'], "img/posting/");
        } else {
            $data['posting_cover'] = $this->input->post('posting_cover_lama');
        }
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        $this->postingModel->editData($id, $data);
        redirect('tampil-posting');
    }
    public function hapusPosting()
    {
        $id = $this->uri->segment(2);
        $row = $this->postingModel->ambilData($id);
        unlink("img/posting/" . $row['posting_cover']);
        $this->postingModel->hapusData($id);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('tampil-posting');
    }
}
