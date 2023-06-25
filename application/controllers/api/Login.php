<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
class login extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function index_get($id = 0){
        $chek_data = $this->db->get_where('login',['id_login'=> $id])->row_array();

        if($id){
            if($chek_data){
                $data = $this->db->get_where('login',['id_login'=> $id])->row_array();
                $this->response($data,RestController::HTTP_OK);
            }else{
            $this->respone(['status' => false,'massage'=>'Data Tidak temukan'],404);
            }
        }else{
            $data = $this->db->get('login')->result();

            $this->response($data,RestController::HTTP_OK);
        }
    }
}