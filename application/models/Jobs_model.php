<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs_model extends CI_model
{
    protected $table = 'jobs';

    function create_form()
    {
        $data = array(
            'company'           => $this->input->post('company'),
            'logo'              => $this->input->post('logo'),
            'url'               => $this->input->post('url'),
           'email'              => $this->input->post('email'),
           'position'           => $this->input->post('position'),
           'location'           => $this->input->post('location'),
           'Description'        => $this->input->post('description'),
       );
            $this->db->insert($this->table,$data);
            $id = $this->db->insert_id();
            return $id;
    }
    function getallpost()
   {
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }
   function findpost($id)
   {
        $this->db->select('*');
         $this->db->from($this->table);
        $this->db->where('id',$id);
        $query =$this->db->get();
        return $query->result();
   }
}
