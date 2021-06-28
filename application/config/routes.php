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

$route['default_controller'] = 'website';
$route['sobre-nos'] = 'website/sobre_nos';
$route['sobre-nos/estrutura-organica'] = 'website/estrutura_organica';
$route['sobre-nos/marcos'] = 'website/marcos';
$route['areas-logistica'] = 'website/unidades_negocio';
$route['areas-logistica/(:num)'] = 'website/areas_logistica/$1';
$route['portfolio/projectos'] = 'website/projectos';
$route['portfolio'] = 'website/portfolio';
$route['oportunidades'] = 'website/oportunidades';
$route['oportunidades/trabalhar-enhl'] = 'website/trabalhar_enhl';
$route['portfolio/parcerias'] = 'website/parcerias';
$route['parcerias/zmi'] = 'website/zmi';
$route['parcerias/arpjv'] = 'website/arpjv';
$route['parcerias/sscale'] = 'website/sscale';
$route['parcerias/bonatti'] = 'website/bonatti';
$route['parcerias/enhils'] = 'website/enhils';
$route['parcerias/lngshipping'] = 'website/lngshipping';
$route['parcerias/belleli'] = 'website/belleli';
$route['parcerias/enmar'] = 'website/enmar';
$route['parcerias/technip'] = 'website/technip';
$route['oportunidades/fornecedores'] = 'website/fornecedores';
$route['contactos/mapa'] = 'website/mapa';
$route['blog'] = 'website/blog';
$route['page/(:num)'] = 'website/page/$1';
$route['noticias'] = 'website/noticias';
$route['noticia/(:num)'] = 'website/noticia/$1';
$route['contactos'] = 'website/contactos';
$route['galeria'] = 'website/galeria';
$route['galeria_album/(:num)'] = 'website/galeria_album/$1';
$route['galeria/videos'] = 'website/galeria_videos';

$route['enhl-admin'] = 'admin/admin';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
