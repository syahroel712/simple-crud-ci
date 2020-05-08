<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aduanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->load->library('template');
        $this->load->model('aduanModel');
        // $this->load->library('session');
        // $this->load->model('M_admin');
        // $this->load->library('pagination');
        // $this->load->model('M_count');
        // $this->load->helper('tgl_indo_helper');
    }

    public function index()
    {
        $this->form_validation->set_rules('member_email', 'Email', 'required|trim');
        $this->form_validation->set_rules('member_password', 'Password', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            redirect('masuk');
        } else {
            $email = $this->input->POST('member_email');
            $password = $this->input->POST('member_password');
            $user = $this->db->GET_WHERE('tb_member', ['member_email' => $email])->row_array();
            if ($user['member_email'] == $email) {
                if (password_verify($password, $user['member_password'])) {
                    $data = [
                        'member_id' => $user['member_id'],
                        'member_nama' => $user['member_nama'],
                        'member_email' => $user['member_email'],
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('pesan', 'Selamat Datang ' . $data['member_nama']);
                    redirect('home');
                } else {
                    $this->session->set_flashdata('error', 'Username dan Password Salah');
                    redirect('masuk');
                }
            } else {
                $this->session->set_flashdata('error', 'Username dan Password Salah');
                redirect('masuk');
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata(array('member_id', 'member_nama', 'member_email'));
        $this->session->set_flashdata('pesan', 'Anda Telah Logout.');
        // $this->load->view('login/login');
        redirect('masuk');
    }


    public function home()
    {
        if (!empty($this->session->userdata('member_email'))) {
            $this->template->utama('home');
        } else {
            redirect('masuk');
        }
    }
    public function masuk()
    {
        if (!empty($this->session->userdata('member_email'))) {
            $this->session->set_flashdata('local', 'Anda Belum Logout.');
            redirect('home', 'refresh');
        } else {
            $this->load->view('login/login');
        }
    }

    public function tampilAduan()
    {
        $data['aduan'] = $this->aduanModel->ambilData();
        // var_dump($data);
        // exit;
        $this->template->utama('aduan/index', $data);
    }
    public function tambahAduan()
    {
        $this->template->utama('aduan/tambah');
    }
    public function addAduan()
    {

        $data = [
            'aduan_isi' => $this->input->post('aduan_isi'),
            'aduan_foto' => ""
        ];

        if ($_FILES['aduan_foto']['size'] != 0) {
            $data['aduan_foto'] = fileUpload($_FILES['aduan_foto'], "img/aduan/");
        }
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        $this->aduanModel->tambahData($data);
        redirect('tampil-aduan');
    }
    public function editAduan($id)
    {
        $id = $this->uri->segment(2);
        $data['aduan'] = $this->aduanModel->ambilData($id);
        $this->template->utama('aduan/edit', $data);
    }
    public function updateAduan()
    {
        $id = $this->input->post('aduan_id');
        $row = $this->aduanModel->ambilData($id);
        $data = [
            'aduan_isi' => $this->input->post('aduan_isi'),
            'aduan_foto' => ""
        ];

        if ($_FILES['aduan_foto']['size'] != 0) {
            unlink("img/aduan/" . $row['aduan_foto']);
            $data['aduan_foto'] = fileUpload($_FILES['aduan_foto'], "img/aduan/");
        } else {
            $data['aduan_foto'] = $this->input->post('aduan_foto_lama');
        }
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
        $this->aduanModel->editData($id, $data);
        redirect('tampil-aduan');
    }
    public function hapusAduan()
    {
        $id = $this->uri->segment(2);
        $row = $this->aduanModel->ambilData($id);
        unlink("img/aduan/" . $row['aduan_foto']);
        $this->aduanModel->hapusData($id);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('tampil-aduan');
    }
}
