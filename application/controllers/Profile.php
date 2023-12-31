<?php
class Profile extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("LoginModel","",TRUE);
        ;
    }
    function index (){
        $this->load->view("NavbarAdmin");
        $this->load->view("DashboardAdmin");
        $this->load->model('LoginModel');
        $data['login'] = $this->LoginModel->getLogin();
        // $data2['login'] = $this->LoginModel->getLoginById($id)->row();
        $this->load->view("Profile",$data);
        $this->load->view("Footer");
    }
    function User (){
        $this->load->view("NavbarUser");
        $this->load->view("DashboardUser");
        $this->load->model('LoginModel');
        $data['login'] = $this->LoginModel->getLogin();
        // $data2['login'] = $this->LoginModel->getLoginById($id)->row();
        $this->load->view("ProfileUser",$data);
        $this->load->view("Footer");
    }
    public function update($id) {
        $data['login'] = $this->LoginModel->getLoginById($id)->row();
        $this->load->view("NavbarAdmin");
        $this->load->view("DashboardAdmin");
        $this->load->view("Update_profile", $data);
        $this->load->view("Footer");
    }
    public function updateUser($id) {
        $data['login'] = $this->LoginModel->getLoginById($id)->row();
        $this->load->view("NavbarUser");
        $this->load->view("DashboardUser");
        $this->load->view("Update_profileUser", $data);
        $this->load->view("Footer");
    }
    public function prosesUpdate($id) {
        if ($this->LoginModel->updateLoginAdmin($id)) {
            redirect(site_url("Home/logout"));
        }
    }
    public function prosesUpdateUser($id) {
        if ($this->LoginModel->updateLoginUser($id)) {
            redirect(site_url("Home/logout"));
        }
    }
    
}
?>