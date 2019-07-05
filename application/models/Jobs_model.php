<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs_model extends CI_model
{
    function __construct() {
    parent::__construct();
}
  function form_insert($data){

   $this->db->insert('jobs', $data);
  }
}
