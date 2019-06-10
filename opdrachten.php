<?php
require "dbs/dbconnect.php";
$sql = "SELECT opdrachten.ID, Bedrijfsnaam,Opdrachtnaam,Opdrachtbeschrijving FROM `opdrachten` INNER JOIN `deelnemers` on `deelnemers`.`OpdrachtID` = `opdrachten`.`ID` WHERE afgerond LIKE 0 and `deelnemers`.`UserID` != ".$_SESSION['uID'];
$result = $conn->query($sql);
echo "<form action='soliciteer.php' method='post'>";
echo "<table>";
echo "<tr><th>bedrijfsnaam</th><th>opdrachtnaam</th><th>opdrachtbeschijving</th></tr>";
while ($row= $result->fetch_assoc()){
    echo "<tr>";
    echo  "<td>".$row["Bedrijfsnaam"]."</td>";
    echo  "<td>".$row["Opdrachtnaam"]."</td>";
        echo "<td><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='button' onclick='fer".$row["ID"]."()'>meerinfo</button></td>";
    echo "<td>  <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='opID' class=\"example_a\" rel=\"nofollow noopener\">Soliciteer</button></div>";

    echo "</tr>";
    echo "<script> function fer".$row["ID"]."() {
    alert('".$row["Opdrachtbeschrijving"]."')
}</script>";
}
echo "</table></form>";
?>