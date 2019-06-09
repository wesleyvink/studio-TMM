<?php
session_start();
require "dbs/dbconnect.php";
if (isset($_POST['opID3'])){
    $opID = $_POST['opID3'];
    $_SESSION['opID3'] = $opID;
}
else{
    $opID = $_SESSION['opID3'];
}
?>
    <h1>fotos van het project</h1>
<?php
$sql  = "SELECT * FROM `foto` WHERE omschrijving is not null and omschrijving not like '0' and OpdrachtID = ".$opID;
$result = $conn->query($sql);
echo "<table width='60%'>";
echo "<tr><th>omschrijving</th><th style=' float: left; margin-left: 10%'>foto</th></tr>";
while ($row= $result->fetch_assoc()){
    echo "<tr>";
    echo  "<td>".$row["omschrijving"]."</td>";
    echo  "<td> <img  src='".$row["fotoloc"]."' style='height: 20%;; margin-left: 10%' width=20% /></td>";
    echo "</tr>";
}
echo "</table>";
?>