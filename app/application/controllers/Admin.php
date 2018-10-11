<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('package');
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('admin');
    }

    public function update() {
        isset($_POST['pid']) ? TRUE : redirect('admin');
        $this->package->update_package($_POST);
    }

    public function get_package($pid) {
        $this->package->get_package($pid);
    }

    public function edit($pid = 'none') {
        $pid == 'none' ? redirect('admin') : FALSE;
        $data['package'] = $this->package->get_package($pid);
        !$data['package'] ? redirect('admin') : FALSE;
        $this->load->view('templates/header');
        $this->load->view('admin', $data);
    }

}
