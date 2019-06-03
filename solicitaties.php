<?php
require "dbs/dbconnect.php";
session_start();
$user = $_SESSION['uID'];
$sql = "SELECT `BedrijfsID` FROM `users` WHERE `ID` LIKE '$user'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$bedrijf = $row['BedrijfsID'];
}
$sql = "select * from `opdrachten` inner join `deelnemers` on opdrachten.ID = deelnemers.OpdrachtID WHERE opdrachten.BedrijfsID like '$bedrijf'";
$result = $conn->query($sql);
echo "<form action='soliciteer.php' method='post'>";
echo "<table>";
echo "<tr><th>opdrachtnaam</th><th>opdrachtnaam</th><th>opdrachtbeschijving</th></tr>";
while ($row= $result->fetch_assoc()){
    echo "<tr>";
    echo  "<td>".$row["Opdrachtnaam"]."</td>";
    echo  "<td>".$row["Opdrachtnaam"]."</td>";
    echo "<td>".$row["Opdrachtbeschrijving"]."</td>";
    echo "<td><button type='submit' value='".$row["ID"]."'  name='opID'>soliciteer</button></td>";
    echo "</tr>";
}
echo "</table></form>";