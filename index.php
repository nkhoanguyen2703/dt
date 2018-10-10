<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>FastFood</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--imported by me-->
  <link rel="stylesheet" href="style.css">

</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">




<!--NAVBAR-->
<?php 
error_reporting(E_ERROR | E_PARSE); //hide Warning message
include "function.php";
include "navbar.php"; 
include "database.php"; 


session_start(); 

if(isset($_SESSION["cart"])==false){
        $_SESSION["cart"]=array();
}

if(isset($_SESSION["combocart"])==false){
        $_SESSION["combocart"]=array();
}

?>





<?php

  $page = "homepage.php";

  if(isset($_GET['key'])){
    $page=$_GET['key'];
  }
  
  include $page;

?>





<!-- Footer -->
<footer style="margin-bottom:0px; bottom:0; ">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>
    
    <div class="row">
    <div class="col-md-4">
      <p><span class="glyphicon glyphicon-map-marker"></span>Ninh Kiều, TP. Cần Thơ </p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 02923999888</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: @mail.com</p>
    </div>
    <div class="col-md-8">
      <a href="https://facebook.com"><img style="width:200px;" class="img-responsive" src="images/facebook.png"/></a>
    </div>
  </div>
  <br>

  </p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
