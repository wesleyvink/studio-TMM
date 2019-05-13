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
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
    In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
    Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
    Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
    Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
    Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
    Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
    Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.
    Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem.
</div>
<div id="page2">
  <a id="opdrachten" class="smooth"></a>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
    In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
    Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
    Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
    Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
    Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
    Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
    Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.
    Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem.
</div>
<div id="page3">
  <a id="agenda" class="smooth"></a>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
    In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
    Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
    Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
    Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
    Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
    Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
    Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.
    Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem.
  </div>
<div id="page4">
  <a id="archief" class="smooth"></a>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
    In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
    Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
    Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
    Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
    Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
    Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
    Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.
    Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem.
  </div>
</body>
</html>