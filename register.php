<?php require "dbs/dbconnect.php"; ?>
<form action="register.php" method="post">
    <input type="text" name="vnaam"><br/>
    <input type="text" name="anaam"><br/>
    <input type="date" name="datum"><br/>
    <input type="text" name="email"><br/>
    <input type="password" name="pass"><br/>
    <input type="password" name="passconfirm"><br/>
    <button type="submit">registreer</button>
</form>

<h2>
    heeft u al een account log <a href="register.php">hier</a> in
</h2>
<?php
if (isset($_POST["vnaam"])) {
    $first = $_POST["vnaam"];
    $last = $_POST["anaam"];
    $birthdate = $_POST["datum"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $passconfirm = $_POST["passconfirm"];

    echo $birthdate;

    $sql ="INSERT INTO `users`(`VoorNaam`, `AchterNaam`, `Geboortedatum`, `Email`, `Wachtwoord`)
    VALUES ('$first','$last','$birthdate','$email','$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<script type='text/javascript'>location.href = 'index.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
