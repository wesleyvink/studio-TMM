<?php require "dbs/dbconnect.php"; ?>
<form action="mainpage.php" method="POST">
    <div class="page4banner">
        <h1>Registreer een nieuwe gebruiker hier <i class="down"></i></h1>
    </div>
    <img src="afb/tape1.png" class="page4tape1" width="70" height="20"/>
    <img src="afb/tape2.png" class="page4tape2" width="70" height="20"/>
    <div class="page4left">
    Voornaam :<br/>
    <input type="text" name="vnaam" required><br/>
    Achternaam :<br/>
    <input type="text" name="anaam" required><br/>
    Geboortedatum :<br/>
    <input type="date" name="datum" required><br/>
    Email :<br/>
    <input type="email" name="email" required><br/>
        </div>
    <div class="page4right">
    bedrijfs naam :<br/>
    <label><input type="radio" name="bedrijf" value="student" title="student" onclick="disable()" required>student</label> <br/>
    <label><input type="radio" name="bedrijf" value="docent" title="docent" onclick="disable()" required>docent</label><br/>
    <label><input type="radio" name="bedrijf" value="client" title="client" onclick="enable()" required>client(selecteer hier onder de naam van het bedrijf)</label><br/>

    <select  id="bedrf" name="bedrijfn" disabled>
        <?php
        $sql = "select * from bedrijven";
        $result =$conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<option>".$row["Bedrijfsnaam"]."</option>";
        }
        ?>
    </select><br/>
    Wachtwoord :<br/>
    <input type="password" name="pass" required><br/>
    Wachtwoord opnieuw invoeren :<br/>
    <input type="password" name="passconfirm" required><br/>
        </div>
        <div class="page4submit">
    <button type="submit" class="example_a">registreer</button>
        </div>
</form>
<script>
    var bedrijfinput = document.getElementById("bedrf");
    function enable() {
        bedrijfinput.removeAttribute("disabled");
    }
    function disable() {
        bedrijfinput.disabled= true;
    }
</script>
<?php
if (isset($_POST["vnaam"])) {
    $first = $_POST["vnaam"];
    $last = $_POST["anaam"];
    $birthdate = $_POST["datum"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $passconfirm = $_POST["passconfirm"];

    $sql2 = "select email from `users` where `Email` like '".$email."'";

    $result2 = $conn->query($sql2);
    if (0 != $result2->num_rows)
    {
        echo "<script type='text/javascript'>alert('email is al in gebruik')</script>";
    }
    else
    {
        $hashed = password_hash($pass,PASSWORD_DEFAULT);
        if ($pass == $passconfirm) {

            $bedrijf=$_POST["bedrijf"];
            if ($bedrijf == "client"){
                $bedrijf = $_POST["bedrijfn"];
            }

            $result = $conn->query($sql);
                $sql = "INSERT INTO `users`(`VoorNaam`, `AchterNaam`, `Geboortedatum`, `Email`, `Wachtwoord`, `Bedrijfsnaam`)
                VALUES ('$first','$last','$birthdate','$email','$hashed','$bedrijf')";
                if ($pass == $passconfirm) {
                    if ($conn->query($sql) === TRUE) {
                        echo "<script type='text/javascript'>alert('account succesvol aangemaakt')</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    die();

                }

        }
        else {
            echo "<script type='text/javascript'>alert('wachtwoorden zijn niet hetzelfde')</script>";
        }
    }
}
?>
