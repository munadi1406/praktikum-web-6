<?php 
class Kategori extends CI_Controller{
    public function index(){
        $title = "SIMTAWA UNISKA | Kategori Prestasi ";
        $this->load->model('Kategori_model');
        $data = $this->Kategori_model->get_kategori();

        $this->load->view('template/header',['title'=>$title]);
        $this->load->view('template/sidebar');
        $this->load->view('kategori/tampil_data',['data'=>$data]);
        $this->load->view('template/footer');
    }
}