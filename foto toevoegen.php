<?php
session_start();
require "dbs/dbconnect.php";
if (isset($_POST['opID2'])){
    $opID2 = $_POST['opID2'];
    $_SESSION['opID2'] = $opID2;
}
else{
   $opID2 = $_SESSION['opID2'];
}
?>
<html>
<form action="foto%20toevoegen.php" method="post" enctype="multipart/form-data">
<input type="file" name="opdrachtafb" required><br/>
    omschrijving van de foto
    <input type='text' name='omschrijving' required/><br/>
<input type="submit" name="submit">
</form>
<a href="mainpage.php"><button>home</button></a>
</html>

<?php
if(isset($_POST['submit'])) {
// location.href = 'mainpage.php';
    $fileExistsFlag = 0;
    $fileName = $_FILES['opdrachtafb']['name'];
    $query = "SELECT foto FROM foto WHERE foto='$fileName'";
    $result = $conn->query($query) or die("Error : " . mysqli_error($conn));
    while ($row = mysqli_fetch_array($result)) {
        if ($row['foto'] == $fileName) {
            $fileExistsFlag = 1;
        }
    }
    if ($fileExistsFlag == 0) {
        $target = "opafb/";
        $fileTarget = $target . $fileName;
        $tempFileName = $_FILES["opdrachtafb"]["tmp_name"];
        $result = move_uploaded_file($tempFileName, $fileTarget);
        $desc = $_POST["omschrijving"];

        /*
        *	If file was successfully uploaded in the destination folder
        */
        if ($result) {
            echo "Your file <html><b><i>" . $fileName . "</i></b></html> has been successfully uploaded";
            $query = "INSERT INTO `foto`(`OpdrachtID`, `foto`, `fotoloc`,omschrijving) VALUES ('$opID2','$fileName','$fileTarget','$desc')";
            $conn->query($query) or die("Error : " . mysqli_error($conn));
        } else {
            echo "Sorry !!! There was an error in uploading your file";
        }
        mysqli_close($conn);
    } else {
        echo "File <html><b><i>" . $fileName . "</i></b></html> already exists in your folder. Please rename the file and try again.";
        mysqli_close($conn);
    }
}
?>