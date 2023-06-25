<?php
class SIModel extends CI_Model{
    function getSI(){
        return $this->db->get('sisteminformasi');
    }
    function totalDataSI() {
        return $this->db->count_all('sisteminformasi');
    }  
    public function insertSI() {
        $sisteminformasi = array(
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
            $sisteminformasi['url'] = base_url("Asset/doc/") . $upload_data['file_name'];    
        }
        
        return $this->db->insert('sisteminformasi', $sisteminformasi);
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
            $sisteminformasi['url'] = base_url("Asset/doc/") . $upload_data['file_name'];    
        }
        $this->db->where("id_jurnal",$id);
        return $this->db->update("sisteminformasi",$sisteminformasi);
    }
    function deleteSI($id){
        $this->db->where("id_jurnal",$id);
        return $this->db->delete("sisteminformasi");
    }
}
?>