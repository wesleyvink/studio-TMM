<div class="page4banner">
    <h1>voeg hier een nieuwe opdracht toe <i class="down"></i></h1>
</div>
<img src="afb/tape1.png" class="page4tape1" width="70" height="20"/>
<img src="afb/tape2.png" class="page4tape2" width="70" height="20"/>
<div class="page4left">
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
    $sql5 = "select * from `opdrachten` where `Opdrachtnaam` like '".$_POST["opnaam"]."'";
    $result2 =$conn->query($sql5);
        if (0 == $result2->num_rows) {
            $sql = "INSERT INTO `opdrachten`(`Bedrijfsnaam`, `Opdrachtnaam`, `Opdrachtbeschrijving`, `afgerond`) VALUES ('" . $_SESSION['role'] . "','" . $_POST['opnaam'] . "','" . $_POST['opdesc'] . "',0)";
            $conn->query($sql) or die("Error : " . mysqli_error($conn));
            echo "<script type='text/javascript'>location.href = 'mainpage.php'</script>";

        } else {
            echo "<script type='text/javascript'>alert('er bestaat al een opdracht onder die naam')</script>";

        }
}
?>