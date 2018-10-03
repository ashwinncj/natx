<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

//    public function __construct() {
//        parent::__construct();
//    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('admin');
    }
    public function update(){
        $this->load->model('package');
        $this->package->update($_POST);
    }

}
