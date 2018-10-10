<style>
	.delButton{
		color: #ff9696;
	}
</style>
<div class="panel panel-default">
  <div class="panel-body">
  <?php 
  // $foodid = "19";
  // $fud = getFoodImageByID($foodid);
  // echo "Fud: ".$fud;
   ?>
  	<h2>Cập nhật trạng thái món ăn</h2>
  	
  		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Món Gà</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=1 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td>
			        	<?=$row['ta_ten']?><br>
			        	<a onclick="return deleteConfirm()" class='delButton' href="?keyad=update_status_food.php&deleteFood=<?=$foodid?>">Xóa</a>
			        </td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        	
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>





		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Món bò</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=2 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td>
			        	<?=$row['ta_ten']?><br>
			        	<a onclick="return deleteConfirm()" class='delButton' href="?keyad=update_status_food.php&deleteFood=<?=$foodid?>">Xóa</a>
			        </td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>






		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Pizza</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=3 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td>
			        	<?=$row['ta_ten']?><br>
			        	<a onclick="return deleteConfirm()" class='delButton' href="?keyad=update_status_food.php&deleteFood=<?=$foodid?>">Xóa</a>
			        </td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>





		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Món ăn nhẹ</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=4 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td>
			        	<?=$row['ta_ten']?><br>
			        	<a onclick="return deleteConfirm()" class='delButton' href="?keyad=update_status_food.php&deleteFood=<?=$foodid?>">Xóa</a>
			        </td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>





		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Món tráng miệng</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=5 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td>
			        	<?=$row['ta_ten']?><br>
			        	<a onclick="return deleteConfirm()" class='delButton' href="?keyad=update_status_food.php&deleteFood=<?=$foodid?>">Xóa</a>
			        </td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>





		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Thức uống</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=6 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td>
			        	<?=$row['ta_ten']?><br>
			        	<a onclick="return deleteConfirm()" class='delButton' href="?keyadphpdate_status_food.php&deleteFood=<?=$foodid?>">Xóa</a>
			        </td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>

  </div><!--panelbody-->
</div><!--panel-->



<?php 
	if(isset($_GET['updatestatus'])){
		$foodid = $_GET['updatestatus'];
		$status = $_GET['status'];
		
		if($status == 1){
			$stt = 0;
		}else{
			$stt = 1;
		}
		$sql ="update thucan set ta_tinhtrang='$stt' where ta_ma='$foodid'";
		$do=mysqli_query($db,$sql);
		if($do){
			
 			echo "<script>window.location='?keyad=update_status_food.php'</script>";
		}else{
 			echo "<script>alert('Cập nhật thất bại')</script>";
 		}
	}

	// $img = "14.png";//ok
	// $link="../images/food/".$img;//ok
	// unlink($link);




	//to delete a food
	// 1: Tìm combo chứa food id 			R
	// 2: Xóa hình các combo này nếu có		R
	// 3: Xóa combo này						R
	// 4: Xóa food 			
	// 5: Xóa hình của food nếu có
	if(isset($_GET['deleteFood'])){
		$foodid = $_GET['deleteFood'];
		
		$timcombo = "SELECT c.combo_ma from thucan a join chitietcombo b on a.ta_ma=b.ta_ma join combo c on c.combo_ma=b.combo_ma where a.ta_ma=$foodid";
		$do1 = mysqli_query($db,$timcombo); // tim tat ca combo có chứa food định xóa

		while($combo = mysqli_fetch_array($do1)){
			$comboid = $combo['combo_ma'];
			$img = getComboImageByID($comboid);
			if($img!='no_image.png'){
				$link = "../images/combo/".$img;
				unlink($link);
			}
			$xoacombo = "DELETE FROM combo where combo_ma=$comboid";
			$do2 = mysqli_query($db,$xoacombo);
		}
		$foodimg = getFoodImageByID($foodid);//lay hinh truoc khi xoa khoi CSDL
		$xoafood = "DELETE FROM thucan where ta_ma=$foodid";
		$do3 = mysqli_query($db,$xoafood);

		if($do3){
			
			
			if($foodimg!='no_image.png'){
				
				$link2 = "../images/food/".$foodimg;
				unlink($link2);
				
			}
		    echo "<script>alert('Đã xóa');window.location='?keyad=update_status_food.php';</script>";
		}else{
			echo "<script>alert('Lỗi xóa món ăn 003xx');window.location='?keyad=update_status_food.php';</script>";
		}
	}

	// if(isset($_GET['test'])){  //test ok
	// 	$foodid=$_GET['test'];
	// 	$foodimg = getFoodImageByID($foodid);
	// 	echo "<h1>".$foodimg."</h1>";
	// 	if($foodimg!='no_image.png'){
	// 			$link2 = "../images/food/".$foodimg;
	// 			unlink($link2);
	// 			echo "unlink roi";
	// 	}else{
	// 		echo "KO UN dc";
	// 	}
	// }
?>
