<?php
/**
* The db.php file which initiates a connection to the database
* and gives a global $db variable for access
* @author Swashata <swashata@intechgrity.com>
* @uses ezSQL MySQL
*/
/** edit your configuration */
$dbuser = 'root';
$dbname = 'user';
$dbpassword = 'mitchell84';
$dbhost = 'localhost';
 
/** Stop editing from here, else you know what you are doing <img draggable="false" class="emoji" alt="😉" src="https://s.w.org/images/core/emoji/2/svg/1f609.svg"> */
 
/** defined the root for the db */
if(!defined('ADMIN_DB_DIR'))
define('ADMIN_DB_DIR', dirname(__FILE__));
 
require_once ADMIN_DB_DIR . '/ez_sql_core.php';
require_once ADMIN_DB_DIR . '/ez_sql_mysql.php';
global $db;
$db = new ezSQL_mysql($dbuser, $dbpassword, $dbname, $dbhost);

?>