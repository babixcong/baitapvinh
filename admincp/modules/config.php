<!-- <?php
$servername = "localhost";
$database = "handmade";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db($conn, $database);
mysqli_set_charset($conn, 'UTF8');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?> -->
<?php

$serverName = "DESKTOP-5LV4OBU\ABC"; 
$uid = "sa";   
$pwd = "1234";  
$databaseName = "test"; 

$connectionInfo = [
    "UID"=>$uid,                            
    "PWD"=>$pwd,                            
    "Database"=>$databaseName
]; 

/* Connect using SQL Server Authentication. */  
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if ($conn === false) {
     die(print_r(sqlsrv_errors(), true));
}
