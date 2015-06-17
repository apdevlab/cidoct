<?php
/**
 * CLI Config file for the Doctrine2 CLI
 */

use Doctrine\ORM\Tools\Console\ConsoleRunner;

// Do the bootstrap manually
define('APPPATH', dirname(__FILE__).'/application/');
define('BASEPATH', APPPATH.'../system/');
define('ENVIRONMENT', 'development');

chdir(APPPATH);
require APPPATH.'libraries/Doctrine.php';

$doctrine = new Doctrine();
$entityManager = $doctrine->entityManager;

return ConsoleRunner::createHelperSet($entityManager);
