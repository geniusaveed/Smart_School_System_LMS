<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Licence extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

   public function index()
    {
        $this->session->set_userdata('top_menu', 'System Settings');
        $this->session->set_userdata('sub_menu', 'licence/index');
        $data['title'] = 'Licence Generator';
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|valid_email');
        if ($this->form_validation->run() == false) {
            $sessionData            = $this->session->userdata('loggedIn');
            $this->data['id']       = $sessionData['id'];
            $this->data['username'] = $sessionData['username'];
            $this->load->view('layout/header', $data);
            $this->load->view('admin/licence', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $sessionData = $this->session->userdata('admin');
            $userdata    = $this->customlib->getUserData();
            $email = $this->input->post('email');
         
            $key = md5(microtime());
            $new_key = '';
            for($i=1; $i <= 25; $i ++ ){
                    $new_key .= $key[$i];
                    if ( $i%5==0 && $i != 25) $new_key.='-';
            }
           $data['key']=  $new_key;
            $this->load->view('layout/header', $data);
            $this->load->view('admin/licence', $data);
            $this->load->view('layout/footer', $data);
    
        
    }
}

}
