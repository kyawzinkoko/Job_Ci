<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Userpost extends CI_Controller
{
       public function __construct()
    {
        parent::__construct();

        $this->load->model('Jobs_model');
    }
        public function index()
        {
            $this->load->view('pages/userpostpage');
        }
        public function post()
        {

        if (count($_POST)) {
            $this->form_validation->set_rules('company','Company','required');
            $this->form_validation->set_rules('logo','logo','required');
            $this->form_validation->set_rules('url','URL','required');
            $this->form_validation->set_rules('position','Position','required');
            $this->form_validation->set_rules('location','Location','required');
            $this->form_validation->set_rules('description','Description','required');

            if($this->form_validation->run()){
                $data['jobs'] = array(
                    'company'      => $this->input->post('company'),
                    'logo'         => $this->input->post('logo'),
                    'url'          => $this->input->post('url'),
                    'location'     => $this->input->post('location'),
                    'description'  => $this->input->post('description')
                );
            }
        }
             $this->load->view('pages/userpostpage',$data);

    }
}
