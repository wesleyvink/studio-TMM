<?php
if (isset($_POST["aan"])){

    $sql = "UPDATE `deelnemers` SET`aangenomen`= 1 WHERE `ID` LIKE ".$_POST["aan"];
    $conn->query($sql)  or die("Error : " . mysqli_error($conn));
    echo "<script type='text/javascript' >alert('solicitant aangenomen')</script>";
}
elseif (isset($_POST["afw"])){
    $sql = "DELETE FROM `deelnemers` WHERE id like ".$_POST["afw"];
    $conn->query($sql)  or die("Error : " . mysqli_error($conn));
    echo "solicitant afgewezen";
}
$sql ="select deelnemers.ID, cv, cvloc , motievatie, opdrachtnaam,Opdrachtbeschrijving,voornaam , achternaam from `deelnemers` INNER JOIN `opdrachten` ON `opdrachten`.`ID` = `deelnemers`.`OpdrachtID` INNER JOIN users on users.ID = deelnemers.UserID where `aangenomen` like 0 AND `opdrachten`.`Bedrijfsnaam` LIKE'".$_SESSION['role']."' ";
$result = $conn->query($sql);
try {
    echo "<form action='mainpage.php' method='post'>";
    echo "<table>";
    echo "<tr><th>naam solicitant</th><th>opdrachtnaam</th><th>cv</th><th>motivatie</th><th>opdrachtbeschijving</th></tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr>";
        echo  "<td>".$row["voornaam"]." ".$row["achternaam"]."</td>";
        echo  "<td>".$row["opdrachtnaam"]."</td>";
        echo  "<td><a href='".$row["cvloc"]."' ><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='button' >CV</button></a></td>";
        echo "<td><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='button' onclick='mot".$row["ID"]."()'>motivatie</button></td>";
        echo "<td><div class=\"button_cont\" align=\"center\"><button class=\"example_a\" rel=\"nofollow noopener\" type='button' onclick='fer".$row["ID"]."()'>meerinfo</button></td>";
        echo "<td>  <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='aan' class=\"example_a\" rel=\"nofollow noopener\">aannemen</button></div>
</div></td>";
        echo "<td>  <div class=\"button_cont\" align=\"center\"><button type='submit' value='".$row["ID"]."'  name='afw' class=\"example_a\" rel=\"nofollow noopener\">afwijzen</button></div>
</div></td>";


        echo "</tr>";
        echo "<script> function fer".$row["ID"]."() {
    alert('" . $row["Opdrachtbeschrijving"] . "')
    }
    function mot".$row["ID"]."() {
    alert('".$row["motievatie"]."')
}</script>";
    }
    echo "</table></form>";
}
catch (Exception $exception){
    echo "er zijn nog geen solicitanten";
}
