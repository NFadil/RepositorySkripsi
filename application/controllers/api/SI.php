<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
class SI extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function index_get($id = 0){
        $chek_data = $this->db->get_where('sisteminformasi',['id_jurnal'=> $id])->row_array();
        if($id){
            if($chek_data){
                $data = $this->db->get_where('sisteminformasi',['id_jurnal'=> $id])->row_array();
                $this->response($data,RestController::HTTP_OK);
            }else{
            $this->respone(['status' => false,'massage'=>'Data Tidak temukan'],404);
            }
        }else{
            $data = $this->db->get('sisteminformasi')->result();
            $this->response($data,RestController::HTTP_OK);
        }
        
    }
    public function index_post()
    {
        $url = $this->input->post("Url");
        $fileExtension = pathinfo($url, PATHINFO_EXTENSION);
    
        if ($fileExtension !== 'pdf') {
            $this->response(array('status' => 'failed', 'message' => 'URL must point to a PDF file.'), RestController::HTTP_BAD_REQUEST);
            return;
        }
    
        $data = array(
            "nama" => $this->input->post("Nama"),
            "judul" => $this->input->post("Judul"),
            "jurusan" => 'Sistem Informasi',
            "angkatan" => $this->input->post("Angkatan"),
            "tahun_publis" => $this->input->post("Tahunpublish"),
            "url" => $url
        );
    
        $insert = $this->db->insert('sisteminformasi', $data);
        if ($insert) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response(array('status' => 'failed', RestController::HTTP_INTERNAL_SERVER_ERROR));
        }
    }
    
    public function index_put(){
        $id = $this->put('id_jurnal');
        $url = $this->put("Url");
        $fileExtension = pathinfo($url, PATHINFO_EXTENSION);
    
        if ($fileExtension !== 'pdf') {
            $this->response(array('status' => 'failed', 'message' => 'URL must point to a PDF file.'), RestController::HTTP_BAD_REQUEST);
            return;
        }
    
        $data = array(
            "nama" => $this->put("Nama"),
            "judul" => $this->put("Judul"),
            "jurusan" => 'Sistem Informasi',
            "angkatan" => $this->put("Angkatan"),
            "tahun_publis" => $this->put("Tahunpublish"),
            "url" => $url
        );
        $this->db->where('id_jurnal',$id);
        $update = $this->db->update('sisteminformasi', $data);
        if ($update) {
            $this->response($data, RestController::HTTP_OK);
        } else {
            $this->response(array('status' => 'failed', RestController::HTTP_INTERNAL_SERVER_ERROR));
        }
    }
    public function index_delete(){
        $id = $this->delete('id_jurnal');
        $chek_data = $this->db->get_where('sisteminformasi',['id_jurnal'=> $id])->row_array();
        if($chek_data){
            $this->db->where('id_jurnal',$id);
            $this->db->delete('sisteminformasi');
            $this->response(array('status' => 'success', RestController::HTTP_OK));

        }else{
            $this->response(array('status' => 'failed',404));

        }
    }
}
