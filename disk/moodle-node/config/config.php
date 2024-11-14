<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'lms-db-01-cn';
$CFG->dbname    = 'moodle_eduvtclms_vm_release';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'root_password';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = '@FullServerName';
$CFG->dataroot  = '/var/www/html/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
$CFG->sslproxy  = 1;

$CFG->oauthlib_ignoresecurity = true;

$CFG->site_customer_hook_url = "https://landingpage-lms.vtccore.com/vm-hook";
$CFG->sso_edu_name = "EDU SSO";
$CFG->allowframembedding = 1;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
