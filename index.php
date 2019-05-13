<form action="index.php" method="post">
    email <input type="text" name="user" required/> <br/>
    wachtwoord <input type="password" name="pas" required/><br/>
    <button type="submit">login</button>
</form>
<h2>
    heeft u nog geen account registeer <a href="register.php">hier</a>
</h2>
<?php
require "dbs/dbconnect.php";
if (isset($_POST['user']) && isset($_POST['pas'])){
$user = $_POST['user'];
$pass = $_POST['pas'];
//$hashed = password_hash($pass,PASSWORD_DEFAULT);
    $sql = "select * from `users` where `Email` like '$user'";
    $result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

    if (password_verify($pass, $row['Wachtwoord'])) {

        session_start();
        while ($row = $result->fetch_assoc()){
            $_SESSION['uID'] = $row['ID'];
        }
        echo "<script type='text/javascript'>location.href = 'mainpage.php'</script>";    }
    else {
        echo "<script type='text/javascript'>alert('fout e-mail/wachtwoord')</script>";
    }
}
die();
$sql = "SELECT * FROM `users` WHERE `Email` like '$user' and `Wachtwoord` like '$hashed'";
$result = $conn->query($sql);
if (0 == $result->num_rows){
    echo "<script type='text/javascript'>alert('fout e-mail/wachtwoord')</script>";
}
else{
    session_start();
    while ($row = $result->fetch_assoc()){
        $_SESSION['uID'] = $row['ID'];
    }
    echo "<script type='text/javascript'>location.href = 'mainpage.php'</script>";
}}

?>
