<?php
defined('BASEPATH') or exit('No direct script access allowed');

// ------------------------------------------------------------------------

if(!function_exists('getsitebackground'))
{
  function getsitebackground()
  {
    $ci = &get_instance();
    $ci->db->select('background');
    $ci->db->from('sitebackground');
    $ci->db->limit(1);
    $res = $ci->db->get();
    $result = $res->row();

    return $result;
  }
}
if(!function_exists('getsitelogo'))
{
  function getsitelogo(){
    $ci = &get_instance();

    $ci->db->select('*');
    $ci->db->from('sitelogo');
    $ci->db->limit(1);

    $res = $ci->db->get();
    $result = $res->row();

    return $result;
  }
}

if (!function_exists('getmyname')) {
  function getmyname()
  {
    $ci = &get_instance();

    $ci->db->select('myname');
    $ci->db->from('myname');
    $ci->db->limit(1);
    $res = $ci->db->get();
    $result = $res->row();

    return $result;
  }
}

if(!function_exists('getsocialmedia')){
  function getsocialmedia()
  {
    $ci = &get_instance();

    $ci->db->select('*');
    $ci->db->from('socialmedia');
    $ci->db->limit(1);
    $res = $ci->db->get();
    $result = $res->row();

    return $result;
  }
}

if(!function_exists('getaboutme'))
{
  function getaboutme(){
      $ci = &get_instance();

      $ci->db->select('*');
      $ci->db->from('aboutme');
      $ci->db->limit(1);
      $res = $ci->db->get();
      $result = $res->row();

      return $result;
  }
}
// ------------------------------------------------------------------------

/* End of file default_helper.php */
/* Location: ./application/helpers/default_helper.php */