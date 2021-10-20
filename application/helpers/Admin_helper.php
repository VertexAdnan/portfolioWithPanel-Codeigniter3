<?php
defined('BASEPATH') or exit('No direct script access allowed');

// ------------------------------------------------------------------------

if (!function_exists('getblogdetails')) {
  function getblogdetails($var)
  {
    $ci = &get_instance();
    $url = $ci->uri->segment(2);

    $ci->db->select($var);
    $ci->db->from('blogs');
    $ci->db->where('id', $url);
    $res = $ci->db->get();
    $result = $res->row();
    
    return $result->$var;
  }
}

if(!function_exists('getslidertext'))
{
  function getslidertext($var)
  {
    $ci = &get_instance();
    $ci->db->select($var);
    $ci->db->from('mainslider');
    $res = $ci->db->get();
    $result = $res->row();

    return $result->$var;
  }
}

if(!function_exists('getexp'))
{
  function getexp($var)
  {
    $ci = &get_instance();
    
    $id = $ci->uri->segment(2);

    $ci->db->select($var);
    $ci->db->from('experience');
    $ci->db->where('id', $id);
    $res = $ci->db->get();
    $result = $res->row();

    return $result->$var;
  }
}

if(!function_exists('getcatname'))
{
  function getcatname()
  {
    $ci = &get_instance();
    $id = $ci->uri->segment(2);
    $ci->db->select('catname');
    $ci->db->from('categories');
    $res = $ci->db->get();
    $result = $res->row();

    return $result;
  }
}

// ------------------------------------------------------------------------

/* End of file Admin_helper.php */
/* Location: ./application/helpers/Admin_helper.php */