<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Userpost extends CI_Controller
{

        public function post()
        {

        if(isset($_POST ['create'])){
            $this->load->model('Jobs_model');

            if ($this->Jobs_model->create_form())
            {
                $this->session->set_flashdata('success','Post Added Successfully');
                redirect('userpost/post','refresh');
            } else {
                $this->session->set_flashdata('error','An Error occured.Please Tryagain');
                redirect ('userpost/post','refresh');

            }
        }

            $this->load->view('pages/userpostpage');


        }
}
