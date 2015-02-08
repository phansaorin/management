<?php

class Hr extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        //$this->load->model(array());
    }

    public function records() {
        //if ($this->check_session()) {
        if ($this->session->userdata('hr')) {
            $data['title'] = "Hr management";
            $session_id = $this->session->userdata('hr');
            $data['get_staff'] = $this->mod_staff->getStaff();
            // $data['total'] = $this->mod_staff->total($session_id);
            //$this->view_main($data);
            $this->load->view('layout.php', $data);
        } else {
            redirect('login/');
        }
    }

    public function addstaff() {
        $data['title'] = "Hr management";
        if ($this->input->post("btn_submit")) {
          $config['upload_path'] = './assets/images';
		$config['allowed_types'] = 'gif|jpg|png|docx';
		$config['max_width']  = '1077';
		$config['max_height']  = '170';

		$this->load->library('upload', $config);
      if ($this->upload->do_upload('userfile') )
     {
         
          $data = array('upload_data' => $this->upload->data());
	        $file_data = $this->upload->data();
                $image = $file_data['file_name'];
                
      
     } 
     if($this->upload->do_upload('document'))
     {
      //  $data = array('upload_data' => $this->upload->data());
	        $file_doc = $this->upload->data();
                $document = $file_doc['file_name'];
               
     }
     $this->mod_staff->add_new_staff($image,$document);

             redirect('hr/records');
        }


        $this->load->view('layout.php', $data);
    }

}

