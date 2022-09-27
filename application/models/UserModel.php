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
    $operator = ($this->session->userlogin['role_user'] == 1 ? "<=" : ">=");
    $su = ($this->session->userlogin['role_user'] == 1 ? "1" : "2");
    $data = $this->db
      ->join('country', 'user.country_user = country.id')
      ->join('role', 'user.role_user = role.id_role')
      ->where('status_user ' . $operator . '', 1)
      ->where('role_user >= ', $su)
      ->get('user')->result_array();
    return $data;
  }
  function get_admin()
  {
    $data = $this->db
      ->where('role_user <', 3)
      ->get('user')->result_array();
    return $data;
  }

  function get_user_company($company)
  {
    $operator = ($this->session->userlogin['role_user'] == 1 ? "<=" : ">=");
    $data = $this->db
      ->join('role', 'user.role_user = role.id_role')
      ->where('status_user ' . $operator . '', 1)
      ->where('company_user', $company)
      ->get('user')->result_array();
    return $data;
  }

  function get_user_detail($id)
  {
    return $this->db
      ->join('country', 'user.country_user = country.id')
      ->join('role', 'user.role_user = role.id_role')
      ->where('id_user', $id)
      ->get('user')->row_array();
  }

  function check_email($id)
  {
    return $this->db
      ->where('email_user', $id)
      ->get('user')->row_array();
  }

  function get_role()
  {
    return $this->db
      ->get('role')->result_array();
  }

  function post_data($data)
  {
    //GET INSER ID
    $id = $this->post_user($data);

    //POST KE NOTIF & ACTIVITIES

    //GET USER YG DI BUAT
    $ue = $this->get_user_detail($id);

    //GET USER RECEIVES NOTIF
    $user = $this->db
      ->where('company_user', 1)
      ->or_where('company_user', $data['company_user'])
      ->where('role_user < ', 3)
      ->get('user')->result_array();

    foreach ($user as $u) :
      $data2 = array(
        'text_notification'     => 'User ' . $ue['nama_user'] . ' berhasil dibuat',
        'desc_notification'     => 'User <strong><a href="' . base_url() . 'profiles/detail/' . encrypt_uri($id) . '">' . $ue['nama_user'] . '</a></strong> telah dibuat oleh <a href="' . base_url() . 'profiles/detail/' . encrypt_uri($this->session->userlogin['id_user']) . '">' . $this->session->userlogin['nama_user'] . '</a>',
        'type_notification'     => 5,
        'user_notification'     => $u['id_user']
      );

      $this->NotificationModel->post_notif($data2);
    endforeach;

    //ACTIVITIES
    $data3 = array(
      'text_activities'         => 'User <a href="' . base_url() . 'profiles/detail/' . encrypt_uri($this->session->userlogin['id_user']) . '">' . $this->session->userlogin['nama_user'] . '</a> telah membuat user <a href="' . base_url() . 'profiles/detail/' . encrypt_uri($id) . '">' . $ue['nama_user'] . '</a>',
      'desc_activities'         => '<div class="avatar-group">
                                      <figure class="avatar">
                                        <img src="' . base_url() . 'uploads/users/' . $ue['foto_user'] . '" class="rounded-circle" alt="image">
                                      </figure>
                                      </div>',
      'type_activities'         => 5,
      'company_activities'      => $ue['company_user']
    );

    $this->ActivitiesModel->post_act($data3);
    return $id;
  }




  function post_user($data)
  {
    $this->db->insert('user', $data);
    return $this->db->insert_id();
  }


  function edit($data)
  {
    $this->db->where('id_user', $data['id_user']);
    $this->db->update('user', $data);

    return $data['id_user'];
  }


  function delete_data($data)
  {
    //GET INSER ID
    $id = $this->edit($data);

    //POST KE NOTIF & ACTIVITIES
    //GET USER YG NGEDIT
    $e = $this->UserModel->get_user_detail($this->session->userlogin['id_user']);
    //GET USER YG DI EDIT
    $x = $this->UserModel->get_user_detail($id);


    //GET USER RECEIVES NOTIF
    $user = $this->db
      ->where('company_user', 1)
      ->or_where('company_user', $x['id_company'])
      ->where('role_user < ', 3)
      ->get('user')->result_array();

    foreach ($user as $u) :
      $data1 = array(
        'text_notification'     => 'User ' . $x['nama_user'] . ' telah dihapus',
        'desc_notification'     => 'User <strong>' . $e['nama_user'] . '</strong> telah menghapus ' . $x['nama_user'],
        'type_notification'     => 7,
        'user_notification'     => $u['id_user']
      );

      $this->NotificationModel->post_notif($data1);
    endforeach;

    //ACTIVITIES
    $data2 = array(
      'text_activities'         => 'User ' . $e['nama_user'] . ' telah menghapus ' . $x['nama_user'],
      'desc_activities'         => '<div class="card card-body mb-3 d-flex justify-content-between flex-row">
                                        <div>
                                          <del>
                                            <i class="fa fa-user-times mr-2"></i>  
                                            ' . $x['nama_user'] . '
                                          </del>
                                        </div>
                                      </div>',
      'type_activities'         => 3,
      'company_activities'      => $x['id_company']
    );

    $this->ActivitiesModel->post_act($data2);
  }
}
