<?php
class SistemInformasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("SIModel","",TRUE);
        ;
    }
    public function index() {
        if($this->session->userdata('login')){
            $level = $this->session->userdata('level');
            $foto = $this->session->userdata('foto');
            $this->load->model('SIModel');
            $data['sisteminformasi'] = $this->SIModel->getSI();
            $this->load->view("NavbarAdmin");
            $this->load->view("DashboardAdmin");
            $this->load->view("SistemInformasi", $data);
            $this->load->view("Footer");
           
    
        }else{
            $this->load->view("login");
        }
        
    }
    public function tambah() {
        $data['sisteminformasi'] = $this->SIModel->getSI();
        $this->load->view("NavbarAdmin");
            $this->load->view("DashboardAdmin");
        $this->load->view("Tambah_SI", $data);
        $this->load->view("Footer");
    }

    public function prosesTambah() {
        if ($this->SIModel->insertSI()) {
            redirect(site_url("SistemInformasi"));
        } else {
            redirect(site_url("SistemInformasi/tambah"));
        }
    }

    public function update($id) {
        $data['sisteminformasi'] = $this->SIModel->getSIById($id)->row();
        $this->load->view("NavbarAdmin");
        $this->load->view("DashboardAdmin");
        $this->load->view("Update_SI", $data);
        $this->load->view("Footer");
    }

    public function prosesUpdate($id) {
        if ($this->SIModel->updateSI($id)) {
            redirect(site_url("SistemInformasi"));
        } else {
            redirect(site_url("SistemInformasi/update/$id"));
        }
    }

    public function hapus($id) {
        $this->SIModel->deleteSI($id);
        redirect(site_url("SistemInformasi"));
    }

}
?>