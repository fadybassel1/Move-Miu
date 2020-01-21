<?php 
session_start(); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We're Movers">
    <meta name="keywords" content="Move Club,Move,MIU Club,Movers">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="icon" sizes="128x128" href="./images/fav.png">
    <meta name="theme-color" content="#93ff91">
    <title>Move</title>
  </head>
  <body>
<!--   Header START   -->
<?php if(isset($_SESSION["type"])){
        if($_SESSION["type"]=="admin"){
        include("./admin_header.php"); }
        else include("./header.php");}
        else
        include("./header.php");?>  
<!--   Header END   -->
<!--      -->
<!--      -->
<!--  -->
<!-- Body START -->
<!-- About Us START -->
<div class="sec-cont sec-cont-s">
  <div class="h-text">About Us</div>
  <div class="events-cont about-us-cont">
    <!-- <h1>unfortunately, We don't have any events right now.</h1> -->
    <div class="event">
      <div class="img-side">
        <img src="http://placekitten.com/g/1200/1200">
      </div>
      <div class="text-side">
        <h2>Vision</h2>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur imperdiet nibh, ut vestibulum diam sollicitudin sit amet. Nam faucibus sollicitudin erat, quis efficitur justo bibendum vitae. Quisque ornare malesuada lorem sit amet posuere. Curabitur interdum, nisi at porta scelerisque, mauris enim blandit quam, ut volutpat justo enim et libero. Aenean vel massa nisi. Quisque at tempor mi, et rhoncus arcu. Vivamus convallis nibh vitae ex auctor tempus. Donec faucibus mi eu mauris tempus egestas.

      </div>
    </div>

    <div class="event">
      <div class="img-side">
        <img src="http://placekitten.com/g/1200/1200">
      </div>
      <div class="text-side">
        <h2>Mission</h2>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur imperdiet nibh, ut vestibulum diam sollicitudin sit amet. Nam faucibus sollicitudin erat, quis efficitur justo bibendum vitae. Quisque ornare malesuada lorem sit amet posuere. Curabitur interdum, nisi at porta scelerisque, mauris enim blandit quam, ut volutpat justo enim et libero. Aenean vel massa nisi. Quisque at tempor mi, et rhoncus arcu. Vivamus convallis nibh vitae ex auctor tempus. Donec faucibus mi eu mauris tempus egestas.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur imperdiet nibh, ut vestibulum diam sollicitudin sit amet. Nam faucibus sollicitudin erat, quis efficitur justo bibendum vitae. Quisque ornare malesuada lorem sit amet posuere. Curabitur interdum, nisi at porta scelerisque, mauris enim blandit quam, ut volutpat justo enim et libero. Aenean vel massa nisi. Quisque at tempor mi, et rhoncus arcu. Vivamus convallis nibh vitae ex auctor tempus. Donec faucibus mi eu mauris tempus egestas.

      </div>
    </div>

  </div>
</div>
<!-- About Us END -->


<!-- Footer START -->
<div class="footer">
© 2018 <span class="f-m">Move</span><span class="f-l-m"><a href="./"><img src="./images/logo.png"></a></span><br><div>- Designed by <a href="https://www.fb.com/Mhmd.Ashf" rel="noopener noreferrer">xTrimy</a></div>
<div class="shape1">
  <img src="./images/shapes/3.png">
</div>
</div>
<!-- Footer END -->
<!-- Body END -->
<script type="text/javascript" src="./js/slider.js"></script>
  </body>
</html>
