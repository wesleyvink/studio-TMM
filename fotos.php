<?php
session_start();
require "dbs/dbconnect.php";
if (isset($_POST['opID3'])){
    $opID = $_POST['opID3'];
    $_SESSION['opID3'] = $opID;
}
else{
    $opID = $_SESSION['opID3'];
}
?>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    </head>
    <div class="Picture" style="
    overflow-y: scroll;    height: 80% !important; width: 90%;     margin-left: 5%!important;
">
    <h1 style="margin-left: 30px; margin-top: 30px">fotos van het project</h1>
<?php
$sql  = "SELECT * FROM `foto` WHERE omschrijving is not null and omschrijving not like '0' and OpdrachtID = ".$opID;
$result = $conn->query($sql);
echo "<table width='60%' style='margin: 30px'>";
echo "<tr><th><h1>omschrijving</h1></th><th style=' float: left; margin-left: 10%'><h1>`foto</h1></th></tr>";
while ($row= $result->fetch_assoc()){
    echo "<tr>";
    echo  "<td><h2>".$row["omschrijving"]."</h2></td>";
    echo  "<td> <img  src='".$row["fotoloc"]."' style='height: 500px !important; width: auto; margin-left: 10%' width=20% /></td>";
    echo "</tr>";
}
echo "</table>";
?></div></html>
