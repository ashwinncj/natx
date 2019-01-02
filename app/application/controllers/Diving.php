<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Diving extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['msg'] = 'Kindy contact us for personalised trips.';
        $this->load->view('comingsoon', $data);
    }

}
