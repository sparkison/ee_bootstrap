<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| ExpressionEngine Config Items
|--------------------------------------------------------------------------
|
| The following items are for use with ExpressionEngine.  The rest of
| the config items are for use with CodeIgniter, some of which are not
| observed by ExpressionEngine, e.g. 'permitted_uri_chars'
|
*/

/*
 * Dynamic environment functionality
 */
if ( ! defined('ENV'))
{
	switch (strtolower($_SERVER['HTTP_HOST'])) {
		case 'MYSITE.COM' :
			define('ENV', 'prod');
			define('ENV_FULL', 'Production');
			define('SERVER_NAME', 'MYSITE.COM');
			define('ENV_DEBUG', FALSE);
		break;

		case 'STAGING.MYSITE.COM' :
			define('ENV', 'stage');
			define('ENV_FULL', 'Staging');
			define('SERVER_NAME', 'STAGING.MYSITE.COM');
			define('ENV_DEBUG', FALSE);
		break;

		case 'LOCAL.DEV' :
			define('ENV', 'dev');
			define('ENV_FULL', 'Development');
			define('SERVER_NAME', 'LOCAL.DEV');
			define('ENV_DEBUG', TRUE);
		break;

		default :
			define('ENV', 'local');
			define('ENV_FULL', 'Local');
			define('SERVER_NAME', 'LOCALHOST:8000');
			define('ENV_DEBUG', TRUE);
		break;
	}
}

$protocol       = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$base_url       = $protocol . SERVER_NAME;
$base_path      = $_SERVER['DOCUMENT_ROOT'];
$system_folder  = APPPATH . '../';
$images_folder  = 'images';
$images_path    = $base_path . '/' . $images_folder;
$images_url     = $base_url . '/' . $images_folder;

$config['app_version'] = '3.1.1';
$config['debug'] = ENV_DEBUG === TRUE ? '1' : '0';
$config['show_profiler'] = ENV_DEBUG === TRUE ? 'y' : 'n';
$config['cp_url'] = $base_url . '/admin.php';
$config['doc_url'] = 'https://ellislab.com/expressionengine/user-guide/';
$config['is_system_on'] = 'y';
$config['allow_extensions'] = 'y';
$config['cache_driver'] = 'file';
/*
 * Set the various environment database credentials
 */
if(ENV === 'prod') {
	// Local dev DB vars
	$config['database'] = array (
		'expressionengine' => array (
			'hostname' => 'localhost',
			'username' => '',
			'password' => '',
			'database' => '',
			'dbdriver' => 'mysqli',
			'dbprefix' => '',
			'pconnect' => FALSE
		),
	);
}
if(ENV === 'stage') {
	// Staging DB vars
	$config['database'] = array (
		'expressionengine' => array (
			'hostname' => 'localhost',
			'username' => '',
			'password' => '',
			'database' => '',
			'dbdriver' => 'mysqli',
			'dbprefix' => '',
			'pconnect' => FALSE
		),
	);
}
if(ENV === 'dev') {
	// Local dev DB vars
	$config['database'] = array (
		'expressionengine' => array (
			'hostname' => '',
			'username' => '',
			'password' => '',
			'database' => '',
			'dbdriver' => 'mysqli',
			'dbprefix' => '',
			'pconnect' => FALSE
		),
	);
}
if(ENV === 'local') {
	// Staging DB vars
	$config['database'] = array (
		'expressionengine' => array (
			'hostname' => 'localhost',
			'username' => '',
			'password' => '',
			'database' => '',
			'dbdriver' => 'mysqli',
			'dbprefix' => '',
			'pconnect' => FALSE
		),
	);
}

$config['db_port'] = '';
$config['site_label'] = '';
$config['cookie_prefix'] = '';
$config['cookie_httponly'] = 'y';

// Overwrite URL control panel settings
$config['multiple_sites_enabled'] = 'n';
$config['index_page'] = '';
$config['base_url'] = $base_url;
$config['site_url'] = $base_url;
$config['theme_folder_path'] = $base_path . '/themes/';
$config['theme_folder_url'] = $base_url . '/themes/';

// Disable saving templates as flat files on server
$config['save_tmpl_files'] = ENV === 'dev' || ENV === 'local' ? 'y' : 'n';

// END EE config items


/**
 * Custom upload directory paths
 *
 * The array keys must match the ID from exp_upload_prefs
 */
// $config['upload_preferences'] = array(
//     4 => array(
//         'name'        => 'Default Uploads',
//         'server_path' => $base_path . '/uploads/files/',
//         'url'         => $base_url  . '/uploads/files/'
//     ),
//     5 => array(
//         'name'        => 'Image Uploads',
//         'server_path' => $base_path . '/uploads/images/',
//         'url'         => $base_url  . '/uploads/images/'
//     )
// );

/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of "AUTO" works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'			Default - auto detects
| 'PATH_INFO'		Uses the PATH_INFO
| 'QUERY_STRING'	Uses the QUERY_STRING
| 'REQUEST_URI'		Uses the REQUEST_URI
| 'ORIG_PATH_INFO'	Uses the ORIG_PATH_INFO
|
*/
$config['uri_protocol']	= 'AUTO';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
*/
$config['charset'] = 'UTF-8';


/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
|
| This item allows you to set the filename/classname prefix when extending
| native libraries.  For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/core_classes.html
| http://codeigniter.com/user_guide/general/creating_libraries.html
|
*/
$config['subclass_prefix'] = 'EE_';

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to
| determine what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
*/
$config['log_threshold'] = 0;

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';


/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Sessions class with encryption
| enabled you MUST set an encryption key.  See the user guide for info.
|
| Recommend generating new string for each install: https://www.grc.com/passwords.htm
*/
$config['encryption_key'] = '';


/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
*/
$config['rewrite_short_tags'] = TRUE;


/* End of file config.php */
/* Location: ./system/expressionengine/config/config.php */
