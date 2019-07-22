<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller
{
    public function home()
     {
        $this->load->view('admin/index');
     }
}
