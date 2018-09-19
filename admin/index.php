<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="ckeditor/ckeditor.js"> </script> -->
   
    <script language="javascript">
        $(":file").filestyle();
    
        function deleteConfirm(){
            if(confirm("Bạn có chắc chắn muốn xóa!")){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
    

    <?php
        include "../database.php";
        include "function.php";
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
        <a class="navbar-brand" href="../index.php">Về trang chủ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <?php
        if(isset($_SESSION['admin'])) {
            ?>
            <ul class="nav navbar-nav">
                
                <li><a href="?keyad=add_food.php">Món ăn</a></li>
                <li><a href="?keyad=update_status_food.php">Trạng thái món</a></li>
                <li><a href="?keyad=add_combo.php">Tạo combo</a></li>
                <li><a href="?keyad=quanlydonhang.php">Quản lý đơn hàng</a></li>
                
            </ul>
        <?php
        }
        ?>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="?signoutadmin=1"><span class="glyphicon glyphicon-off"></span> Thoát</a></li>
        </ul>
    </div>
</div>
</nav>


<div class="container" >


<?php
// error_reporting(E_ERROR | E_PARSE); //hide Warning message

$file="login.php";
if(isset($_SESSION['admin'])){
    $file="quanlydonhang.php";
    if(isset($_GET['keyad'])){
        $file=$_GET['keyad'];
    }
}
include $file;





if(isset($_GET['signoutadmin'])){
    unset($_SESSION['admin']);
    echo "<script>window.location='index.php';</script>";
}

?>





</div>


</body>
</html>
