<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/aotoload.php';

use chriskacerguis\RestServer\RestController;

class Login extends RestController {

    // function __construct()
    // {
    //     // Construct the parent class
    //     parent::__construct();
    // }

    public function index_get(){
        $data = $this->db->get('login')->result();

        $this->response($data,RestController::HTTP_OK);
    }
}