<?php

require "dbs/dbconnect.php";
$sql = "SELECT opdrachten.ID, Bedrijfsnaam,Opdrachtnaam,Opdrachtbeschrijving FROM `opdrachten` INNER JOIN `deelnemers` on `deelnemers`.`OpdrachtID` = `opdrachten`.`ID` WHERE afgerond LIKE 0 AND `deelnemers`.`UserID` = ".$_SESSION["uID"]." AND `aangenomen` = 1";
$result = $conn->query($sql);
echo "<table>";
echo "<tr><th>bedrijfsnaam</th><th>opdrachtnaam</th><th>opdrachtbeschijving</th></tr>";
while ($row= $result->fetch_assoc()){
    echo "<form action='foto%20toevoegen.php' method='post'><tr>";
    echo  "<td>".$row["Bedrijfsnaam"]."</td>";
    echo  "<td>".$row["Opdrachtnaam"]."</td>";
    echo "<td><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='button' onclick='fer".$row["ID"]."()'>meerinfo</button></td>";
    echo "<td>  <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='opID2' class=\"example_a\" rel=\"nofollow noopener\">foto toevoegen</button></div>
</div></td></form>";
    echo "<td><form action='fotos.php' method='post'> <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='opID3' class=\"example_a\" rel=\"nofollow noopener\">fotos bekijken</button></div></form></td>  ";


    echo "</tr>";
    echo "<script> function fer".$row["ID"]."() {
    alert('".$row["Opdrachtbeschrijving"]."')
}</script>";
}
echo "</table></form>";
?>