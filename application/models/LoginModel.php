<?php
class LoginModel extends CI_Model{
    function login($post){
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        return $this->db->get("login");
    }
    // function insertLogin($login){
    //     return $this->db->insert("login",$login);
    // }
    // function login(){
    //     $username = $this->input->post("username");
    //     $pass = $this->input->post("password");
    //     $this->db->where("username",$username);
    //     $this->db->where("password",$pass);
    //     return $this->db->get("login");
    // }
}
?>