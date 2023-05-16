<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $title = "SIMTAWA UNISKA | DASHBOARD";

        $this->load->view('template/header',['title'=>$title]);
        $this->load->view('template/sidebar');
        $this->load->view('dashboard_view');
        $this->load->view('template/footer');
    }
}
