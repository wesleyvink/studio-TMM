<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <script src="main.js"></script>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.min.js"></script>
<script>
$('.smooth').on('click', function() {
    $.smoothScroll({
        scrollElement: $('body'),
        scrollTarget: '#' + this.id
    });
    
    return false;
});
</script>
<div id="nav">

  <!-- [/Nav]
 ==========================================-->
  <?php
  include 'navigation.php'
  ?>

  <!-- [/NAV]
============================================================================================================================-->

  <!-- [/MAIN-HEADING]
============================================================================================================================-->
  <section class="main-heading" id="home">
    <div class="overlay">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>

  </section>
  <!-- [/MAIN-HEADING]
  ============================================================================================================================-->

</div>
<div id="page1">
  <a id="howme" class="smooth"></a>
    <?php include "opdrachten.php";?>
</div>
<div id="page2">
  <a id="opdrachten" class="smooth"></a>
    <?php include "projecten.php";?>
    lorem ipsum
</div>
<div id="page3">
  <a id="agenda" class="smooth"></a>
    <?php include "archief.php"?>

  </div>
<div id="page4">
  <a id="archief" class="smooth"></a>
    <?php include "register.php"?>
  </div>
</body>
</html>
