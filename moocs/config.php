<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '10.0.1.30';
$CFG->dbname    = 'dbmoocs';
$CFG->dbuser    = 'usermoocs';
$CFG->dbpass    = 'dBMoocs-2019';
$CFG->prefix    = 'moocs_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://moocs.umy.ac.id/moocs';
$CFG->dataroot  = '/home/adminweb/moocs-data';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
