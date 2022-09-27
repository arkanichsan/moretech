<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainModel extends CI_Model
{
  function __construct()
  {
    // print_r($this->session->userdata('userlogin'));die;
  }


  function get_order_user($id)
  {
    $data = $this->db
      ->from('orders')
      ->join('room', 'id_room = room_order')
      ->join('order_status', 'id_os = status_order')
      ->where('email_order', $id)
      ->get()->result_array();
    return $data;
  }
  function get_status()
  {
    $data = $this->db
      ->from('order_status')
      ->get()->result_array();
    return $data;
  }
  function get_country()
  {
    $data = $this->db
      ->from('country')
      ->get()->result_array();
    return $data;
  }
  function get_role()
  {
    $role = ($this->session->userdata('userlogin') !== '' || $this->session->userlogin['role_user'] == 1 ? 'id_role >= 1' : 'id_role >= 2');
    $data = $this->db
      ->from('role')
      ->where($role)
      ->get()->result_array();
    return $data;
  }

  function get_menu()
  {
    $role = ($this->session->userdata('userlogin') !== '' || $this->session->userlogin['role_user'] == 1 ? 'status_menu >= 0' : 'status_menu = 1');
    $data = $this->db
      ->from('menu')
      ->where('parent_menu', 0)
      ->where($role)
      ->get()->result_array();

    return $data;
  }
  function get_menu_all()
  {
    $role = ($this->session->userdata('userlogin') !== '' || $this->session->userlogin['role_user'] == 1 ? 'status_menu >= 0' : 'status_menu = 1');
    $data = $this->db
      ->from('menu')
      ->where($role)
      ->get()->result_array();

    return $data;
  }

  function get_room_all()
  {
    $role = ($this->session->userdata('userlogin') !== '' || $this->session->userlogin['role_user'] == 1 ? 'status_room >= 0' : 'status_room = 1');
    $data = $this->db
      // ->select('*,b.nama_menu as nama_parent')
      ->from('room')
      ->join('menu a', 'FIND_IN_SET(a.id_menu, type_room)')
      ->where($role)
      ->group_by('id_room')
      ->get()->result_array();
    return $data;
  }

  function get_room_detail($id)
  {
    $data = $this->db
      // ->select('*,b.nama_menu as nama_parent')
      ->from('room')
      ->join('menu a', 'FIND_IN_SET(a.id_menu, type_room)')
      ->where('id_room', $id)
      ->get()->row_array();
    return $data;
  }

  function get_room_full_booked($id)
  {
    $x = 0;
    $list = $this->db
      // ->select('*,b.nama_menu as nama_parent')
      ->from('orders')
      ->where('room_order', $id)
      ->where('status_order <=', 3)
      ->get()->result_array();

    $data= array();

    foreach($list as $lv):
      $getci = $lv['ci_order'];
		  $getco = $lv['co_order'];

      $begin = new DateTime($getci);
      $end = new DateTime($getco);

      $interval = DateInterval::createFromDateString('1 day');
      $periode = new DatePeriod($begin, $interval, $end);
      
      foreach ($periode as $dt) :
        
        $data[$x]['date']     = $dt->format("Y-m-d");
        $data[$x]['room']     = $lv['room_order'];

        $x++;
      endforeach;


    endforeach;

    $dlist['date_list'] = array_count_values(array_column($data, 'date'));
    
    $z = 0;
    $data_parse = array();

    // print_r($dlist['date_list']);die;

    foreach($dlist['date_list'] as $k => $t):
      if(get_room($id, 'unit_room')-$t == 0):
        $data_parse[$z] = tgl_indo($k);
        $z++;
      endif;
    endforeach;

    return $data_parse; 
  }


  function get_room_full_booked_eng($id)
  {
    $x = 0;
    $list = $this->db
      // ->select('*,b.nama_menu as nama_parent')
      ->from('orders')
      ->where('room_order', $id)
      ->where('status_order <=', 3)
      ->get()->result_array();

    $data= array();

    foreach($list as $lv):
      $getci = $lv['ci_order'];
		  $getco = $lv['co_order'];

      $begin = new DateTime($getci);
      $end = new DateTime($getco);

      $interval = DateInterval::createFromDateString('1 day');
      $periode = new DatePeriod($begin, $interval, $end);
      
      foreach ($periode as $dt) :
        
        $data[$x]['date']     = $dt->format("Y-m-d");
        $data[$x]['room']     = $lv['room_order'];

        $x++;
      endforeach;


    endforeach;

    $dlist['date_list'] = array_count_values(array_column($data, 'date'));
    
    $z = 0;
    $data_parse = array();

    foreach($dlist['date_list'] as $k => $t):
      if(get_room($id, 'unit_room')-$t == 0):
        $data_parse[$z] = $k;
        $z++;
      endif;
    endforeach;

    return $data_parse; 
  }

  function check_disabled($data)
  {
    $getci = $data['ci'];
    $getco = $data['co'];

    $begin = new DateTime($getci);
    $end = new DateTime($getco);

    $interval = DateInterval::createFromDateString('1 day');
    $periode = new DatePeriod($begin, $interval, $end);
    $data_parse = array();
    
    foreach ($periode as $i => $dt) :
      $data_parse[$i] = $dt->format("Y-m-d");
    endforeach;


    return $data_parse; 
  }

  

  function get_room_full_booked2($id)
  {
    $x = 0;
    $list = $this->db
      // ->select('*,b.nama_menu as nama_parent')
      ->from('orders')
      ->where('room_order', $id)
      ->where('status_order <=', 3)
      ->get()->result_array();

    $data= array();

    foreach($list as $lv):
      $getci = $lv['ci_order'];
		  $getco = $lv['co_order'];

      $begin = new DateTime($getci);
      $end = new DateTime($getco);

      $interval = DateInterval::createFromDateString('1 day');
      $periode = new DatePeriod($begin, $interval, $end);
      
      foreach ($periode as $dt) :
        
        $data[$x]['date']     = $dt->format("Y-m-d");
        $data[$x]['room']     = $lv['room_order'];

        $x++;
      endforeach;


    endforeach;

    
    $dlist['date_list'] = array_count_values(array_column($data, 'date'));
    
    $z = 0;

    foreach($dlist['date_list'] as $k => $t):
      if(get_room($id, 'unit_room')-$t == 0):
        $data_parse[$z]['date'] = $k;
        $data_parse[$z]['count'] = $t;
        $data_parse[$z]['room'] = $id;
        $data_parse[$z]['avail'] = get_room($id, 'unit_room');
        $data_parse[$z]['rest'] = get_room($id, 'unit_room')-$t;

        $z++;
      endif;
    endforeach;

    // $data_parse['new'] = http_build_query($data_parse['date'],'',', ');

    return $data_parse; 
  }


  function get_room()
  {
    $uri2 = ($this->uri->segment(2));
    $uri3 = ($this->uri->segment(3));
    $uri4 = ($this->uri->segment(4));
    $uri5 = ($this->uri->segment(5));

    $this->db->from('menu');

    if ($uri5 != "") :
      $this->db->where('slug_menu', $uri5);
    elseif ($uri4 != "") :
      $this->db->where('slug_menu', $uri4);
    elseif($uri3 != "") :
      $this->db->where('slug_menu', $uri3);
    endif;

    $data = $this->db->get()->row_array();
    $data = $data['id_menu'];

    $data1 = $data . ',';
    $data2 = ',' . $data . ',';
    $data3 = ',' . $data;

    $this->db->from('room');
    $this->db->like('type_room', $data1, 'after');
    $this->db->or_like('type_room', $data2);
    $this->db->or_like('type_room', $data3, 'before');
    $data_new = $this->db->get()->row_array();

    if ($data_new == "") :
      $this->db->from('room');
      $this->db->where('type_room', $data);
      $data_new = $this->db->get()->row_array();
    endif;

    return $data_new;
  }

  function get_menu_detail()
  {
    $uri3 = ($this->uri->segment(3));
    $uri4 = ($this->uri->segment(4));
    $uri5 = ($this->uri->segment(5));

    if ($uri5 != "") :
      $query = $uri5;
    elseif ($uri4 != "") :
      $query = $uri4;
    else :
      $query = $uri3;
    endif;

    $this->db->from('menu');
    $this->db->where('slug_menu', $query);

    $data = $this->db->get()->row_array();

    return $data;
  }


  function get_menu_detail_id($id)
  {

    $this->db->from('menu');
    $this->db->where('id_menu', $id);

    $data = $this->db->get()->row_array();

    return $data;
  }

  function check_slug($slug)
  {

    $this->db->from('menu');
    $this->db->where('slug_menu', $slug);

    $data = $this->db->get()->row_array();

    return $data['slug_menu'];
  }

  function get_estimates($periode, $room)
  {

    $data = array();
    // $harga = 0;

    foreach ($periode as $i => $dt) :

      $hs = $this->db
        ->join('room', 'id_room = room_hs', 'left')
        ->where('room_hs', $room)
        ->where('date_hs', $dt->format("Y-m-d"))
        ->where('deleted_hs', 0)
        ->get('high_season')->row_array();

      $ls = $this->db
        ->where('id_room', $room)
        ->get('room')->row_array();

      $data[$i]['room']   = $room;
      $data[$i]['date']   = $dt->format("Y-m-d");
      
      if($hs):
          if($hs['status_hs'] == 1):
              $data[$i]['price']  = $hs['price_hs'];
              $data[$i]['status'] = 'High Season';
          else:
              $data[$i]['price']  = $hs['price_hs'];
              $data[$i]['status'] = 'Special Event';
          endif;
      else:
        if($dt->format("D") == 'Sat' || $dt->format("D") == 'Sun') :
            $data[$i]['price']  = $ls['price_weekend_room'];
            $data[$i]['status'] = 'Weekend';
        else:
            $data[$i]['price']  = $ls['price_low_room'];
            $data[$i]['status'] = 'Normal';
        endif;
        
      endif;

    endforeach;


    return $data;
  }






  function get_notif()
  {
    $id = $this->session->userlogin['id_user'];
    $data = $this->db
      ->join('user', 'user.id_user = notification.user_notification')
      ->where('user_notification', $id)
      ->order_by('id_notification', 'DESC')
      ->get('notification')->result_array();
    return $data;
  }

  function get_id_order_by_booking_code($code)
  {
    $data = $this->db
      ->join('country', 'id = country_order', 'left')
      ->join('room', 'id_room = room_order', 'left')
      ->join('order_status', 'id_os = status_order', 'left')
      ->where('kode_order', $code)
      ->get('orders')->row_array();
    return $data;
  }

  function get_order($id = false)
  {
    $this->db
      ->join('method', 'id_method = method_order', 'left')
      ->join('country', 'id = country_order', 'left')
      ->join('room', 'id_room = room_order', 'left')
      ->join('order_status', 'id_os = status_order', 'left')
      ->order_by('id_order', 'DESC');

    if($id) :
      $this->db->where('id_order', $id);
      $data = $this->db->get('orders')->row_array();
    else:
      $this->db->where('status_order >=', 2);
      $data = $this->db->get('orders')->result_array();
    endif;
    return $data;
  }

  function post_order($data)
  {
    $this->db->insert('orders', $data);
    return $this->db->insert_id();
  }
  function update_order($data)
  {
    $this->db->where('id_order', $data['id_order']);
    $this->db->update('orders', $data);

    return $data['id_order'];
  }


  function post_room($data)
  {
    $this->db->insert('room', $data);
    return $this->db->insert_id();
  }
  function update_room($data)
  {
    $this->db->where('id_room', $data['id_room']);
    $this->db->update('room', $data);

    return $data['id_room'];
  }
  function add_img_room($parent, $img)
  {
    $data = array(
      'parent_room_pic' => $parent,
      'url_room_pic'    => $img
    );

    $this->db->insert('room_pic', $data);;
  }
  function delete_img_room($url)
  {
    $this->db->where('url_room_pic', $url);
    $this->db->delete('room_pic');
  }

  function post_menu($data)
  {
    $this->db->insert('menu', $data);
    return $this->db->insert_id();
  }
  function update_menu($data)
  {
    $this->db->where('id_menu', $data['id_menu']);
    $this->db->update('menu', $data);

    return $data['id_menu'];
  }

  function get_hs_room($id)
  {
    $this->db
      ->select("id_hs as id, nama_chs as className, nama_hs as title, concat('Rp', FORMAT(price_hs, 'N', 'id_ID')) as description, date_hs as start")
      ->join('color_hs', 'id_chs = status_hs')
      ->order_by('date_hs', 'ASC')
      ->where('room_hs', $id)
      ->where('deleted_hs', 0);
      $data = $this->db->get('high_season')->result_array();
  
    return $data;
  }

  function post_hs($data)
  {
    $this->db->insert('high_Season', $data);
    return $this->db->insert_id();
  }

  function update_hs($data)
  {
    $this->db->where('id_hs', $data['id_hs']);
    $this->db->update('high_season', $data);
  }


  
  function get_wa_detail()
  {

    $this->db->from('whatsapp_button');
    $this->db->where('id_wa', 1);

    $data = $this->db->get()->row_array();

    return $data;
  }
  function update_wa($data)
  {
    $this->db->where('id_wa', $data['id_wa']);
    $this->db->update('whatsapp_button', $data);
  }

  function get_vid_detail()
  {

    $this->db->from('video_banner');
    $this->db->where('id_vid', 1);

    $data = $this->db->get()->row_array();

    return $data;
  }
  function update_vid($data)
  {
    $this->db->where('id_vid', $data['id_vid']);
    $this->db->update('video_banner', $data);
  }

}
