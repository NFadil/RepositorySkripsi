<?php
class LoginModel extends CI_Model{
    function getLogin(){
        return $this->db->get('login');
    }
    function totalDataLogin(){
        return $this->db->count_all('login');
    }
    function insertLogin($login){
        return $this->db->insert("login",$login);
    }
    function login(){
        $username = $this->input->post("username");
        $pass = $this->input->post("password");
        $this->db->where("username",$username);
        $this->db->where("password",$pass);
        return $this->db->get("login");
    }
    function getLoginById($id){
        $this->db->where("id_login",$id);
        return $this->db->get('login');
    }
    function updateLoginUser($user){
        $user = array(
        "username" => $this->input->post("username"),
        "password" => $this->input->post("password"),
        "level" => "user"
        );
        $config['upload_path'] = './Asset/img';
        $config['allowed_types'] = 'gif|jpg|png';
        
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            echo $this->upload->display_errors();exit;
        } else {
            $upload_data = $this->upload->data();
            $user['foto'] = base_url("Asset/img/").$upload_data['file_name'];    
        }
        if($this->LoginModel->insertLogin($user)){
            redirect(site_url("Profile"));
        }else{
            redirect(site_url("Profile"));
        }
        $this->db->where("id_login",$id);
        return $this->db->update("login",$user);
    }
    function updateLoginAdmin($user){
        $user = array(
            "username" => $this->input->post("username"),
            "password" => $this->input->post("password"),
            "level" => "user"
            );
            $config['upload_path'] = './Asset/img';
            $config['allowed_types'] = 'gif|jpg|png';
            
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo $this->upload->display_errors();exit;
            } else {
                $upload_data = $this->upload->data();
                $user['foto'] = base_url("Asset/img/").$upload_data['file_name'];    
            }
            if($this->LoginModel->insertLogin($user)){
                redirect(site_url("Profile"));
            }else{
                redirect(site_url("Profile"));
            }
            $this->db->where("id_login",$id);
            return $this->db->update("login",$user);
        }
    function deletelogin($id){
        $this->db->where("id_login",$id);
        return $this->db->delete("login");
    }
}
?>