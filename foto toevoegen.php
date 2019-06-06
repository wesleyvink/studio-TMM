<?php
session_start();
require "dbs/dbconnect.php";
if (isset($_POST['opID2'])){
    $opID = $_POST['opID2'];
    $_SESSION['opID2'] = $opID;
}
else{
   $opID = $_SESSION['opID2'];
}
$opID = 1;
?>
<html>
<form action="foto%20toevoegen.php" method="post" enctype="multipart/form-data">
<input type="file" name="opdrachtafb">
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
        if ($row['filename'] == $fileName) {
            $fileExistsFlag = 1;
        }
    }
    if ($fileExistsFlag == 0) {
        $target = "opafb/";
        $fileTarget = $target . $fileName;
        $tempFileName = $_FILES["opdrachtafb"]["tmp_name"];
        $result = move_uploaded_file($tempFileName, $fileTarget);

        /*
        *	If file was successfully uploaded in the destination folder
        */
        if ($result) {
            echo "Your file <html><b><i>" . $fileName . "</i></b></html> has been successfully uploaded";
            $query = "INSERT INTO `foto`(`OpdrachtID`, `foto`, `fotoloc`) VALUES ('$opID','$fileName','$fileTarget')";
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