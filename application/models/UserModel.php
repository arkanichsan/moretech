<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    // print_r($this->session->userdata('userlogin'));die;
  }


  function get_user()
  {
    $data = $this->db
      ->where('Status', 1)
      ->get('account')->result_array();
    return $data;
  }

  function get_user_detail($id)
  {
    return $this->db
      ->where('UID', $id)
      ->get('account')->row_array();
  }
}
