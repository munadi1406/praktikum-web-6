<?php
class Lingkaran extends CI_Controller
{
    public function index($luas)
    {
        $title = "menghitung lingkaran";
        $this->load->model('Lingkaran_model');
        $data = $this->Lingkaran_model->hitungLuas($luas);
        $this->load->view('hitung_lingkaran', ['data' => $data, 'title' => $title, 'luas' => $luas]);
    }
}
