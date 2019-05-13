<?php require "dbs/dbconnect.php"; ?>
<form action="register.php" method="post">
    Voornaam
    <input type="text" name="vnaam" required><br/>
    Achternaam
    <input type="text" name="anaam" required><br/>
    Geboortedatum
    <input type="date" name="datum" required><br/>
    Email
    <input type="email" name="email" required><br/>
    Wachtwoord
    <input type="password" name="pass" required><br/>
    Wachtwoord opnieuw invoeren
    <input type="password" name="passconfirm" required><br/>
    <button type="submit">registreer</button>
</form>

<h2>
    heeft u al een account log <a href="index.php">hier</a> in
</h2>
<?php
if (isset($_POST["vnaam"])) {
    $first = $_POST["vnaam"];
    $last = $_POST["anaam"];
    $birthdate = $_POST["datum"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $passconfirm = $_POST["passconfirm"];

    $sql = "select * from `users` where `Email` like '".$email."'";

    $result = $conn->query($sql);
    if (0 != $result->num_rows)
    {
        echo "email is al in gebruik";
    }
    else
    {
        $hashed = password_hash($pass,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users`(`VoorNaam`, `AchterNaam`, `Geboortedatum`, `Email`, `Wachtwoord`)
        VALUES ('$first','$last','$birthdate','$email','$hashed')";
        if ($pass == $passconfirm) {
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                echo "<script type='text/javascript'>location.href = 'index.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else {
            echo "wachtwoorden zijn niet hetzelfde";
        }
    }
}
?>
