<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jobpost extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Jobs_model');

    }

    public function post()
    {
        $data['types'] = $this->config->item('job_types');
        if(count($_POST))
        {
            $this->form_validation->set_rules('company','Company','required');
            $this->form_validation->set_rules('logo','Logo','required');
            $this->form_validation->set_rules('url','url','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('position','Position','required');
            $this->form_validation->set_rules('description','Description','required');

            if($this->form_validation->run() == TRUE)
            {
                if($this->Jobs_model->create_form())
                    {
                    $this->session->set_flashdata('success','Post Added Successfully');
                        redirect('jobpost/showpost','refresh');
                } else {
                    $this->session->set_flashdata('error','An Error occured.Please Tryagain');
                       redirect ('jobpost/showpost','refresh');
                    }
            }
        }
            $this->load->view('pages/userpostpage', $data);
    }

    public function showpost()
    {

        $jobs = $this->Jobs_model->getallpost();
        $data['jobs'] = $jobs;
        $this->load->view('pages/showpost',$data);

    }
    public function detail($userid)
    {
        $data['jobs'] = $this->Jobs_model->findpost($userid);

        $this->load->view('pages/detailpost',$data);
    }

}
