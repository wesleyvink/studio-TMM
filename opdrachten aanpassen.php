<?php
session_start();
require "dbs/dbconnect.php";
if (isset($_POST['aanpas'])){
    $aanpas = $_POST['aanpas'];
    $_SESSION['aanpas'] = $aanpas;
}
else{
    $aanpas = $_SESSION['aanpas'];
}
if(isset($_POST["fire"])){
    $sql = "DELETE FROM `deelnemers` WHERE `ID` LIKE ".$_POST["fire"];
    $conn->query($sql)  or die("Error : " . mysqli_error($conn));
}
if(isset($_POST["aanpassen"])){
    $sql = "UPDATE `opdrachten` SET `Opdrachtnaam`='".$_POST["naam"]."',`Opdrachtbeschrijving`='".$_POST["desc"]."' WHERE `ID` LIKE ".$_POST["aanpassen"];
    $conn->query($sql)  or die("Error : " . mysqli_error($conn));
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
    <table>
        <?php
        $sql = "SELECT * FROM `opdrachten` WHERE `ID` LIKE '".$aanpas."'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<form action=\"opdrachten%20aanpassen.php\" method=\"post\" enctype=\"multipart/form-data\"><tr>
            <td>opdracht naam</td><td><input type='text' name='naam' value='" . $row["Opdrachtnaam"] . "'></td>
            </tr>
            <tr>
            <td>opdracht beschrijving</td><td><input type='text' name='desc' value='" . $row["Opdrachtbeschrijving"] . "'></td>
            </tr>
            <tr>
            <td></td><td><button type='submit' name='aanpassen' value='".$row["ID"]."' class='example_a btnPictureHome'>aanpassen</button></td>
            </tr>
            </form>";
        }
        $sql = "SELECT deelnemers.ID, users.VoorNaam, users.AchterNaam FROM `deelnemers` INNER JOIN users ON deelnemers.UserID = users.ID where `aangenomen` like 1 and `OpdrachtID` like '".$aanpas."'";
        $result = $conn->query($sql);

            echo "<tr>
            <th>medewerkers:</th><td> </td>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<form action='opdrachten%20aanpassen.php' method='post'><tr>
                    <td>".$row["VoorNaam"]." ".$row["AchterNaam"]."</td><td><button type='submit' name='fire' value='".$row["ID"]."' class='example_a btnPictureHome'>ontslaan</button></td>
                  </tr></form>";
        }
            ?>
        <tr>
            <td>
        <a href="mainpage.php"><button class="example_a btnPictureHome">home</button></a>
            </td>
        </tr>
    </table>


    </div>
</html>