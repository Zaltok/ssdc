<?php
// These four define set the database connection details.
define('SS_DATABASE_CLASS', 'MySQLDatabase');
define('SS_DATABASE_SERVER', 'localhost');
define('SS_DATABASE_NAME', 'ss_mysite');
define('SS_DATABASE_USERNAME', 'root');
define('SS_DATABASE_PASSWORD', '');

// This sets a prefix, which is prepended to the $database variable. This is
// helpful mainly on shared hosts, when every database has a prefix.
define('SS_DATABASE_PREFIX', '');

// These two lines are a bit complicated. If I'm connecting to the server from
// 127.0.0.1 or MyIP and I'm using a browser with a + in the UserAgent, the site
// is put in dev mode, otherwise it is put in live mode. Most sites would only
// need to put the site in either dev or live mode, thus wont need the IP checks
if(isset($_SERVER['REMOTE_ADDR']) && ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') !== false)
    define('SS_ENVIRONMENT_TYPE', 'dev');
else
    define('SS_ENVIRONMENT_TYPE', 'live');

// These two defines sets a default login which, when used, will always log
// you in as an admin, even creating one if none exist.
define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
define('SS_DEFAULT_ADMIN_PASSWORD', 'password');

// This causes errors to be written to the BASE_PATH/silverstripe.log file.
// Path must be relative to BASE_PATH
define('SS_ERROR_LOG', 'silverstripe.log');
