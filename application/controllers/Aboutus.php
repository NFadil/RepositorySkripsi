<?php
class Aboutus extends CI_Controller{

    function Nurul(){
        if($this->session->userdata('login')){
            $level = $this->session->userdata('level');
            $foto = $this->session->userdata('foto');
            $this->load->view("NavbarUser");
            $this->load->view("DashboardUser");
            $this->load->view('Nurul');
            $this->load->view("Footer");
           
    
        }else{
            $this->load->view("login");
        }
        
    }
        
        
        
}
?>