<?php

if (!defined('BASEPATH'))
        exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __Construct() {
                parent::__Construct();
                //$this->load->model(array());
        }

        public function records() {
                //if ($this->check_session()) {
                if ($this->session->userdata('admin')) {
                        $data['title'] = "Admin management";
                        $session_id = $this->session->userdata('admin');
                       // $data['datas'] = $this->mod_staff->selectdata($session_id);
                       // $data['total'] = $this->mod_staff->total($session_id);
                        //$this->view_main($data);
                    $this->load->view('include/admin/records', $data);
                } else {
                        redirect('login/login_form');
                }
        } 
}

?>