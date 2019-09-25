<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/





$route['phone'] = 'myaccount/phone/';

/*
| -------------------------------------------------------------------------
| HOME CONTROLER
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'home';



/*
| -------------------------------------------------------------------------
| AUTH URL
| -------------------------------------------------------------------------
*/

$route['login']  = 'auth/login';
$route['register'] = 'auth/register';
$route['forgot_password'] = 'auth/forgot_password';
$route['register'] = 'auth/register';
$route['logout'] = 'auth/logout';




/*
| -------------------------------------------------------------------------
| TRANSACCION CONTROLLER
| -------------------------------------------------------------------------
*/

$route['send'] = 'myaccount/transaction/send/';
$route['confirm'] = 'myaccount/transaction/confirm/';
$route['payments/(:any)'] = 'payments/index/$1';
#$route['pagination/(:any)'] = 'pagination/index/$1';


$route['payments/refund/(:any)'] = 'payments/refund/$1';



$route['order'] = 'order/index';





/*
| -------------------------------------------------------------------------
| History order
| -------------------------------------------------------------------------
*/

$route['myaccount/history/(:any)'] = 'myaccount/history/index/$1';




/*
| -------------------------------------------------------------------------
| Dispute URL
| -------------------------------------------------------------------------
*/

$route['myaccount/resolution_center/home/(:any)'] = 'myaccount/resolution_center/home/index/$1';


#$route['myaccount/resolution_center/dispute/(:any)'] = 'myaccount/resolution_center/dispute/index/$1';

#$route['myaccount/resolution_center/case/(:any)'] = 'myaccount/resolution_center/case/index/$1';

$route['myaccount/resolution_center/case/(:any)'] = 'myaccount/resolution_center/caso/index/$1';





$route['myaccount/resolution_center/case/documentation/(:any)'] = 'myaccount/resolution_center/caso/documentation/$1';



$route['myaccount/resolution_center/case/dialogue/(:any)'] = 'myaccount/resolution_center/caso/dialogue/$1';

// Temp

$route['myaccount/resolution_center/case/messages/(:any)'] = 'myaccount/resolution_center/caso/dialogue/$1';

// Temp


$route['myaccount/resolution_center/case/add_documentation/(:any)'] = 'myaccount/resolution_center/caso/add_documentation/$1';


$route['myaccount/resolution_center/case/view_document/(:any)'] = 'myaccount/resolution_center/caso/view_document/$1';


$route['myaccount/resolution_center/case/activity/(:any)'] = 'myaccount/resolution_center/caso/activity/$1';


///////// TO CLOSE CASE
$route['myaccount/resolution_center/case/close/(:any)'] = 'myaccount/resolution_center/caso/close/$1';

/////   TO RETURN PAYMENT
$route['myaccount/resolution_center/case/return_payment/(:any)'] = 'myaccount/resolution_center/caso/return_payment/$1';








/*
| -------------------------------------------------------------------------
|  WALLET EDIT/DELETE ITEMS
| -------------------------------------------------------------------------
*/




#$route['myaccount/wallet/bank/delete/(:any)'] = "myaccount/wallet/bank/delete/$1";







/*
| -------------------------------------------------------------------------
|  ERROR CONTROLLER
| -------------------------------------------------------------------------
*/

$route['404_override'] = 'Error404';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8
