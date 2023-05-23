<?php
class Update_controller extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/whats-new');
        $this->load->view('templates/footer');
    }
}
