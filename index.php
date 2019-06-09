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
