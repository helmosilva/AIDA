<?php error_reporting(E_ALL);?>

<?php 
session_start();

include "./config/config.php";

$mysqli_conn = new mysqli($db['hostname'], $db['username'], $db['password'], $db['database']);
        if ($mysqli_conn -> connect_errno) {//check connection
        print "failed to connect to MySQL: (" . $mysqli_conn -> connect_errno . ") " . $mysqli_conn -> connect_errno;
        
        }
        
?>