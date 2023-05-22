<?php
defined('BASEPATH') or exit('No direct script access allowed');


// $route['default_controller'] = 'welcome';
$route['home'] = 'auth_controller/homepage';

$route['login'] = 'auth_controller/show_login';
$route['sign-up'] = 'auth_controller/show_signup';

$route['dashboard'] = 'auth_controller/show_dashboard';

$route['whats-new'] = 'update_controller/index';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
