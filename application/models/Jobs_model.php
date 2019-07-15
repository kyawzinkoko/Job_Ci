<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs_model extends CI_model
{
    function create_form(){
        $data = array(
            'company'           => $this->input->post('company'),
            'logo'              => $this->input->post('logo'),
            'url'               => $this->input->post('url'),
           'email'              => $this->input->post('email'),
           'position'           => $this->input->post('position'),
           'location'           => $this->input->post('location'),
           'Description'        => $this->input->post('description'),
       );
            $this->db->insert('jobs',$data);
            $id = $this->db->insert_id();
            return $id;
   }
    function getallpost()
  {
       $this->db->select('*');
        $this->db->from('jobs');
        $query = $this->db->get();
        return $query->result();
   }
}
