<?php
$sql = "SELECT opdrachten.ID, Bedrijfsnaam,Opdrachtnaam,Opdrachtbeschrijving FROM `opdrachten` WHERE `Bedrijfsnaam` like 'echtbedrijf'";
$result = $conn->query($sql);
echo "<form action='foto%20toevoegen.php' method='post'>";
echo "<table>";
echo "<tr><th>bedrijfsnaam</th><th>opdrachtnaam</th><th>opdrachtbeschijving</th></tr>";
while ($row= $result->fetch_assoc()){
    echo "<tr>";
    echo  "<td>".$row["Bedrijfsnaam"]."</td>";
    echo  "<td>".$row["Opdrachtnaam"]."</td>";
    echo "<td><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='button' onclick='fer".$row["ID"]."()'>meerinfo</button></td>";
    echo "<td>  <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='opID2' class=\"example_a\" rel=\"nofollow noopener\">foto toevoegen</button></div>
</div></td>";

    echo "</tr>";
    echo "<script> function fer".$row["ID"]."() {
    alert('".$row["Opdrachtbeschrijving"]."')
}</script>";
}
echo "</table></form>"
?>