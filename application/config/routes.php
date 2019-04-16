<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['details'] = '/welcome/details';
$route['login'] = '/welcome/login';
$route['cart'] = '/welcome/cart';
$route['universes'] = '/welcome/search';
$route['designers'] = '/welcome/designers';
$route['profile'] = '/welcome/profile';
$route['store'] = '/welcome/store';
