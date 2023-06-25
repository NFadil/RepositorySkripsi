<?php
class User extends CI_Controller {
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
        $this->load->view("User",$data);
        $this->load->view("Footer");
    }
}
?>