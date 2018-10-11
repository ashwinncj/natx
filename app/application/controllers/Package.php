<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

//    public function __construct() {
//        parent::__construct();
//    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('package');
    }
    public function info($name='default') {        
        $this->load->view('templates/header');
        $this->load->view('packages/'.$name);
    }

}
