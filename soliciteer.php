
<?php
session_start();
require "dbs/dbconnect.php";
$opID = 1;
$user = $_SESSION['uID'];
if (isset($_POST['opID'])){
    $opID = $_POST['opID'];
    $_SESSION['opID'] = $opID;
}
else{
    $opID = $_SESSION['opID'];
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
</head>
    <div class="Picture" >
<form style="margin-left: 30px; margin-top: 30px" action='soliciteer.php' method='post' enctype="multipart/form-data">
    <table>
        <tr><td>cv</td><td>
                <input type='file' name='cv' /></td> </tr><tr><td>motivatie</td><td>
                <textarea style="height: 300px; width: 220%" name='motievatie'></textarea></td></tr>
        <tr><td></td><td> <input class="example_a" name="submit" type='submit'/></td></tr>
    </table>
</form>
</div>
<?php
if(isset($_POST['submit'])) {
// location.href = 'mainpage.php';
    $fileExistsFlag = 0;
    $fileName = $_FILES['cv']['name'];
    $query = "SELECT cv FROM deelnemers WHERE cv='$fileName' and  UserID NOT like ".$_SESSION["uID"];
    $result = $conn->query($query) or die("Error : " . mysqli_error($conn));
    while ($row = mysqli_fetch_array($result)) {
        if ($row['filename'] == $fileName) {
            $fileExistsFlag = 1;
        }
    }
    if ($fileExistsFlag == 0) {
        $target = "cvs/";
        $fileTarget = $target . $fileName;
        $tempFileName = $_FILES["cv"]["tmp_name"];
        $motievatie = $_POST['motievatie'];
        $result = move_uploaded_file($tempFileName, $fileTarget);

        /*
        *	If file was successfully uploaded in the destination folder
        */
        if ($result) {
            $query = "INSERT INTO `deelnemers`(`UserID`, `OpdrachtID`,`cv`, `cvloc`, `motievatie`) VALUES ('$user','$opID','$fileName','$fileTarget','$motievatie')";
            $conn->query($query) or die("Error : " . mysqli_error($conn));
            echo "<script type='text/javascript'>location.href = 'mainpage.php'</script>";

        } else {
            echo "Sorry !!! There was an error in uploading your file";
        }
        mysqli_close($conn);
    } else {
        echo "Bestand <html><b><i>" . $fileName . "</i></b></html> bestaat al. Geef het een andere naam en probeer opnieuw.";
        mysqli_close($conn);
    }
}
?>
</html>
