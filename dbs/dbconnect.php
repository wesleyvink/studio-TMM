<?php
$loc = "localhost";
$ust = "root";
$pass = "";
$dbs = "studio_tmm";

$conn = new mysqli($loc,$ust,$pass,$dbs);

if (mysqli_connect_error()){
    die("could not connect to data base");
}
?>