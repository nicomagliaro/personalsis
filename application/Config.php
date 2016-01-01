<?php

/*
 * -------------------------------------
 * Nicolas Magliaro - nicolasmagliaro@gmail.com
 * framework mvc basico
 * Controller.php
 * -------------------------------------
 */

/* App Settings */
define('BASE_URL', 'http://portalicm.local/');
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'icm'); // Name of default template container

define('APP_NAME', 'ICM');
define('APP_SLOGAN', 'Portal');
define('APP_COMPANY', 'ICM');
define('SESSION_TIME', 0); //Set +integer value in minutes or Set value to 0 for endless session
define('HASH_KEY', '4f6a6d832be79');

/* Enable App Modules */

$MODULES  = array('usuarios',
                    'reportes',
                    'settings'
			);

/*const MODULES = array( 'usuarios',
                       'reportes', 
                       'lotes',
                       'monitoreo', 
                       'settings')
        );
*/
/* DBA Settings */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_NAME', 'portal-icm');
define('DB_CHAR', 'utf8');

?>