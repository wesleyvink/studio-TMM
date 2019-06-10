<form action="mainpage.php" method="post">
    <table>
    <tr>
        <td>
            opdracht naam
        </td>
        <td>
        <input type="text" name="opnaam" required/>
        </td>
    </tr>
        <tr>
            <td>
                opdracht omschrijving
            </td>
            <td>
                <input type="text" name="opdesc" required/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="opdracht aanmaaken">
            </td>
        </tr>
    </table>
</form>
<?php
if (isset($_POST["opnaam"]))
{
    $sql = "select * from `opdrachten` where `Opdrachtnaam` like '".$_POST["opnaam"]."'";
    $result2 =$conn->query($sql);
    if ($result2 == null) {
        $sql = "INSERT INTO `opdrachten`(`Bedrijfsnaam`, `Opdrachtnaam`, `Opdrachtbeschrijving`, `afgerond`) VALUES ('" . $_SESSION['role'] . "','" . $_POST['opnaam'] . "','" . $_POST['opdesc'] . "',0)";
        $conn->query($sql) or die("Error : " . mysqli_error($conn));
        echo "opdracht succesvol toegevoegd";

    }
    else{
        echo "er bestaat al een opdracht onder die naam";
    }
}
?>