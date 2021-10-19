<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

class Site extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // LOAD MODELS //
    $this->load->model('default_model');
    $this->load->model('visitor_model');
    // END MODELS //

    // execute visitors
    $this->visitor_model->addvisitor();
    //

    // LOAD HELPERS //
    $this->load->helper('captcha');
    $this->load->helper('default_helper');
    $this->load->helper('email');
    // END HELPERS //


    $this->load->view('site/head');
    $this->load->view('site/foot');
  }

  public function index()
  {
    redirect(base_url() . 'anasayfa');
  }

  public function anasayfa()
  {
    // CREATE CAPTCHA //
    $vals = array(
      'word'          => 'Random word',
      'img_path'      => './captcha_image/',
      'img_url'       => base_url('captcha_image'),
      'img_width'     => '150',
      'img_height'    => 30,
      'expiration'    => 5000,
      'word_length'   => 8,
      'font_size'     => 16,
      'img_id'        => 'capimg',
      'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

      // White background and border, black text and red grid
      'colors'        => array(
        'background' => array(255, 255, 255),
        'border' => array(255, 255, 255),
        'text' => array(0, 0, 0),
        'grid' => array(255, 40, 40)
      )
    );

    // END CAPTCHA //


    // Get model funcs //
    $data = array(
      'slidertext' =>     $this->default_model->getslidertext(),
      'experience' =>     $this->default_model->getexperience(),
      'blogs'      =>     $this->default_model->getblogs(),
      'works'      =>     $this->default_model->getworks(),
      'categories' =>     $this->default_model->getcategories(),
      'captcha'    =>     create_captcha($vals)
    );
    // End model funcs //

    //  create session for captcha  //
    $this->session->unset_userdata('captcha'); // Now we need to unset userdata for captcha
    $this->session->set_userdata('captcha', $data['captcha']['word']);
    // end session for captcha //

    $this->load->view('site/anasayfa', $data);
  }

  public function doContact()
  {
    if (isset($_POST['docontact'])) {
      $capinput = $this->input->post('captcha');
      $capsess = $this->session->userdata('captcha');
      $message = $this->input->post('message');
      $name = $this->input->post('name');
      $sub = $this->input->post('subject');
      $email = $this->input->post('email');

      if ($capinput == $capsess) {
        // SEND MAIL
        $this->load->library('email');

        $config['protocol']  = 'smtp';
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_user'] = "logtest06@gmail.com";
        $config['smtp_pass'] = "VETrex1233";
        $config['smtp_port'] = "465";
        $config['charset']   = 'utf-8';
        $config['mailtype']  = 'html';
        $config['newline']   = "\r\n";

        //echo sitedetails('sitename');

        $this->email->initialize($config);
        $this->email->from("test");
        $this->email->to($email);
        $this->email->set_header('Header1', 'Value1');
        $this->email->subject("GÖNDEREN: " . $name . "  KONU" . $sub);
        $this->email->message(
          $message,
          "<br />",
          "Gönderen: " . $email
        );

        if ($this->email->send()) {
          $this->session->set_flashdata('message', 'Mail başarıyla gönderildi');
          redirect(base_url());
        } else {
          $this->session->set_flashdata('message', 'Mail gönderilemedi');
          redirect(base_url());
        }
      } else {
        $this->session->set_flashdata('message', 'Mail gönderilemedi');
        redirect(base_url());
      }
    }
  }
}


/* End of file Site.php */
/* Location: ./application/controllers/Site.php */