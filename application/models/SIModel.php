<?php
class SIModel extends CI_Model{
    function getSI(){
        return $this->db->get('sisteminformasi');
    }
    public function insertSI() {
        $sisteminformasi = array(
            "nama" => $this->input->post("Nama"),
            "judul" => $this->input->post("Judul"),
            "jurusan" => $this->input->post("Jurusan"),
            "angkatan" => $this->input->post("Angkatan"),
            "tahun_publis" => $this->input->post("Tahun_publis"),
            "url" => $this->input->post("Url")
        );
        return $this->db->insert('SistemInformasi', $sisteminformasi);
    }
    function getSIById($id){
        $this->db->where("id_jurnal",$id);
        return $this->db->get('SistemInformasi');
    }
    function updateSI($id){
        $sisteminformasi = array(
            "nama" => $this->input->post("Nama"),
            "judul" => $this->input->post("Judul"),
            "jurusan" => $this->input->post("Jurusan"),
            "angkatan" => $this->input->post("Angkatan"),
            "tahun_publis" => $this->input->post("Tahun_publis"),
            "url" => $this->input->post("url")
        );
        $this->db->where("id_jurnal",$id);
        return $this->db->update("SistemInformasi",$sistemInformasi);
    }
    function deleteSI($id){
        $this->db->where("id_jurnal",$id);
        return $this->db->delete("SistemInformasi");
    }
}
?>