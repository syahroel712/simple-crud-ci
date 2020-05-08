<?php
defined('BASEPATH') or exit('No direct script access allowed');

class memberController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->load->library('template');
        $this->load->model('memberModel');
        // $this->load->library('session');
        // $this->load->model('M_admin');
        // $this->load->library('pagination');
        // $this->load->model('M_count');
        // $this->load->helper('tgl_indo_helper');
    }
    public function tampilMember()
    {
        $data['member'] = $this->memberModel->ambilData();
        $this->template->utama('member/index', $data);
    }
    public function tambahmember()
    {
        $this->template->utama('member/tambah');
    }
    public function addmember()
    {

        $password = $this->input->post('member_password');
        $pass = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'member_nama' => $this->input->post('member_nama'),
            'member_email' => $this->input->post('member_email'),
            'member_password' => $pass,
            'member_nik' => $this->input->post('member_nik'),
            'member_gender' => $this->input->post('member_gender'),
            'member_notelp' => $this->input->post('member_notelp'),
            'member_bio' => $this->input->post('member_bio'),
            'member_alamat' => $this->input->post('member_alamat'),
            'member_koordinat' => $this->input->post('member_koordinat')
        ];
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        $this->memberModel->tambahData($data);
        redirect('tampil-member');
    }
    public function editmember($id)
    {
        $id = $this->uri->segment(2);
        $data['member'] = $this->memberModel->ambilData($id);
        $this->template->utama('member/edit', $data);
    }
    public function updatemember()
    {
        $id = $this->input->post('member_id');
        $row = $this->memberModel->ambilData($id);

        $password = $this->input->post('member_password');

        if (!empty($password)) {
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'member_nama' => $this->input->post('member_nama'),
                'member_email' => $this->input->post('member_email'),
                'member_password' => $pass,
                'member_nik' => $this->input->post('member_nik'),
                'member_gender' => $this->input->post('member_gender'),
                'member_notelp' => $this->input->post('member_notelp'),
                'member_bio' => $this->input->post('member_bio'),
                'member_alamat' => $this->input->post('member_alamat'),
                'member_koordinat' => $this->input->post('member_koordinat')
            ];
        } else {
            $data = [
                'member_nama' => $this->input->post('member_nama'),
                'member_email' => $this->input->post('member_email'),
                'member_password' => $row['member_password'],
                'member_nik' => $this->input->post('member_nik'),
                'member_gender' => $this->input->post('member_gender'),
                'member_notelp' => $this->input->post('member_notelp'),
                'member_bio' => $this->input->post('member_bio'),
                'member_alamat' => $this->input->post('member_alamat'),
                'member_koordinat' => $this->input->post('member_koordinat')
            ];
        }
        // var_dump($data);
        // exit;
        $this->memberModel->editData($id, $data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        redirect('tampil-member');
    }
    public function hapusmember()
    {
        $id = $this->uri->segment(2);
        $this->memberModel->hapusData($id);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('tampil-member');
    }
}
