<?php
if (isset($_POST["afrond"])){
    $sql = "UPDATE `opdrachten` SET `afgerond`= 1 WHERE ID LIKE ".$_POST["afrond"];
    $conn->query($sql) or die("Error : " . mysqli_error($conn));
}
$sql = "SELECT opdrachten.ID, Bedrijfsnaam,Opdrachtnaam,Opdrachtbeschrijving FROM `opdrachten` WHERE `Bedrijfsnaam` like 'echtbedrijf' and `afgerond` like 0";
$result = $conn->query($sql);
echo "<div class='page2banner'>";
echo "<h1>Uw Opdrachten</h1>";
echo "</div>";
echo "<table>";
echo "<tr><th>bedrijfsnaam</th><th>opdrachtnaam</th><th>opdrachtbeschijving</th></tr>";
while ($row= $result->fetch_assoc()){
    echo "<form action='foto%20toevoegen.php' method='post'>";
    echo "<tr>";
    echo "<td>".$row["Bedrijfsnaam"]."</td>";
    echo "<td>".$row["Opdrachtnaam"]."</td>";
    echo "<td><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='button' onclick='fer".$row["ID"]."()'>meerinfo</button></td>";
    echo "<td><div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='opID2' class=\"example_a\" rel=\"nofollow noopener\">foto toevoegen</button></div></div></td></form>";
    echo "<td><form action='opdrachten%20aanpassen.php' method='post'> <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='aanpas' class=\"example_a\" rel=\"nofollow noopener\">opdrachten aanpassen</button></div></form></td>  ";
    echo "<td><form action='fotos.php' method='post'> <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='opID3' class=\"example_a\" rel=\"nofollow noopener\">fotos bekijken</button></div></form></td>  ";
    echo "<td><form action='mainpage.php' method='post'> <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='afrond' class=\"example_a\" rel=\"nofollow noopener\">afronden</button></div></form></td>  ";

    echo "</tr>";
    echo "<script> function fer".$row["ID"]."() {
    alert('".$row["Opdrachtbeschrijving"]."')
}</script>";
}
echo "</table>";
echo "<img src='afb/tape1.png' class='page2tape1' width='70' height='20'/>";
echo "<img src='afb/tape2.png' class='page2tape2' width='70' height='20'/>";
?>