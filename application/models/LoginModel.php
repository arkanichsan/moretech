<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{

  function get_login($user, $password)
  {
    // print_r(password_hash('satria2021', PASSWORD_DEFAULT));die;
    $data = $this->db->from('account')
      ->where('Username', $user)
      ->get()->row();
    

    if (!isset($data)) {
      return 'User Not Found';
    } else if (strtoupper(hash('sha512', $password)) == $data->Password) {
      return $data;
    } else {
      return 'Wrong Password';
    }
  }


  function get_user()
  {
    $data = $this->db
      ->from('account')
      // ->where('role_user <', 3)
      ->get()->result_array();
    return $data;
  }
}
