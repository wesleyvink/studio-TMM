<?php
session_start();
require "dbs/dbconnect.php";
$user = $_SESSION['uID'];
if (isset($_POST['opID'])){
    $opID = $_POST['opID'];
    $_SESSION['opID'] = $opID;
}
else{
    $opID = $_SESSION['opID'];
}

?>
<form action='soliciteer.php' method='post' enctype="multipart/form-data">
<input type='file' name='cv' /> <input type='text' name='motievatie'/> <input name="submit" type='submit'/>
</form>
<?php
if(isset($_POST['submit'])) {
// location.href = 'mainpage.php';
    $fileExistsFlag = 0;
    $fileName = $_FILES['cv']['name'];
    $query = "SELECT cv FROM deelnemers WHERE cv='$fileName'";
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
            echo "Your file <html><b><i>" . $fileName . "</i></b></html> has been successfully uploaded";
            $query = "INSERT INTO `deelnemers`(`UserID`, `OpdrachtID`,`cv`, `cvloc`, `motievatie`) VALUES ('$user','$opID','$fileName','$fileTarget','$motievatie')";
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