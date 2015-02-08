<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mod_staff extends CI_Model {

    public function __Construct() {
        //parent::__construct();
    }

    function getStaff() {
        $query = $this->db->select('*')
                ->order_by('sta_id','DESC')
                ->get('tbl_staffs');
               
        return $query;
    }

    public function add_new_staff($filename,$document) {
        $data = array(
            'family_name' => $this->input->post("txt_fname"),
            'given_name' => $this->input->post("txt_gname"),
            'gender' => $this->input->post("txt_gender"),
            'dob' => $this->input->post("txt_dob"),
            'phone' => $this->input->post("txt_phone"),
            'address' => $this->input->post("txt_add"),
            'cur_address' => $this->input->post("txt_cur_add"),
            'photo' => $filename,
            'related_file' => $document,
            'work_start' => $this->input->post("txt_swd"),
            'use_id'=>2,
            'created_date'=>'08-02-14',
            'sal_id'=>1
        );
//        $this->db->trans_start();
        $this->db->insert("tbl_staffs", $data);
    }

}

