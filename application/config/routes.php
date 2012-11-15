<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = 'page';
$route['404_override'] = 'page/page_missing';

// Page routes (Static Pages)
$route['page'] = 'page/page_missing';
$route['page/(:any)'] = 'page/page_missing';
$route['home'] = 'page/index';
$route['site_map'] = 'page/site_map';
$route['about_us'] = 'page/about_us';
$route['contact_us'] = 'page/contact_us';
$route['login'] = 'page/login';
$route['register'] = 'page/register';
$route['logout'] = 'page/logout';
$route['404'] = 'page/page_missing';


// Validate routes
$route['validate'] = 'page/page_missing';
$route['validate/index'] = 'page/page_missing';
$route['validate/(:any)'] = 'validate/$1';

// Account routes
// $route['account/(:any)'] = 'account/$1';
// $route['account'] = 'page/page_missing';
// $route['account/(:any)'] = 'page/page_missing';

// Dynamic routes
$route['(:any)/settings'] = 'account/settings';
$route['(:any)'] = 'account/profile/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
