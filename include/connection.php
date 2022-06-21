<?php
$myServer = "HAROON-PC";
$myDB = "guest";
$myUser = "sa";
$myPass = "raza6789";
$connectionInfo = array("Database"=>$myDB, "UID" => $myUser, "PWD" => $myPass);

$conn = sqlsrv_connect($myServer, $connectionInfo); //returns false
if( $conn === false )
{
    echo "failed connection";
}
