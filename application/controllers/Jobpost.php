<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jobpost extends CI_Controller
{

    public function post()
    {
        $data['types'] = $this->config->item('job_types');

        if(isset($_POST ['create'])){
            $this->load->model('Jobs_model');

            if ($this->Jobs_model->create_form())
            {
                $this->session->set_flashdata('success','Post Added Successfully');
                redirect('jobpost/showpost','refresh');
            } else {
                $this->session->set_flashdata('error','An Error occured.Please Tryagain');
                redirect ('jobpost/showpost','refresh');
            }
        }

        $this->load->view('pages/userpostpage', $data);
    }

    public function showpost()
    {

        $this->load->model('Jobs_model');
        $jobs = $this->Jobs_model->getallpost();
        $data['jobs'] = $jobs;
        $this->load->view('pages/showpost',$data);

    }

}
