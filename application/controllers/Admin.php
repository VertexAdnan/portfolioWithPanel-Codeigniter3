<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('admin_model');
    $this->load->model('visitor_model');
    $this->load->helper('admin_helper');
    $this->load->helper('default_helper');

    $username = $this->session->userdata('username');
    $url = $this->uri->segment(1);

    if ($url != 'girisyap' && !isset($username)) {
      redirect(base_url('girisyap'));
    }

    if ($url == 'girisyap') {
      $this->load->view('admin/_head');
    } else {
      $this->load->view('admin/_head');
      $this->load->view('admin/_header');
      $this->load->view('admin/_sidebar.php');
    }
  }

  public function index()
  {
    $username = $this->session->userdata('username');
    if (!isset($username)) {
      redirect(base_url('girisyap'));
    } else {
      redirect(base_url('home'));
    }
  }

  public function home()
  {
    $data = array(
      'numworks' => $this->admin_model->getnumworks(),
      'numblogs' => $this->admin_model->getnumblogs(),
      'numvisitors' => $this->admin_model->getnumvisitors(),
      'blogs' => $this->admin_model->getblogs(),
      'works' => $this->admin_model->getworks()
    );

    $this->load->view('admin/home', $data);
    $this->load->view('admin/_footer');
  }

  public function login()
  {
    // views
    $this->load->view('admin/login');
    $this->load->view('admin/_footer');
    // views

    // post
    if (isset($_POST['login'])) {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      if (isset($username) && isset($password)) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user', $this->db->escape_like_str($username));
        $this->db->where('pass', $this->db->escape_like_str($password));
        $this->db->limit('1');
        $result = $this->db->get();
        $check = $result->num_rows();
        if ($check == 1) {
          $data = array(
            'username' => $username,
            'password' => $password
          );

          $this->session->set_userdata($data);
          $this->session->set_flashdata('success', 'Başarıyla giriş yapıldı');
          redirect(base_url('home'));
        } else {
          $this->session->set_flashdata('error', 'Kullanıcı adı veya şifre yanlış');
          redirect(base_url('girisyap'));
        }
      } else {
        $this->session->set_flashdata('error', 'Something went wrong');
        redirect(base_url('girisyap'));
      }
    }
  }

  public function logout()
  {
    $data = array(
      'username',
      'password'
    );
    $this->session->unset_userdata($data);
    $this->session->set_flashdata('success', 'Başarıyla çıkış yaptınız.');
    redirect(base_url('girisyap'));
  }

  public function clearvisitor()
  {
    $this->visitor_model->clearvisitors();
  }

  public function addblog()
  {
    $this->load->view('admin/addblog');
    $this->load->view('admin/_footer');

    if (isset($_POST['add'])) {
      $config['upload_path']          = './assets/site/img/';
      $config['allowed_types']        = 'gif|jpg|png';
      /*$config['max_size']             = 100; // We're admin. Not needed.
            $config['max_width']            = 1024;
            $config['max_height']           = 768;*/

      $this->load->library('upload');
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('file')) {
        $error = array('error' => $this->upload->display_errors());

        $this->session->set_flashdata('error', $error);

        print_r($error);
        die();
        redirect(base_url('blogekle'));
      } else {
        $data = array('upload_data' => $this->upload->data());
        $filedata = $this->upload->data();
        $filename = $filedata['file_name'];

        // start to insert data //
        $data = array(
          'blogname' => $this->input->post('name'),
          'blogdesc' => $this->input->post('desc'),
          'bimage' => $filename,
          'date' => date('Y-m-d')
        );

        $this->db->insert('blogs', $data);
        //
        $this->session->set_flashdata('success', 'Blog başarıyla eklendi.');
        redirect(base_url('blogekle'));
      }
    }
  }

  public function editblog()
  {
    $this->load->view('admin/editblog');
    $this->load->view('admin/_footer');

    if (isset($_POST['save'])) {
      $blogname = getblogdetails('blogname');
      $image = $_FILES['file']['name'];

      if (!empty($image)) {
        $config['upload_path']          = './assets/site/img/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());

          $this->session->set_flashdata('error', $error);

          print_r($error);
          die();
          redirect(base_url('blogekle'));
        } else {
          $data = array('upload_data' => $this->upload->data());
          $filedata = $this->upload->data();
          $filename = $filedata['file_name'];
          $this->db->set('blogname', $this->input->post('name'));
          $this->db->set('blogdesc', $this->input->post('desc'));
          $this->db->set('bimage', $filename);
          $this->db->update('blogs');
          $this->session->set_flashdata('success', $blogname . ' başarıyla güncellendi');
          redirect(base_url('blogedit/' . $this->uri->segment(2)));
        }
      } else {
        $this->db->set('blogname', $this->input->post('name'));
        $this->db->set('blogdesc', $this->input->post('desc'));
        $this->db->update('blogs');
        $this->session->set_flashdata('success', $blogname . ' başarıyla güncellendi');
        redirect(base_url('blogedit/' . $this->uri->segment(2)));
      }
    }
  }

  public function deleteblog()
  {
    $id = $this->uri->segment(3);
    $this->admin_model->deleteblog($id);
  }

  public function blogs()
  {
    $data = array(
      'blogs' => $this->admin_model->getblogs()
    );

    $this->load->view('admin/blogs', $data);
    $this->load->view('admin/_footer');
  }

  public function works()
  {
    $data = array('works' => $this->admin_model->getworks());
    $this->load->view('admin/works', $data);
    $this->load->view('admin/_footer');
  }

  public function addwork()
  {
    $data = array(

      'categories' => $this->admin_model->getcategories(),

    );
    $this->load->view('admin/addwork', $data);
    $this->load->view('admin/_footer');

    if (isset($_POST['add'])) {
      $config['upload_path']          = './assets/site/img/';
      $config['allowed_types']        = 'gif|jpg|png';

      $this->load->library('upload');
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('file')) {
        $error = array('error' => $this->upload->display_errors());

        $this->session->set_flashdata('error', $error);

        print_r($error);
        die();
        redirect(base_url('blogekle'));
      } else {
        $data = array('upload_data' => $this->upload->data());
        $filedata = $this->upload->data();
        $filename = $filedata['file_name'];

        $data = array(
          'name' => $this->input->post('name'),
          'desc' => '',
          'image' => $filename,
          'catname' => $this->input->post('catname')
        );
        $this->db->insert('works', $data);

        $this->session->set_flashdata('success', $this->input->post('name') . ' başarıyla eklendi.');
        redirect(base_url('addwork'));
      }
    }
  }

  public function deletework()
  {
    $id = $this->uri->segment(2);
    $this->admin_model->deletework($id);
  }


  public function changelogo()
  {
    $this->load->view('admin/changelogo');
    $this->load->view('admin/_footer');

    if (isset($_POST['save'])) {
      $config['upload_path']          = './assets/site/img/';
      $config['allowed_types']        = 'gif|jpg|png';

      $this->load->library('upload');
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('file')) {
        $error = array('error' => $this->upload->display_errors());

        $this->session->set_flashdata('error', $error);

        print_r($error);
        die();
        redirect(base_url('logodegis'));
      } else {
        $data = array('upload_data' => $this->upload->data());
        $filedata = $this->upload->data();
        $filename = $filedata['file_name'];

        $this->db->set('logo', $filename);
        $this->db->update('sitelogo');
        $this->db->insert('works', $data);

        $this->session->set_flashdata('success', $filename . '  LOGO Başarıyla Güncellendi');
        redirect(base_url('logodegis'));
      }
    }
  }

  public function changebackground()
  {
    $this->load->view('admin/changebackground');
    $this->load->view('admin/_footer');
    if (isset($_POST['save'])) {
      $config['upload_path']          = './assets/site/img/';
      $config['allowed_types']        = 'gif|jpg|png';

      $this->load->library('upload');
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('file')) {
        $error = array('error' => $this->upload->display_errors());

        $this->session->set_flashdata('error', $error);

        print_r($error);
        die();
        redirect(base_url('logodegis'));
      } else {
        $data = array('upload_data' => $this->upload->data());
        $filedata = $this->upload->data();
        $filename = $filedata['file_name'];

        $this->db->set('background', $filename);
        $this->session->set_flashdata('success', $filename . '  başarıyla kaydedildi');
        redirect(base_url('arkaplandegis'));
      }
    }
  }

  public function settings()
  {
    $this->load->view('admin/settings');
    $this->load->view('admin/_footer');

    if (isset($_POST['save'])) {
      $this->db->set('myname', $this->input->post('myname'));
      $this->db->update('myname');

      $this->db->set('text1', $this->input->post('slide1'));
      $this->db->set('text2', $this->input->post('slide2'));
      $this->db->set('text3', $this->input->post('slide3'));
      $this->db->update('mainslider');

      $this->session->set_flashdata('success', 'Ayarlar Başarıyla Kaydedildi.');
      redirect(base_url('ayarlar'));
    }
  }

  public function aboutme()
  {
    $this->load->view('admin/changeaboutme');
    $this->load->view('admin/_footer');

    if (isset($_POST['save'])) {
      $file = $_FILES['file']['name'];

      if (!empty($file)) {
        $config['upload_path']          = './assets/site/img/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
          $error = array('error' => $this->upload->display_errors());

          $this->session->set_flashdata('error', $error);

          print_r($error);
          die();
          redirect(base_url('logodegis'));
        } else {
          $data = array('upload_data' => $this->upload->data());
          $filedata = $this->upload->data();
          $filename = $filedata['file_name'];
          $data = array(
            'email' => $this->input->post('email'),
            'age' => $this->input->post('age'),
            'abouttext' => $this->input->post('abouttext'),
            'image' => $filename,
            'tel' => $this->input->post('tel')
          );
          $this->db->update('aboutme', $data);

          $this->session->set_flashdata('success', 'Sayfa başarıyla kaydedildi');
          redirect(base_url('hakkimda'));
        }
      } else {
        $data = array(
          'email' => $this->input->post('email'),
          'age' => $this->input->post('age'),
          'abouttext' => $this->input->post('abouttext'),
          'tel' => $this->input->post('tel')
        );
        $this->db->update('aboutme', $data);

        $this->session->set_flashdata('success', 'Sayfa başarıyla kaydedildi');
        redirect(base_url('hakkimda'));
      }
    }
  }

  public function changesocialmedia()
  {
    $this->load->view('admin/socialmedia');
    $this->load->view('admin/_footer');

    if (isset($_POST['save'])) {
      $this->db->set('facebook', $this->input->post('facebook'));
      $this->db->set('instagram', $this->input->post('instagram'));
      $this->db->set('behance', $this->input->post('behance'));
      $this->db->update('sociamedia');

      $this->session->set_flashdata('success', 'Sosyal medya bağlantıları güncellendi');
      redirect(base_url('sosyalmedya'));
    }
  }

  public function experience()
  {
    $data = array(
      'experience' => $this->admin_model->getexperience()
    );
    $this->load->view('admin/experience', $data);
    $this->load->view('admin/_footer');
  }

  public function addexperience()
  {
    $this->load->view('admin/addexperience');
    $this->load->view('admin/_footer');

    if (isset($_POST['add'])) {
      $data = array(
        'name' => $this->input->post('name'),
        'exp' => $this->input->post('exp')
      );
      $this->db->insert('experience', $data);
      $this->session->set_flashdata('success', 'Tecrübe Başarıyla Eklendi');
      redirect(base_url('tecrubeekle'));
    }
  }

  public function expdelete()
  {
    $id = $this->uri->segment(2);

    $this->admin_model->deleteexp($id);
  }

  public function expedit()
  {
    $this->load->view('admin/expedit');
    $this->load->view('admin/_footer');

    if (isset($_POST['save'])) {
      $name = $this->input->post('name');
      $exp = $this->input->post('exp');
      $id = $this->uri->segment(2);
      // also we can use model for run sql queries...
      $this->admin_model->setexp($name, $exp, $id);
    }
  }

  public function categories()
  {
    $data = array(
      'categories' => $this->admin_model->getcategories()
    );
    $this->load->view('admin/categories', $data);
    $this->load->view('admin/_footer');
  }

  public function addcategory()
  {
    $this->load->view('admin/addcat');
    $this->load->view('admin/_footer');

    if (isset($_POST['add'])) {
      $name = $this->input->post('name');
      $this->admin_model->addcat($name);
    }
  }
  public function editcat()
  {
    $this->load->view('admin/editcat');
    $this->load->view('admin/_footer');

    if (isset($_POST['save'])) {
      $name = $this->input->post('name');
      $this->admin_model->savecat($name);
    }
  }

  public function removecat()
  {
    $id = $this->uri->segment(2);
    $this->admin_model->removecat($id);
  }
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */