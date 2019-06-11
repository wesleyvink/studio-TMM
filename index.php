<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
</head>
<div class="background-image"></div>
    <div class="middle">
<form action="index.php" method="post">
        <div class="tbUser">
    email: <input type="text" name="user" required/> <br/>
        </div>
        <div class="tbPassword">
    wachtwoord: <input type="password" name="pas" required/><br/>
        </div>
        <div class="btnLogin">
    <button class="example_a" type="submit">login</button>
        </div>
</form>
        </div>
<?php
require "dbs/dbconnect.php";
if (isset($_POST['user']) && isset($_POST['pas'])){
$user = $_POST['user'];
$pass = $_POST['pas'];
    $sql = "select * from `users` where `Email` like '$user'";
    $result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

    if (password_verify($pass, $row['Wachtwoord'])) {

        session_start();
            $_SESSION['uID'] = $row['ID'];
            $_SESSION['role'] = $row['Bedrijfsnaam'];
        echo "<script type='text/javascript'>location.href = 'mainpage.php'</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('fout e-mail/wachtwoord')</script>";
    }
}
}

?>
</html>