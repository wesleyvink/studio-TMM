<?php
require "dbs/dbconnect.php";
$sql = "SELECT opdrachten.ID, Bedrijfsnaam,Opdrachtnaam,Opdrachtbeschrijving FROM `opdrachten` LEFT JOIN `deelnemers` on `deelnemers`.`OpdrachtID` = `opdrachten`.`ID` WHERE afgerond LIKE 0 or NOT EXISTS (SELECT * FROM `deelnemers` WHERE `deelnemers`.`UserID` != ".$_SESSION['uID'].")";
$result = $conn->query($sql);
echo "<div class='page1banner'>";
echo "<h1>Soliciteren</h1>";
echo "</div>";
echo "<img src='afb/tape1.png' class='page1tape1' width='70' height='20'/>";
echo "<img src='afb/tape2.png' class='page1tape2' width='70' height='20'/>";
echo "<table>";
echo "<tr><th>bedrijfsnaam</th><th>opdrachtnaam</th><th>opdrachtbeschijving</th></tr>";
while ($row= $result->fetch_assoc()){
    echo "<form action='soliciteer.php' method='post'>";

    echo "<tr>";
    echo  "<td>".$row["Bedrijfsnaam"]."</td>";
    echo  "<td>".$row["Opdrachtnaam"]."</td>";
        echo "<td><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='button' onclick='fer".$row["ID"]."()'>meerinfo</button></td>";
    echo "<td>  <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='opID' class=\"example_a\" rel=\"nofollow noopener\">Soliciteer</button></div>";
    echo "</form><td><form action='fotos.php' method='post'> <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='opID3' class=\"example_a\" rel=\"nofollow noopener\">fotos bekijken</button></div></form></td>  ";

    echo "</tr>";
    echo "<script> function fer".$row["ID"]."() {
    alert('".$row["Opdrachtbeschrijving"]."')
}</script>";
}
echo "</table></form>";

?>