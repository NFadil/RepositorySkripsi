<?php
class Informatika extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("InformatikaModel","",TRUE);
        ;
    }
    public function index() {
        if($this->session->userdata('login')){
            $level = $this->session->userdata('level');
            $foto = $this->session->userdata('foto');
            $this->load->model('InformatikaModel');
            $data['informatika'] = $this->InformatikaModel->getInformatika();
            $this->load->view("NavbarAdmin");
            $this->load->view("DashboardAdmin");
            $this->load->view("Informatika", $data);
            $this->load->view("Footer");
           
    
        }else{
            $this->load->view("login");
        }
        
    }

    public function tambah() {
        $data['informatika'] = $this->InformatikaModel->getinformatika();
        $this->load->view("Tambah_If", $data);
    }

    public function prosesTambah() {
        if ($this->InformatikaModel->insertinformatika()) {
            redirect(site_url("informatika"));
        } else {
            redirect(site_url("informatika/tambah"));
        }
    }

    public function update($id) {
        $data['informatika'] = $this->InformatikaModel->getInformatikaById($id)->row();
        $this->load->view("Informatika_Update", $data);
    }

    public function prosesUpdate($id) {
        if ($this->InformatikaModel->updateInformatika($id)) {
            redirect(site_url("informatika"));
        } else {
            redirect(site_url("informatika/update/$id"));
        }
    }

    public function hapus($id) {
        $this->InformatikaModel->deleteInformatika($id);
        redirect(site_url("informatika"));
    }

}
?>