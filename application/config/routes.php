<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['default_controller'] = 'welcome';
$route = array(
    'default_controller' => 'site',
    'anasayfa' => 'site/anasayfa',
    'iletisim' => 'site/iletisim',
    'gonder' => 'site/docontact', // contact form
    // admin routes
    'yonetim' => 'admin',
    'girisyap' => 'admin/login',
    'home' => 'admin/home',
    'logout' => 'admin/logout',
    // Visitor 
    'ziyarettemizle' => 'admin/clearvisitor',
    // Visitor
    // Blogs
    'bloglar' => 'admin/blogs',
    'blogekle' => 'admin/addblog',
    'blogedit/(:num)' => 'admin/editblog',
    'blogsil' => 'admin/deleteblog',
    // blogs
    // works
    'calismalar' => 'admin/works',
    'calismaekle' => 'admin/addwork',
    'calismasil/(:num)' => 'admin/deletework',
    // works
    //settings
    'ayarlar' => 'admin/settings',
    'arkaplandegis' => 'admin/changebackground',
    'logodegis' => 'admin/changelogo',
    'hakkimda' => 'admin/aboutme',
    'sosyalmedya' => 'admin/changesocialmedia',
    // settings
    'tecrube' => 'admin/experience',
    'tecrubeekle' => 'admin/addexperience',
    'expsil/(:num)' => 'admin/expdelete',
    'expedit/(:num)' => 'admin/expedit'

);
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
