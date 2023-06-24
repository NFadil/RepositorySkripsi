<?php
class InformatikaModel extends CI_Model{
    function getInformatika(){
        return $this->db->get('informatika');
    }
    public function insertInformatika() {
        $informatika = array(
            "nama" => $this->input->post("Nama"),
            "judul" => $this->input->post("Judul"),
            "jurusan" => $this->input->post("Jurusan"),
            "angkatan" => $this->input->post("Angkatan"),
            "tahun_publis" => $this->input->post("Tahun_publis"),
            "url" => $this->input->post("Url")
        );
        return $this->db->insert('informatika', $informatika);
    }
    function getInformatikaById($id){
        $this->db->where("id_jurnal",$id);
        return $this->db->get('informatika');
    }
    function updateInformatika($id){
        $informatika = array(
            "nama" => $this->input->post("Nama"),
            "judul" => $this->input->post("Judul"),
            "jurusan" => $this->input->post("Jurusan"),
            "angkatan" => $this->input->post("Angkatan"),
            "tahun_publis" => $this->input->post("Tahun_publis"),
            "url" => $this->input->post("url")
        );
        $this->db->where("id_jurnal",$id);
        return $this->db->update("informatika",$informatika);
    }
    function deleteInformatika($id){
        $this->db->where("id_jurnal",$id);
        return $this->db->delete("informatika");
    }
}
?>