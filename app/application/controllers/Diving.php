<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Diving extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['msg'] = 'Kindly contact us for personalised trips.';
        $this->load->view('templates/header');
        $this->load->view('comingsoon', $data);
    }

}
