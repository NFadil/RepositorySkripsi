<?php
class Kimia extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("KimiaModel","",TRUE);
        ;
    }
    public function index() {
        if($this->session->userdata('login')){
            $level = $this->session->userdata('level');
            $foto = $this->session->userdata('foto');
            $this->load->model('KimiaModel');
            $data['kimia'] = $this->KimiaModel->getKimia();
            $this->load->view("NavbarAdmin");
            $this->load->view("DashboardAdmin");
            $this->load->view("kimia", $data);
            $this->load->view("Footer");
           
    
        }else{
            $this->load->view("login");
        }
        
    }

    public function tambah() {
        $data['kimia'] = $this->KimiaModel->getKimia();
        $this->load->view("NavbarAdmin");
        $this->load->view("DashboardAdmin");
        $this->load->view("Tambah_Kimia", $data);
        $this->load->view("Footer");
    }

    public function prosesTambah() {
        if ($this->KimiaModel->insertKimia()) {
            
            redirect(site_url("kimia"));
        } else {
            redirect(site_url("kimia/tambah"));
        }
    }

    public function update($id) {
        $data['kimia'] = $this->KimiaModel->getKimiaById($id)->row();
        $this->load->view("NavbarAdmin");
        $this->load->view("DashboardAdmin");
        $this->load->view("Update_Kimia", $data);
        $this->load->view("Footer");
    }

    public function prosesUpdate($id) {
        if ($this->KimiaModel->updateKimia($id)) {
            redirect(site_url("Kimia"));
        } else {
            redirect(site_url("Kimia/update/$id"));
        }
    }

    public function hapus($id) {
        $this->KimiaModel->deleteKimia($id);
        redirect(site_url("Kimia"));
    }

}
?>