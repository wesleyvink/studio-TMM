<?php
session_start();
require "dbs/dbconnect.php";
if (isset($_POST['aanpas'])){
    $opID2 = $_POST['aanpas'];
    $_SESSION['aanpas'] = $opID2;
}
else{
    $opID2 = $_SESSION['aanpas'];
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
<div class="Picture">
<form action="foto%20toevoegen.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>opdracht naam</td><td><input type="text"></td>
        </tr>
        <tr>
            <td></td><td></td>
        </tr>
        <tr>
            <td></td><td></td>
        </tr>
        <a href="mainpage.php"><button class="example_a btnPictureHome">home</button></a>
    </table>

</form>
    </div>
</html>