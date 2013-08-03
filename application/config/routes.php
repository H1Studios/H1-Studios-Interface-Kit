<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * NOTICE OF LICENSE
 * 
 * Licensed under the Academic Free License version 3.0
 * 
 * This source file is subject to the Academic Free License (AFL 3.0) that is
 * bundled with this package in the files license_afl.txt / license_afl.rst.
 * It is also available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/AFL-3.0 Academic Free License (AFL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

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
| There are two reserved routes:
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

// Custom Routing for Desk.com

$route['overview'] = "features";
$route['jobs'] = "careers";
$route['careers/(:any)'] = "careers/index/$1";

$route['termssfdc20120402'] = "terms/sfdc";
$route['terms121010'] = "terms/terms121010";

$route['default_controller'] = "home";
$route['404_override'] = 'errors';

// Zen Compete
$route['help-desk/comparison/zendesk-alternative'] = 'seopages/zendeskalternative';
$route['help-desk/comparison/zendesk-pricing'] = 'seopages/zendeskpricing';
$route['help-desk/comparison/zendesk-review'] = 'seopages/zendeskreview';

// SEO Pages
$route['help-desk/all-in-one'] = 'seopages/allinone';
$route['help-desk/online'] = 'seopages/online';
$route['help-desk/social'] = 'seopages/social';
$route['help-desk/software'] = 'seopages/software';
$route['help-desk/case-management-software'] = 'seopages/casemanagementsoftware';
$route['help-desk/collaboration'] = 'seopages/collaboration';
$route['help-desk/support'] = 'seopages/support';
$route['help-desk/knowledge-base'] = 'seopages/knowledgebase';
$route['help-desk/tools'] = 'seopages/tools';
$route['help-desk/integration'] = 'seopages/integration';
$route['help-desk/pricing'] = 'seopages/pricing';
$route['help-desk/remote'] = 'seopages/remote';
$route['help-desk'] = 'seopages';

// Sitemap
$route['sitemap\.xml'] = "seo/sitemap";


/* End of file routes.php */
/* Location: ./application/config/routes.php */