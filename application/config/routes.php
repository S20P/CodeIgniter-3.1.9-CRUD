<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
// $route['default_controller'] = 'welcome';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;


$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['news']='news/index';
$route['news/(:any)'] = 'news/view/$1';
$route['news/create']='news/create';

$route['stud'] = 'stud_controller';
$route['stud/add_view'] = 'stud_controller/add_student_view';
$route['stud/add'] = 'stud_controller/add_student';
$route['stud/edit/:any'] = 'stud_controller/update_student_view/$1';
$route['stud/edit'] = 'stud_controller/update_student';
$route['stud/delete/:any'] = 'stud_controller/delete_student/$1';
$route['mail'] = 'email_controller';
$route['mail/send'] = 'email_controller/send_mail';

$route['sessionex'] = 'session_controller';
$route['sessionex/unset'] = 'session_controller/unset_session_data';

$route['flashdata'] = 'flashData_controller';
$route['flashdata/add'] = 'flashData_controller/add';
