<?php
class KimiaModel extends CI_Model{
    function getKimia(){
        return $this->db->get('Kimia');
    }
    function totalDataKimia() {
        return $this->db->count_all('kimia');
    }  
    public function insertKimia() {
        $kimia = array(
            "nama" => $this->input->post("Nama"),
            "judul" => $this->input->post("Judul"),
            "jurusan" => $this->input->post("Jurusan"),
            "angkatan" => $this->input->post("Angkatan"),
            "tahun_publis" => $this->input->post("Tahunpublish")
        );
        
        $config['upload_path'] = './Asset/doc';
        $config['allowed_types'] = 'pdf';
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('Url')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit;
        } else {
            $upload_data = $this->upload->data();
            $kimia['url'] = base_url("Asset/doc/") . $upload_data['file_name'];    
        }
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
            "tahun_publis" => $this->input->post("Tahunpublish")
        );
        
        $config['upload_path'] = './Asset/doc';
        $config['allowed_types'] = 'pdf';
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('Url')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit;
        } else {
            $upload_data = $this->upload->data();
            $kimia['url'] = base_url("Asset/doc/") . $upload_data['file_name'];    
        }
        $this->db->where("id_jurnal",$id);
        return $this->db->update("kimia",$kimia);
    }
    function deleteKimia($id){
        $this->db->where("id_jurnal",$id);
        return $this->db->delete("kimia");
    }
}
?>