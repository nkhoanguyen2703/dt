<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"> </script>
   
    <script>
        $(":file").filestyle();
    </script>

    <?php
        include "../database.php";
        session_start();
    ?>
</head>

<body>
<br><br><br>

<nav class="navbar navbar-inverse navbar-fixed-top" style="z-index: 2; border-radius: 0px; border: none;" data-spy="affix" data-offset-top="530">
<div class="container-fluid">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Admin Page</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <?php
        if(isset($_SESSION['admin'])) {
            ?>
            <ul class="nav navbar-nav">
                
                <li><a href="?keyad=add_food.php">Thức ăn</a></li>
                
            </ul>
        <?php
        }
        ?>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="signout.php"><span class="glyphicon glyphicon-off"></span> Thoát</a></li>
        </ul>
    </div>
</div>
</nav>


<div class="container" >
<?php

$file="add_food.php";
if(isset($_GET["keyad"]) && isset($_SESSION['admin'])) //INCLUDE trang vao phan` Content
{
    $file=$_GET["keyad"];
    include $file;
}else{
    include "login.php";
}

?>
</div>


</body>
</html>
