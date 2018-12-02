<?php
class Database{
private $dbServername = 'localhost';
private $dbusername = 'root';
private $dbpassword = '';
private $dbname = 'loginsystem';


    function __construct() {
        $connection = mysqli_connect('$dbservername', '$dbusername', '$dbpassword', '$dbname');
        mysqli_select_db($connection, $dbname) or die ("error:". mysqli_connect_error());
    }
}

?>