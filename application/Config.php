<?php

/*
 * -------------------------------------
 * Nicolas Magliaro - nicolasmagliaro@gmail.com
 * framework mvc basico
 * Controller.php
 * -------------------------------------
 */

/* App Settings */
define('DOMAIN', 'portalicm.local');
define('BASE_URL', 'http://portalicm.local/');
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'icm'); // Name of default template container

define('APP_NAME', 'ICM');
define('BRAND_ICO', 'public/img/brand.png'); // Set a 50x50 px Image
define('APP_SLOGAN', 'Portal');
define('APP_COMPANY', 'ICM');
define('SESSION_TIME', 0); //Set +integer value in minutes or Set value to 0 for endless session
define('HASH_KEY', '4f6a6d832be79');

define('ENABLE_COOKIES', 0); // 1 to enable creation of cookies

/* Enable App Modules */

$MODULES  = array(  'usuarios',
                    'reportes',
                    'settings',
                    'lotes'

			);
define('MODULES', serialize($MODULES));

/* DBA Settings */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_NAME', 'portal-icm');
define('DB_CHAR', 'utf8');

# LOGGIN CONFIGS

/**
 * Database Table Constants - these constants
 * hold the names of all the database tables used
 * in the script.
 */
define("TBL_LOG", "log");     //Database where logs will be stored
// Security constant, the one you'll have to use in order to delete the log:
define("LOG_PASS", ""); //MUST be sha1 encoded 
define("LOG_LIB", ROOT."models/logsModel.php");

?>