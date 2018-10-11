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
        $status = $this->db->replace('packages', $data);
        return $status;
    }

    public function get_package($pid) {
        $this->db->select('*');
        $this->db->where('package_name', $pid);
        $query = $this->db->get('packages');
        foreach ($query->result() as $row) {
            $package = $row;
        }
        return isset($package) ? $package : FALSE;
    }

    public function get_package_list() {
        $this->db->select('package_name');
    }

}
