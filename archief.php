<?php
require "dbs/dbconnect.php";
$sql = "SELECT  opdrachten.ID, Bedrijfsnaam,Opdrachtnaam,Opdrachtbeschrijving FROM `opdrachten` INNER JOIN `bedrijven` on `bedrijven`.`ID` = `opdrachten`.`BedrijfsID` WHERE afgerond LIKE 1 ";
$result = $conn->query($sql);
echo "<form action='fotos.php' method='get'>";
echo "<table>";
echo "<tr><th>bedrijfsnaam</th><th>opdrachtnaam</th><th>opdrachtbeschijving</th></tr>";
while ($row= $result->fetch_assoc()){
    echo "<tr>";
    echo  "<td>".$row["Bedrijfsnaam"]."</td>";
    echo  "<td>".$row["Opdrachtnaam"]."</td>";
    echo "<td><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='button' onclick='fer".$row["ID"]."()'>meerinfo</button></div></td>";
    echo "<td><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='submit' value='".$row["ID"]."'  name='opID3'>bekijk foto's</button></div></td>";
    echo "</tr>";
    echo "<script> function fer".$row["ID"]."() {
    alert('".$row["Opdrachtbeschrijving"]."')
}</script>";
}

echo "</table></form>";
?>