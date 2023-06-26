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

    function Kukuh(){
        if($this->session->userdata('login')){
            $level = $this->session->userdata('level');
            $foto = $this->session->userdata('foto');
            $this->load->view("NavbarUser");
            $this->load->view("DashboardUser");
            $this->load->view('Kukuh');
            $this->load->view("Footer");
           
    
        }else{
            $this->load->view("login");
        }
        
    }

    function Alfin(){
        if($this->session->userdata('login')){
            $level = $this->session->userdata('level');
            $foto = $this->session->userdata('foto');
            $this->load->view("NavbarUser");
            $this->load->view("DashboardUser");
            $this->load->view('Alfin');
            $this->load->view("Footer");
        }else{
            $this->load->view("login");
        } 
    }        

    function Adhani(){
        if($this->session->userdata('login')){
            $level = $this->session->userdata('level');
            $foto = $this->session->userdata('foto');
            $this->load->view("NavbarUser");
            $this->load->view("DashboardUser");
            $this->load->view('Adhani');
            $this->load->view("Footer");
        }else{
            $this->load->view("login");
        } 
    }   
}
?>