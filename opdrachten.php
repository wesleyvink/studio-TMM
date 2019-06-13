<?php
require "dbs/dbconnect.php";
$sql = "SELECT opdrachten.ID, Bedrijfsnaam,Opdrachtnaam,Opdrachtbeschrijving FROM `opdrachten` LEFT JOIN `deelnemers` on `deelnemers`.`OpdrachtID` = `opdrachten`.`ID` WHERE afgerond LIKE 0 and NOT EXISTS (SELECT * FROM `deelnemers` WHERE `deelnemers`.`UserID` != ".$_SESSION['uID'].")";
$result = $conn->query($sql);
echo "<table>";
echo "<tr><th>bedrijfsnaam</th><th>opdrachtnaam</th><th>opdrachtbeschijving</th></tr>";
while ($row= $result->fetch_assoc()){
    $opID = $row["ID"];
    echo "<form action='soliciteer.php' method='post'>";

    echo "<tr>";
    echo  "<td>".$row["Bedrijfsnaam"]."</td>";
    echo  "<td>".$row["Opdrachtnaam"]."</td>";
        echo "<td><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='button' onclick='fer".$row["ID"]."()'>meerinfo</button></td>";
    echo "<td>  <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='opID' class=\"example_a\" rel=\"nofollow noopener\">Soliciteer</button></div>";
    echo "</form><td><form action='fotos.php' method='post'> <div class=\"button_cont\" align=\"center\"><button type=\"button\"  data-toggle=\"modal\" data-target=\"#myModal\" value='".$row["ID"]."'  name='opID3' class=\"example_a\" rel=\"nofollow noopener\">fotos bekijken</button></div></form></td>  ";

    echo "</tr>";
    echo "<script> function fer".$row["ID"]."() {
    alert('".$row["Opdrachtbeschrijving"]."')
}</script>";
}

echo "</table></form>";
?>
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <?php include "soliciteer.php"?>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
