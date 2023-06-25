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
            $informatika['url'] = base_url("Asset/doc/") . $upload_data['file_name'];    
        }
        
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
            $informatika['url'] = base_url("Asset/doc/") . $upload_data['file_name'];    
        }
        $this->db->where("id_jurnal",$id);
        return $this->db->update("informatika",$informatika);
    }
    function deleteInformatika($id){
        $this->db->where("id_jurnal",$id);
        return $this->db->delete("informatika");
    }
}
?>