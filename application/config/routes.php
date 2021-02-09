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
$route['default_controller'] = 'WelcomeController';
/*Web*/
$route['home'] = 'WelcomeController/about_us';
$route['about'] = 'WelcomeController/about_us';
$route['blog']='WelcomeController/blog';
$route['business']='WelcomeController/business';
$route['coming_soon']='WelcomeController/coming_soon';
$route['Communication']='WelcomeController/Communication';
$route['contact']='WelcomeController/contact';
$route['course_details']='WelcomeController/course_details';
$route['faq']='WelcomeController/faq';
$route['admission_form']='WelcomeController/admission_form';
$route['gallery']='WelcomeController/gallery';
$route['language']='WelcomeController/language';
$route['photography']='WelcomeController/photography';
$route['single_page']='WelcomeController/single_page';
$route['social_media']='WelcomeController/social_media';
$route['yojanaye'] = 'WelcomeController/yojanaye';
$route['bhamashah'] = 'WelcomeController/bhamashah';
$route['bhamashah-list'] = 'WelcomeController/bhamashah_list';
$route['padaadhikari'] = 'WelcomeController/padaadhikari';
$route['labharthi'] = 'WelcomeController/labharthi';
$route['labharthi-list'] = 'WelcomeController/labharthi_list';
$route['software'] = 'WelcomeController/software';
$route['meeting'] = 'WelcomeController/meeting';
$route['library'] = 'Web/UserController/library';
$route['library-list'] = 'UserController/library_list';

$route['login'] = 'Web/UserController/login';
$route['post-login'] = 'Web/UserController/do_login';
$route['register'] = 'Web/UserController/register';
$route['post-register'] = 'Web/UserController/post_register';
$route['user-profile'] = 'Web/UserController/userProfile';
$route['logout']='Web/UserController/logout';
$route['contact-us'] = "WelcomeController/contact_us";

/*Admin*/
$route['admin'] = 'Admin/AdminController';
$route['admin/login'] = 'Admin/AdminController';
$route['admin/post-login'] = 'Admin/AdminController/post_login';
$route['admin/dashboard'] = 'Admin/AdminController/dashboard';
$route['admin/admin-profile'] = 'Admin/AdminController/profile';
$route['admin/update-profile'] = 'Admin/AdminController/update_profile';
$route['admin/update-password'] = 'Admin/AdminController/update_password';

$route['admin/students'] = 'Admin/Student';
$route['admin/students-list'] = 'Admin/Student/students_list';
$route['admin/students/add'] = 'Admin/Student/create';
$route['admin/students/store'] = 'Admin/Student/store';
$route['admin/students/details/(:any)'] = 'Admin/Student/details/$1';
$route['admin/students/update-status'] = 'Admin/Student/updateStatus';
$route['admin/students/delete'] = 'Admin/Student/delete';

// bhamashah 
$route['admin/bhamashah'] = 'Admin/Bhamashah';
$route['admin/bhamashah-list'] = 'Admin/Bhamashah/bhamashah_list';
$route['admin/bhamashah/add'] = 'Admin/Bhamashah/create';
$route['admin/bhamashah/store'] = 'Admin/Bhamashah/store';
$route['admin/bhamashah/details/(:any)'] = 'Admin/Bhamashah/details/$1';
$route['admin/bhamashah/update-status'] = 'Admin/Bhamashah/updateStatus';
$route['admin/bhamashah/delete'] = 'Admin/Bhamashah/delete';

// library 
$route['admin/library'] = 'Admin/Library';
$route['admin/library-list'] = 'Admin/Library/library_list';
$route['admin/library/add'] = 'Admin/Library/create';
$route['admin/library/store'] = 'Admin/Library/store';
$route['admin/library/delete'] = 'Admin/Library/delete';

$route['admin/query'] = 'Admin/AdminController/query';
$route['admin/query-list'] = 'Admin/AdminController/query_list';

$route['admin/logout'] = 'Admin/AdminController/logout';

$route['404_override'] = 'WelcomeController/page404';
$route['translate_uri_dashes'] = FALSE;

