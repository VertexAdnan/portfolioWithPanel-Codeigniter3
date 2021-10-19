<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------

  public function getnumworks()
  {
    $this->db->select('*');
    $this->db->from('works');
    $res = $this->db->get();
    $result = $res->num_rows();

    //print_r($result); die(); 
    return $result;
  }

  public function getnumblogs()
  {
    $this->db->select('*');
    $this->db->from('blogs');
    $res = $this->db->get();
    $result = $res->num_rows();

    //print_r($result); die(); 
    return $result;
  }

  public function getnumvisitors()
  {
    $this->db->select('*');
    $this->db->from('visitors');
    $res = $this->db->get();

    $result = $res->num_rows();

    return $result;
  }

  public function getblogs()
  {
    $this->db->select('*');
    $this->db->from('blogs');
    $this->db->order_by('id', 'desc');
    $result = $this->db->get();

    return $result->result();
  }

  public function getworks()
  {
    $this->db->select('*');
    $this->db->from('works');
    $this->db->order_by('id', 'desc');
    $result = $this->db->get();

    return $result->result();
  }

  public function getcategories()
  {
    $this->db->select('*');
    $this->db->from('categories');
    $this->db->order_by('id', 'desc');
    $result = $this->db->get();

    return $result->result();
  }

  public function deleteblog($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('blogs');
    $this->session->set_flashdata('success', 'Blog başarıyla silindi');
    redirect(base_url('bloglar'));
    /*if ($this->db->delete('blogs')) {
      $this->session->set_flashdata('success', 'Blog başarıyla silindi');
      redirect(base_url('bloglar'));
    } else {
      $this->session->set_flashdata('success', 'Blog silinemedi');
      redirect(base_url('bloglar'));
    }*/
  }

  public function deletework($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('works');
    $this->session->set_flashdata('success', 'Çalışma başarıyla silindi');
    redirect(base_url('calismalar'));
    /*if ($this->db->delete('works')) {
      $this->session->set_flashdata('success', 'Çalışma başarıyla silindi');
      redirect(base_url('calismalar'));
    } else {
      $this->session->set_flashdata('success', 'Çalışma silinemedi');
      redirect(base_url('calismalar'));
    }*/
  }

  public function deleteexp($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('experience');
    $this->session->set_flashdata('success', 'Tecrübe başarıyla silindi');
    redirect(base_url('tecrube'));
  }

  public function getexperience()
  {
    $this->db->select('*');
    $this->db->from('experience');
    $result = $this->db->get();

    return $result->result();
  }

  public function setexp($name, $exp, $id)
  {
    $this->db->set('name', $name);
    $this->db->set('exp', $exp);
    $this->db->where('id', $id);
    $this->db->update('experience');
    /* 
    Also we can use array for update data like
    $data = array (
      'name' => $name,
      'exp' => $exp
    );
    $this->db->update('experience', $data);
    */
    $this->session->set_flashdata('success', $name.  '     başarıyla güncellendi!');
  }

  // ------------------------------------------------------------------------

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */