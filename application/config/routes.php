<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'aduanController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// login


// aduan
$route['home']['get'] = 'AduanController/home';
$route['login']['POST'] = 'aduanController/index';
$route['masuk']['get'] = 'aduanController/masuk';
$route['logout']['GET'] = 'aduanController/logout';

$route['tampil-aduan']['GET'] = 'aduanController/tampilAduan';
$route['tambah-aduan']['GET'] = 'aduanController/tambahAduan';
$route['add-aduan']['POST'] = 'aduanController/addAduan';
$route['edit-aduan/(:num)']['GET'] = 'aduanController/editAduan/$1';
$route['update-aduan']['POST'] = 'aduanController/updateAduan/';
$route['hapus-aduan/(:num)']['GET'] = 'aduanController/hapusAduan/$1';


// kategori
$route['tampil-kategori']['GET'] = 'kategoriController/tampilKategori';
$route['tambah-kategori']['GET'] = 'kategoriController/tambahKategori';
$route['add-kategori']['POST'] = 'kategoriController/addKategori';
$route['edit-kategori/(:num)']['GET'] = 'kategoriController/editKategori/$1';
$route['update-kategori']['POST'] = 'kategoriController/updateKategori/';
$route['hapus-kategori/(:num)']['GET'] = 'kategoriController/hapusKategori/$1';


// posting
$route['tampil-posting']['GET'] = 'postingController/tampilPosting';
$route['tambah-posting']['GET'] = 'postingController/tambahPosting';
$route['add-posting']['POST'] = 'postingController/addPosting';
$route['edit-posting/(:num)']['GET'] = 'postingController/editPosting/$1';
$route['update-posting']['POST'] = 'postingController/updatePosting/';
$route['hapus-posting/(:num)']['GET'] = 'postingController/hapusPosting/$1';


// member
$route['tampil-member']['GET'] = 'memberController/tampilMember';
$route['tambah-member']['GET'] = 'memberController/tambahMember';
$route['add-member']['POST'] = 'memberController/addMember';
$route['edit-member/(:num)']['GET'] = 'memberController/editMember/$1';
$route['update-member']['POST'] = 'memberController/updateMember/';
$route['hapus-member/(:num)']['GET'] = 'memberController/hapusMember/$1';
