<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visitor_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------

  public function addvisitor()
  {
    $currentip = $this->input->ip_address();

    $this->db->select('visitorip');
    $this->db->from('visitors');
    $result = $this->db->get();

    $res = $result->result();

    foreach ($res as $row) {
      $ip = $row->visitorip;
    }

    if ($ip != $currentip) {
      $data = array(
        'visitorip' => $currentip
      );

      $this->db->insert('visitors', $data);
    }
  }

  public function clearvisitors()
  {
    $this->db->empty_table('visitors');
    $this->session->set_flashdata('success', 'Ziyaret listesi başarıyla temizlendi!');
    redirect(base_url('home'));
  }

  // ------------------------------------------------------------------------

}

/* End of file Visitor_model.php */
/* Location: ./application/models/Visitor_model.php */