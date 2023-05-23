<?php
class Kategori extends CI_Controller
{
    public function index()
    {
        $title = "SIMTAWA UNISKA | Kategori Prestasi ";
        $this->load->model('Kategori_model');
        $data = $this->Kategori_model->get_kategori();

        $this->load->view('template/header', ['title' => $title]);
        $this->load->view('template/sidebar');
        $this->load->view('kategori/tampil_data', ['data' => $data]);
        $this->load->view('template/footer');
    }


    public function tambah()
    {

        $title = "SIMTAWA UNISKA | Tambah Kategori Prestasi ";
        $this->load->model('Kategori_model');
        if (isset($_POST['simpan'])) {
            $this->Kategori_model->tambah_kategori();
            redirect('kategori');
        } else {
            $this->load->view('template/header', ['title' => $title]);
            $this->load->view('template/sidebar');
            $this->load->view('kategori/tambah_data');
            $this->load->view('template/footer');
        }
    }
    public function ubah($id)
    {
        $title = "SIMTAWA UNISKA | Tambah Kategori Prestasi ";
        $this->load->model('Kategori_model');
        if (isset($_POST['simpan'])) {
            $this->Kategori_model->ubah_kategori($id);
            redirect('kategori');
        } else {
            $data['kategori'] = $this->Kategori_model->get_kategori_byid($id);
            $title = "SIMTAWA UNISKA |"." Ubah ".$data['kategori']->nama_kategori;
            $this->load->view('template/header', ['title' => $title]);
            $this->load->view('template/sidebar');
            $this->load->view('kategori/ubah_data',$data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id){
       
        $this->load->model('Kategori_model');
        $this->Kategori_model->hapus_kategori($id);
        redirect('kategori');
    }
}
