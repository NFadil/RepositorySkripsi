<?php
class LoginModel extends CI_Model{
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
    function updateLogin($user){
        $user = array(
        "username" => $this->input->post("username"),
        "password" => $this->input->post("password"),
        "level" => "user",
        "foto" => $this->input->post("foto")
        );
        $this->db->where("id_login",$id);
        return $this->db->update("login",$user);
    }
    function deletelogin($id){
        $this->db->where("id_login",$id);
        return $this->db->delete("login");
    }
}
?>