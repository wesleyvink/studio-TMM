<?php
$sql = "select Bedrijfsnaam from users where  id =".$_SESSION["uID"];
$result = $conn->query($sql);
?>
<nav style="position: fixed; z-index: 99;">
    <ul>
        <li><a href="#home">home</a></li>
        <li><a href="#opdrachten">opdrachten</a></li>
        <li><a href="#uw projecten">uw projecten</a></li>
        <li><a href='#archief'>archief</a></li>
        <?php
        while ($row = $result->fetch_assoc()) {

            if ($row['Bedrijfsnaam'] == "docent" || $row['Bedrijfsnaam'] != "student") {
                echo "<li><a href='#secret'>";
                if ($row['Bedrijfsnaam'] == "docent") {
                    echo "nieuw account";
                } else {
                    echo "nieuwe opdracht";
                }
                echo "</a></li>";
            }
        }?>
        <li><a href="index.php">loguit </a></li>
     </ul>
</nav>

<div class="content"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

    (function() {

        var documentElem = $(document),
            nav = $('nav'),
            lastScrollTop = 0;

        documentElem.on('scroll', function() {
            var currentScrollTop = $(this).scrollTop();


            if ( currentScrollTop > lastScrollTop ) nav.addClass('hidden');

            else nav.removeClass('hidden');

            lastScrollTop = currentScrollTop;
        });



    })();
</script>