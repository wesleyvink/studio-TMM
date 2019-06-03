<?php
require "dbs/dbconnect.php";
$sql = "SELECT * FROM `opdrachten` INNER JOIN `bedrijven` on `bedrijven`.`ID` = `opdrachten`.`BedrijfsID` WHERE afgerond LIKE 0 ";
$result = $conn->query($sql);
echo "<form action='soliciteer.php' method='post'>";
echo "<table>";
echo "<tr><th>bedrijfsnaam</th><th>opdrachtnaam</th><th>opdrachtbeschijving</th></tr>";
while ($row= $result->fetch_assoc()){
    echo "<tr>";
    echo  "<td>".$row["Bedrijfsnaam"]."</td>";
    echo  "<td>".$row["Opdrachtnaam"]."</td>";
    echo "<td>".$row["Opdrachtbeschrijving"]."</td>";
    echo "<td><button type='submit' value='".$row["ID"]."'  name='opID'>soliciteer</button></td>";
    echo "</tr>";
}
echo "</table></form>";
?>