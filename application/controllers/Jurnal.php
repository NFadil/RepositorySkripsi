<?php
class Jurnal extends CI_Controller {
    function index(){
        $this->load->view("NavbarAdmin");
        $this->load->view("DashboardAdmin");
        $this->load->view("Jurnal");
        $this->load->view("Footer");
    }
}
?>