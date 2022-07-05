<?php

class daftar extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_daftar');
    }
    public function index(){
        $queryMhs['daftar'] = $this->model_daftar->getAlldaftar();
        $DATA = array('$queryMhs' => $queryMhs);
        $this->load->view('daftar');
    }
    public function tambah(){
        $this->load->view('tambah');
    }
    public function input(){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $prodi = $this->input->post('prodi');
        $nilai = $this->input->post('nilai');

        $DataInsert = array(
            'nim' => $nim,
            'nama' => $nama,
            'prodi' => $prodi,
            'nilai' => $nilai,
        );

        $this->model_daftar->InsertData($DataInsert);
        redirect(base_url('daftar'));
    }
}
?>