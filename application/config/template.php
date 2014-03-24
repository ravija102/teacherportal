<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Template configuration
|--------------------------------------------------------------------------
| This file will contain the settings for the template library.
|
| 'parser'    = if you want your main template file to be parsed, set to TRUE
| 'template'  = the filename of the default template file
| 'cache_ttl' = the time all partials should be cache in seconds, 0 means no global caching
*/

$config['parser']    = FALSE;
$config['template']  = 'template';
$config['cache_ttl'] = 0;

$template['active_group'] = 'default';
$template['default']['template'] = 'templates/default.php'; 
//$template['default']['parser'] = 'smarty_parser';
// Template will call smarty_parser::parse()

$template['default']['parser'] = 'frog_parser';
$template['default']['parser_method'] = 'frog';
// Template will call frog_parser::frog()

$template['default']['parse_template'] = TRUE;

$template['default']['regions'] = array(
  'title',
  'content',
);