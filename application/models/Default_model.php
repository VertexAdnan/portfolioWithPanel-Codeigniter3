<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Default_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function getslidertext()
  {
    $this->db->select('*');
    $this->db->from('mainslider');
    $this->db->limit(1);
    $result = $this->db->get();

    return $result->result();
  }

  public function getexperience()
  {
    $this->db->select('*');
    $this->db->from('experience');
    $result = $this->db->get();

    return $result->result();
  }

  public function getblogs()
  {
    $this->db->select('*');
    $this->db->from('blogs');
    $this->db->order_by('id', 'desc');
    $this->db->limit(6);
    $result = $this->db->get();

    return $result->result();
  }

  public function getworks()
  {
    $this->db->select('*');
    $this->db->from('works');
    $this->db->order_by('id');
    $result = $this->db->get();

    return $result->result();
  }

  public function getcategories()
  {
    $this->db->select('catname');
    $this->db->from('categories');
    $result = $this->db->get();

    return $result->result();
  }

  

  // ------------------------------------------------------------------------

}

/* End of file Default_model.php */
/* Location: ./application/models/Default_model.php */