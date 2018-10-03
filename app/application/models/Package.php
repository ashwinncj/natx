<?php

class Package extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set("Asia/Kolkata");
    }

    public function update_package($data) {
        $data = array(
            'package_name' => $data['pid'],
            'package_description' => $data['description'],
        );
        $this->db->replace('packages', $data);
        return $status;
    }

    public function get_package($pid) {
        
    }

}
