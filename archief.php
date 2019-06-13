<?php
require "dbs/dbconnect.php";
$sql = "SELECT  opdrachten.ID, Bedrijfsnaam,Opdrachtnaam,Opdrachtbeschrijving FROM `opdrachten` WHERE afgerond LIKE 1 ";
$result = $conn->query($sql);
echo "<form action='fotos.php' method='post'>";
echo "<div class='page3banner'>";
echo "<h1>Gallerij</h1>";
echo "</div>";
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
echo "<img src='afb/tape1.png' class='page3tape1' width='70' height='20'/>";
echo "<img src='afb/tape2.png' class='page3tape2' width='70' height='20'/>";
echo "<img src='afb/ArchivePic.jpg' class='Page3Art' width='200' height='350'>";
echo "<img src='afb/tape1.png' class='page3tape3' width='70' height='20'/>";
echo "<img src='afb/tape1.png' class='page3tape5' width='70' height='20'/>";
?>