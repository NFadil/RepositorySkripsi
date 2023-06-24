<?php
class Home extends CI_Controller {
    function index (){
        if($this->session->userdata('login')){
            $level = $this->session->userdata('level');
            $foto = $this->session->userdata('foto');
            if ($level == "admin") {
                $this->load->view("NavbarAdmin");
                $this->load->view("DashboardAdmin");
                $this->load->view("Footer");
            } else if ($level == "user") {
                $this->load->view("NavbarUser");
                $this->load->view("DashboardUser");
                $this->load->view("Footer");
            }
        } else {
            $this->load->view("login");
        }
    }
    function register() {
        $this->load->view("register");
    }
    function prosesdaftar(){
        $this->load->model("LoginModel","",TRUE);
        $user = array(
            "username" => $this->input->post("username"),
            "password" => $this->input->post("password"),
            "level" => "user"
            );
            
        $config['upload_path'] = './Asset/img';
        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 100;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            echo $this->upload->display_errors();exit;
        } else {
            $upload_data = $this->upload->data();
            $user['foto'] = base_url("Asset/img/").$upload_data['file_name'];    
        }
        if($this->LoginModel->insertLogin($user)){
            redirect(site_url("Home"));
        }else{
            redirect(site_url("Home/register"));
        }
    }
    function login(){
        $this->load->model("LoginModel");
        $result = $this->LoginModel->login();
        
        if($result->num_rows() > 0){
            $row = $result->row();
            $session_data = array(
                "login" => true,
                "username" => $this->input->post("username"),
                "level" => $row->level,
                "foto" => $row->foto
            );
            $this->session->set_userdata($session_data);
            redirect(site_url("home"));
        } else {
            $this->session->set_flashdata("error", "Username atau Password Salah");
            redirect(site_url("home"));
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
?>
