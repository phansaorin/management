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
                $this->form_validation->set_rules('txt_fname', 'Username', 'trim|required|');
                 if ($this->form_validation->run() == FALSE) {
                    $data['title'] = $this->lang->line('Add Staff');
//                    $data['province'] = $this->mod_user->get_province();
//                    $data['rule'] = $this->mod_manager->get_rule();
                    $this->load->view("layout.php", $data);
                } else {
      if ($this->upload->do_upload('userfile') )
     {
          $data = array('upload_data' => $this->upload->data());
	        $file_data = $this->upload->data();
                $image = $file_data['file_name'];
     }else{
         $image ='file.png';
     } 
     if($this->upload->do_upload('document'))
     {
        $data = array('upload_data' => $this->upload->data());
	        $file_doc = $this->upload->data();
                $document = $file_doc['file_name'];      
     }else{
         $document ='no.png';
     }
     $this->mod_staff->add_new_staff($image,$document);

             redirect('hr/records');
        }

 }
        $this->load->view('layout.php', $data);
       
    }
 function deleteStaff(){
//        if($this->check_session()){
//            if($this->uri->segment(3)){
                $staff_id = $this->uri->segment(3);
                if($this->mod_staff->deleteStaff($staff_id)){
                    $this->session->set_flashdata("success_entry_add", "<div id='entry_add_success' style='color:blue;padding:2px 5px 2px 5px;background-color:#A6A8E8;width:980px;font-style:italic;text-align:left;overflow:hidden;font-size:14px;z-index:9999 !important;'><img src='".base_url()."images/success.png' align= 'left' style='margin-top:-1px;width:30px;' /><p style='border: 0px solid #000000;margin: 5px auto auto;width: 765px;'>".$this->lang->line("tv_delete_record")."</p></div>");
                    redirect(base_url().'hr/records');
                }
//            }else{
//                redirect(base_url().'income/process');
//            }
//        }else{
//            redirect("content/defaults");
//        }
    }
}

