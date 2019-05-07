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
  <span id="struc">
  <img src="afb\SUMMA_ECHT2473_Summa_Fashion_sticker_40x30mm-HR.png" height="100" />
     <ul>
         <li><a href="#home">home</a></li>
         <li><a href="#opdrachten">opdrachten</a></li>
         <li><a href="#agenda">agenda</a></li>
         <li><a href="#archief">archief</a></li>
         <li><a href="index.php">log uit</a></li>
     </ul>
</span>
</div>
<div id="page1">
  <a id="home" class="smooth"></a>
  pagina 1
</div>

<div id="page2">
  <a id="opdrachten" class="smooth"></a>
  pagina 2
</div>
<div id="page3">
  <a id="agenda" class="smooth"></a>
  pagina 3
  </div>
<div id="page4">
  <a id="archief" class="smooth"></a>
  pagina 4
  </div>
</body>
</html>