<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainModel extends CI_Model
{
  function __construct()
  {
    // print_r($this->session->userdata('userlogin'));die;
  }


  function get_user()
  {
    $data = $this->db
      ->from('user')
      // ->where('role_user <', 3)
      ->get()->result_array();
    return $data;
  }

}
