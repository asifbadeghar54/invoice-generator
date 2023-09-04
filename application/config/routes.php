<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Admin';
$route['404_override'] = 'Error404';
$route['translate_uri_dashes'] = FALSE;


// $route['admin'] = 'Admin';
$route['admin-dashboard'] = $route['default_controller'] . '/dashboard';
$route['invoice/(:any)'] = $route['default_controller'] . '/invoice/$1';
$route['create-invoice'] = $route['default_controller'] . '/createInvoice';
$route['edit-invoice/(:any)'] = $route['default_controller'] . '/editInvoice/$1';
$route['invoicelist'] = $route['default_controller'] . '/invoiceList';

$route['auth'] = 'Auth';
$route['login'] = $route['auth'] . '/login';
$route['authlogin'] = $route['auth'] . '/authLogin';
$route['users'] = $route['auth'] . '/usersList';
$route['reset-password'] = $route['auth'] . '/resetPassword';

// DigitalCard
$route['digital_card_controller'] = 'DigitalCard';
$route['membercard'] = $route['digital_card_controller'] . '/cardByMember';



// new

