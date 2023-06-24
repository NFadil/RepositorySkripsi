<?php
class KimiaModel extends CI_Model{
    function getKimia(){
        return $this->db->get('Kimia');
    }
    public function insertKimia() {
        $kimia = array(
            "nama" => $this->input->post("Nama"),
            "judul" => $this->input->post("Judul"),
            "jurusan" => $this->input->post("Jurusan"),
            "angkatan" => $this->input->post("Angkatan"),
            "tahun_publis" => $this->input->post("Tahun_publis"),
            "url" => $this->input->post("Url")
        );
        return $this->db->insert('kimia', $kimia);
    }
    function getKimiaById($id){
        $this->db->where("id_jurnal",$id);
        return $this->db->get('kimia');
    }
    function updateKimia($id){
        $kimia = array(
            "nama" => $this->input->post("Nama"),
            "judul" => $this->input->post("Judul"),
            "jurusan" => $this->input->post("Jurusan"),
            "angkatan" => $this->input->post("Angkatan"),
            "tahun_publis" => $this->input->post("Tahun_publis"),
            "url" => $this->input->post("url")
        );
        $this->db->where("id_jurnal",$id);
        return $this->db->update("kimia",$kimia);
    }
    function deleteKimia($id){
        $this->db->where("id_jurnal",$id);
        return $this->db->delete("kimia");
    }
}
?>