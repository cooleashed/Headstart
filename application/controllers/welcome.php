<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class main extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        /* $this->load->view('form');

          $this->load->library('encrypt');
          $data = array(
          'user_name' => 'tirthesh',
          'password' => $this->encrypt->encode('tirthesh') */




        //$this->input->post('user_name'),
        //$this->input->post('passcode')
        //$this->load->model('user_model');
        //$this->user_model->saveUser($data);
        //echo 'success';
//        echo base_url();
    }

    public function test() {
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */