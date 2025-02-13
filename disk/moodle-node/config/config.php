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
$CFG->allowframembedding = 1;

// cấu hình hool ra hệ thống khác khi hoàn thành course module
$CFG->lmsCoreLearningStateHookEndpoint = "http://117.103.224.196:28002/api/Lesson/create-log";
$CFG->lmsCoreLearningProcessHookEndpoint = "http://117.103.224.196:28002/api/Shared/lesson/hook";
$CFG->lmsCoreSsoName = "EDU SSO";

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
