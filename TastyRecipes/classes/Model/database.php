<?php
define('server', 'localhost');
define('user', 'root');
define('password', '');
define('database', 'loginsystem');


class Database {
    function __construct() {
        $connection = mysql_connect(server,user, password, database);
        mysql_select_db(database,$connection) or die ("Error:".mysql_error()); 
    }
} 

?>