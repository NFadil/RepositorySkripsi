<?php
class Admin extends CI_Controller {
    function index(){
        $this->load->view("DashboardAdmin");
        $this->load->view("Jurnal");
    }
}
?>