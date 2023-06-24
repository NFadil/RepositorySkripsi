<?php
class Mahasiswa extends CI_Controller {
    function index (){
        $this->load->view("NavbarAdmin");
        $this->load->view("DashboardAdmin");
        $this->load->view("Mahasiswa");
        $this->load->view("Footer");
    }
}
?>